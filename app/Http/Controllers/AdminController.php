<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Feedback;
class AdminController extends Controller
{
    //
    public function index(){
        $vendor = Vendor::all();
       // return view('admin.dashboard')->with(['vendor',$vendor]);
        return view('admin.dashboard',compact('vendor'));
    }

     //feedback
     public function feedback(){
        return view('admin.feedback');
    }

    public function viewFeedback(){
        $feedbacks = Feedback::all();
        return view('admin.view_feedbacks',compact('feedbacks'));
    }
}
 