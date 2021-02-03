<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Feedback;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ViewVendors($id){
        $ven = Vendor::find($id);

        $cats = $ven->categories;

        return view('vendors_details', compact(['cats','ven']));
        
    }

    public function payForService($id){
        $price = $id;
        return view('payment',compact('price'));
    }

    public function PostPayment(Request $req){
        return view('confirmation');
    }


   public function PostFeedback(Request $req){
    Feedback::create([
        'name' => $req->name,
        'message' =>$req->message
    ]);
    return redirect()->back();
   }
}
