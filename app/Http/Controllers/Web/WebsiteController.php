<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Notice;
use App\User;
use Hash;
use Auth;
class WebsiteController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 1)->orderBy('created_at', 'desc')->limit(5)->get();
        $notices = Notice::where('status', 1)->orderBy('created_at', 'desc')->limit(10)->get();
        return view('frontend.index', compact('sliders', 'notices'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function admissionProcedure()
    {
        return view('frontend.admission_procedure');
    }

    public function registrationAdmission()
    {
        return view('frontend.reg_admission');
    }
    
    public function ourSchool()
    {
        return view('frontend.our_school');
    }

    public function exams()
    {
        return view('frontend.exams');
    }
    
    public function courses()
    {
        return view('frontend.courses');
    }

    public function showStudentLoginForm(){
        return view('frontend.login');
    }

    public function showStudentRegistrationForm()
    {
        return view('frontend.register');
    }

    public function studentLogin(Request $request)
    {
        $this->validate($request, [
            'mobile'    => 'required',
            'password'  => 'required'
        ]);

        $credentials = $request->only('mobile', 'password');
       
        if (Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password])) {
            
            return redirect()->intended('/web/dashboard');
        }else{
            return back()->with('error', "Phone No or Password is incorrect!");
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'mobile'    => 'required|numeric|min:10',
            'password'  => 'required|confirmed|min:6',
        ]);
        $mobile_check = User::where('mobile', $request->input('mobile'))->count();
        if($mobile_check){
            return back()->with('error', 'Mobile No already exists!!!');
        }

        $email_check = User::where('email', $request->input('email'))->count();
        if($email_check){
            return back()->with('error', 'Email Already exists!!!');
        }

        $student = new User;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->mobile = $request->input('mobile');
        $student->password = Hash::make($request->input('password'));

        $ins_student = $student->save();
        if($ins_student){
            return redirect()->route('student.login')->with('message', 'Registerd Successfully!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('student.login');
    }
}
