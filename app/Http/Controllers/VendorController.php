<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\VendorCategory;
class VendorController extends Controller
{
    //

    public function index(){
        $vendor = Vendor::all();
        return view('admin.vendor.index',compact('vendor'));
    }

    public function create(){
        $vendor = Vendor::all();
        return view('admin.vendor.create',compact('vendor'));
    }

    public function post(Request $req){
        Vendor::create([
            'name' => $req->name
        ]);
        return redirect(route('vendor.index'));
    }

    public function createCategory(){
        $vendor = Vendor::all();
        return view('admin.vendor.createCategory',compact('vendor'));
    }

    //post vendor category
    public function postCategory(Request $req){
        
        VendorCategory::create([
            'category_name' => $req->category_name,
            'vendor_id' =>$req->vendor_id,
            'price' => $req->price
        ]);
        return redirect(route('vendor.index'));
    }
}
