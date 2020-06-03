<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Notice;
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
}
