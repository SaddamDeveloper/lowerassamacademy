<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Notice;
use Intervention\Image\Facades\Image;
use DataTables;
use DB;
use Carbon\Carbon;
use App\Gallery;
use App\User;
class AdminDashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function sliders()
    {
        return view('admin.sliders');
    }
    public function addSliderForm()
    {
        return view('admin.add_slider_form');
    }
    public function addSlider(Request $request)
    {
            $this->validate($request, [
                'title'   => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $destination = base_path().'/public/admin/sliders/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/admin/sliders/thumb/'.$image_name;
            Image::make($image)
            ->resize(300, 400)
            ->save($thumb_path);
        }
        
        $sliders = new Slider;
        $sliders->title = $request->input('title');
        $sliders->sub_title = $request->input('sub_title');
        $sliders->image = $image_name;

        if($sliders->save()){
            return redirect()->back()->with('message', 'Slider added Successfuly');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    public function getSliderList()
    {
        return datatables()->of(DB::table('sliders')->orderBy('created_at', 'desc')->get())
        ->addIndexColumn()
        ->addColumn('slider', function($row){
            if($row->image){
                $image = '<img src="'.asset("admin/sliders/thumb/".$row->image).'" width="100"/>';
            }
            return $image;
        })
        ->addColumn('action', function($row){
            if($row->status == 1){
                $btn = '<a href="'.route('admin.slider_status', ['id' => encrypt($row->id), 'status' => encrypt(2)]).'" class="btn btn-danger">Deactivate</a>';
            }else{
                $btn = '<a href="'.route('admin.slider_status', ['id' => encrypt($row->id), 'status' => encrypt(1)]).'" class="btn btn-success">Activate</a>';
            }
            return $btn;
        })
        ->rawColumns(['action', 'slider'])
        ->make(true);
    }

    public function statusSlider($sId, $statusId)
    {
        try {
            $id = decrypt($sId);
            $sId = decrypt($statusId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $slider_update = DB::table('sliders')
            ->where('id', $id)
            ->update([
                'status' => $sId,
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
            ]);

            if($slider_update){
                return redirect()->back()->with('message','Slider Updated Successfully');
            }else{
                 return redirect()->back()->with('error','Something Went Wrong Please Try Again');
            } 
    }

    public function notices()
    {   
        return view('admin.notices');
    }

    public function addNoticeForm()
    {
        return view('admin.add_notice_form');
    }

    public function addNotice(Request $request)
    {
        $this->validate($request, [
            'title'   => 'required',
            'notice' => 'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
        ]);
        
        if($request->hasfile('notice')){
            $notice = $request->file('notice');
            $destination = base_path().'/public/admin/notices/';
            $notice_extension = $notice->getClientOriginalExtension();
            $notice_name = md5(date('now').time()).".".$notice_extension;
            $original_path = $destination.$notice_name;
            $notice->move($destination, $notice_name);
        }

        $notices = new Notice;
        $notices->title = $request->input('title');
        $notices->notice = $notice_name;
        
        if($notices->save()){
            return redirect()->back()->with('message', 'Notice Added Successfully!');
        }else{
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function getNoticeList()
    {
        $query = Notice::orderBy('created_at','desc');
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->addColumn('notice', function($row){
            if($row->notice){
                $notice = '<a href="'.asset("admin/notices/".$row->notice).'" class="btn btn-default"/>View Notice</a>';
            }
            return $notice;
        })
        ->addColumn('action', function($row){
            if($row->status == 1){
                $btn = '<a href="'.route('admin.notice_status', ['id' => encrypt($row->id), 'status' => encrypt(2)]).'" class="btn btn-danger">Deactivate</a>';
            }else{
                $btn = '<a href="'.route('admin.notice_status', ['id' => encrypt($row->id), 'status' => encrypt(1)]).'" class="btn btn-success">Activate</a>';
            }
            return $btn;
        })
        ->rawColumns(['action', 'notice'])
        ->make(true);
    }

    public function statusNotice($nId, $statusId)
    {
        try {
            $id = decrypt($nId);
            $sId = decrypt($statusId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $notice_update = DB::table('notices')
        ->where('id', $id)
        ->update([
            'status' => $sId,
            'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
        ]);

        if($notice_update){
            return redirect()->back()->with('message','Notice Updated Successfully');
        }else{
             return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        } 

    }

    public function galleries()
    {
        return view('admin.galleries');
    }

    public function getGalleryList()
    {
        $query = Gallery::orderBy('created_at','desc');
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->addColumn('gallery', function($row){
            if($row->gallery){
                $gallery = '<img src="'.asset("admin/galleries/".$row->gallery).'" width="200"/>';
            }
            return $gallery;
        })
        ->addColumn('action', function($row){
            if($row->status == 1){
                $btn = '<a href="'.route('admin.gallery_status', ['id' => encrypt($row->id), 'status' => encrypt(2)]).'" class="btn btn-danger">Deactivate</a>';
            }else{
                $btn = '<a href="'.route('admin.gallery_status', ['id' => encrypt($row->id), 'status' => encrypt(1)]).'" class="btn btn-success">Activate</a>';
            }
            return $btn;
        })
        ->rawColumns(['action', 'gallery'])
        ->make(true);
    }

    public function addGallery(Request $request)
    {
        $this->validate($request, [
            'title'   => 'required',
            'gallery' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        if($request->hasfile('gallery')){
            $gallery = $request->file('gallery');
            $destination = base_path().'/public/admin/galleries/';
            $gallery_extension = $gallery->getClientOriginalExtension();
            $gallery_name = md5(date('now').time()).".".$gallery_extension;
            $original_path = $destination.$gallery_name;
            $gallery->move($destination, $gallery_name);
        }

        $galleries = new Gallery;
        $galleries->title = $request->input('title');
        $galleries->gallery = $gallery_name;
        
        if($galleries->save()){
            return redirect()->back()->with('message', 'Photo Added Successfully!');
        }else{
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function addGalleryForm()
    {
        return view('admin.add_gallery_form');
    }

    public function statusGallery($nId, $statusId)
    {
        try {
            $id = decrypt($nId);
            $sId = decrypt($statusId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $gallery_update = DB::table('galleries')
        ->where('id', $id)
        ->update([
            'status' => $sId,
            'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
        ]);

        if($gallery_update){
            return redirect()->back()->with('message','Gallery Updated Successfully');
        }else{
             return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        } 

    }

    public function applicants()
    {
        $applicants = User::orderBy('created_at', 'desc')->get();
        return view('admin.applicants', compact('applicants'));
    }
}
