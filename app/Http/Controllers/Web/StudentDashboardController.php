<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\UploadedDocs;
use DB;
use Carbon\Carbon;
use App\Session;
use Intervention\Image\Facades\Image;
use File;
class StudentDashboardController extends Controller
{
    public function index()
    {
        // $registration = Registration::where('user_id', Auth::guard('student')->user()->id)->first();
        // $student = User::where('id', Auth::user()->id)->first();
        // dd($student);
        // $payment = Payment::where('buyer_email', $student->email)->first();

        return view('frontend.studentdashboard');
    }

    public function showAdmissionForm()
    {
        $student = User::where('id', Auth::user()->id)->first();
        $last_student = User::all()->last()->id;
        $generatedID = $this->applicationNoGeneration($last_student);
        $session = Session::get();
        return view('frontend.admission', compact('student', 'generatedID', 'session'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'session'                   => 'required',
            'course'                    => 'required',
            'sex'                       => 'required',
            'dob'                       => 'required',
            'fn'                        => 'required',
            'mn'                        => 'required',
            'gname'                     => 'required',
            'occupation'                => 'required',
            'income'                    => 'required|numeric',
            'nationality'               => 'required',
            'religion'                  => 'required',
            'cast'                      => 'required',
            'mobile'                    => 'required|numeric|min:10',
            'village'                   => 'required',
            'po'                        => 'required',
            'ps'                        => 'required',
            'dist'                      => 'required',
            'state'                     => 'required',
            'pin'                       => 'required',
            'p_village'                 => 'required',
            'p_po'                      => 'required',
            'p_ps'                      => 'required',
            'p_dist'                    => 'required',
            'p_state'                   => 'required',
            'p_pin'                     => 'required',
            'exam'                      => 'required',
            'registration'              => 'required',
            'last_attended_school'      => 'required',
            'last_school_addr'          => 'required',
            'ncc'                       => 'required',
            'bsg'                       => 'required',
            'computer'                  => 'required',
            'gap'                       => 'required',
            'hostel'                    => 'required',
            'place'                     => 'required',
            'placed1'                   => 'required',
            'dated1'                    => 'required',
            'photo'                     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ds1'                       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placed2'                   => 'required',
            'dated2'                    => 'required',
            'ds2'                       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

            // Photo of Student
            if($request->hasfile('photo'))
            {
                $photo_array = $request->file('photo');
                $photo = $this->imageInsert($photo_array, $request, 1);
            }

            // Signature of Student
            if($request->hasfile('ds1'))
            {
                $sign_array = $request->file('ds1');
                $sign = $this->imageInsert($sign_array, $request, 1);
            }

            // Signature of Parent/ Guardian
            if($request->hasfile('ds2'))
            {
                $psign_array = $request->file('ds2');
                $psign = $this->imageInsert($psign_array, $request, 1);
            }

            $registration = User::findOrFail(Auth::user()->id);
            $registration->application_no                   = $request->input('application');
            $registration->session                          = $request->input('session');
            $registration->course                           = $request->input('course');
            $registration->name                             = $request->input('name');
            $registration->sex                              = $request->input('sex');
            $registration->dob                              = $request->input('dob');
            $registration->fn                               = $request->input('fn');
            $registration->mn                               = $request->input('mn');
            $registration->gname                            = $request->input('gname');
            $registration->occupation                       = $request->input('occupation');
            $registration->income                           = $request->input('income');
            $registration->nationality                      = $request->input('nationality');
            $registration->religion                         = $request->input('religion');
            $registration->cast                             = $request->input('cast');
            $registration->mobile                           = $request->input('mobile');
            $registration->email                            = $request->input('email');
            $registration->vill                             = $request->input('village');
            $registration->po                               = $request->input('po');
            $registration->ps                               = $request->input('ps');
            $registration->dist                             = $request->input('dist');
            $registration->state                            = $request->input('state');
            $registration->pin                              = $request->input('pin');
            $registration->p_vill                           = $request->input('p_village');
            $registration->p_po                             = $request->input('p_po');
            $registration->p_ps                             = $request->input('p_ps');
            $registration->p_dist                           = $request->input('p_dist');
            $registration->p_state                          = $request->input('p_state');
            $registration->p_pin                            = $request->input('p_pin');
            $registration->exam                             = $request->input('exam');
            $registration->registration                     = $request->input('registration');
            $registration->last_attended_school             = $request->input('last_attended_school');
            $registration->last_school_addr                 = $request->input('last_school_addr');
            $registration->subject                          = $request->input('subject');
            $registration->max_marks                        = $request->input('max_mark');
            $registration->marks_obtained                   = $request->input('marks_obtained');
            $registration->ncc                              = $request->input('ncc');
            $registration->bsg                              = $request->input('bsg');
            $registration->computer                         = $request->input('computer');
            $registration->gap                              = $request->input('gap');
            $registration->hostel                           = $request->input('hostel');
            $registration->placed1                          = $request->input('placed1');
            $registration->dated1                           = $request->input('dated1');
            $registration->photo                            = $photo;
            $registration->ds1                              = $sign;
            $registration->placed2                          = $request->input('placed2');
            $registration->dated2                           = $request->input('dated2');
            $registration->ds2                              = $psign;

            $files = $request->uploaded_file;
            $doc_name = $request->document_name;
            if($request->hasFile('uploaded_file')){
                $images=array();
                $documents = array();
                if($request->file('uploaded_file')){
                    foreach($files as $file){
                        $destination = base_path().'/public/frontend/Allphotos/photos/';
                        $image_extension = $file->getClientOriginalExtension();
                        $image_name = md5(date('now').time()).(1).".".$image_extension;
                        $original_path = $destination;
                        $file->move($original_path,$image_name);
                        $images[]=$image_name;
                    }
                    for ($i = 0; $i < count($files); $i++) {
                        $documents[] = [
                            'user_id' => Auth::user()->id,
                            'document' => $images[$i],
                            'document_name' => $doc_name[$i],
                            'created_at'    => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
                        ];
                    }
                    $uploaded_docs = DB::table('uploaded_docs')
                    ->insert($documents);
                }

            }
           
            if($registration->save()){
                $generatedID = $this->applicationNoGeneration($registration->id);
                $user_update = DB::table('users')
                ->where('id', $registration->id)
                ->update([
                    'application_no' =>  $generatedID,
                ]);
                return redirect()->route('student.dashboard')->with('message','Application Successfully registerd!');
            }else{
                return redirect()->back()->with('error', 'Something Went Wrong!');
            }
    }

    function applicationNoGeneration($id){
        $user = User::count();
        if($user > 0){
            $first_name = 'L';
            $last_name = 'AA';
    
            $title_id = $first_name.$last_name;
            $l_id = 6 - strlen((string)$id);
            $generatedID = $title_id ;
            for ($i=0; $i < $l_id; $i++) { 
                $generatedID .= "0";
            }
            $generatedID .= $id;
            return $generatedID;
        }else{
            $generatedID = 'LAA000001';
            return $generatedID;
        }
    }

    function imageInsert($image, Request $request, $flag){
        $destination = base_path().'/public/frontend/student/img/';
        $image_extension = $image->getClientOriginalExtension();
        $image_name = md5(date('now').time()).$flag.".".$image_extension;
        $original_path = $destination.$image_name;
        Image::make($image)->save($original_path);
        $thumb_path = base_path().'/public/frontend/student/img/thumb/'.$image_name;
        Image::make($image)
        ->resize(300, 400)
        ->save($thumb_path);

        return $image_name;
    }
}
