<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Validator;

class BrandController extends Controller
{
    public function addbrand()
    {
        return view('admin.brand.addbrand');
    }

    public function createbrand(Request $req)
    {
        
        $brand = new Brand;
        $brand->brand_name =$req->brand_name;
        $brand->brand_description =$req->brand_description;
        $brand->save();
        return back()->with('message','Successfully upload brand');

    }

    public function getBrand()
    {
        $allbrand =Brand::all();
        return view('admin.brand.allbrand',compact('allbrand'));
    }
    public function brandEdit($id)
    {
        $edit = Brand::findOrFail($id);
        return view('admin.brand.brandedit',compact('edit'));

    }
    public function brandupdate(Request $req)
    {
        Brand::find($req->brand_id)->update([
            
        'brand_name' => $req->brand_name,
        'brand_description' => $req->brand_description,
         ]);
        
         return redirect('allbrand');  

        // $brandupdate = new Brand;
        // $brandupdate=find($id);
        // $brandupdate->brand_name =$req->brand_name;
        // $brandupdate->brand_description =$req->brand_description;
        // $brandupdate->save();
        // return redirect('allbrand');  

    }
    public function Deletebrand($id)
    {
        Brand:: find($id)->delete();
        return back()->with('message','Successfully Delete Brand');
    }
}
