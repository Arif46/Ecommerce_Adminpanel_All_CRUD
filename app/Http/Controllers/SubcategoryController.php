<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
use Validator;
use Carbon\Carbon;

class SubcategoryController extends Controller
{
    public function addsubcategory()
    {
        $Category= Category::all();
        return view('admin.subcategory.newsubcategory',compact('Category'));
    }

    public function createsubcategory(Request $request)
    {
        $SubCategory = Validator::make($request->all(), [
            'category_name' => 'required|exists:categories,category_name',
            'subcategory_name' => 'required|max:255',
            'subcategory_description' => 'required',
        ]);
           SubCategory::insert([
            'category_name' =>$request->category_name,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_description' => $request->subcategory_description,
            'created_at' => Carbon::now(),
            ]);

            return back()->with('message','Successfully upload Sub Category');  
    }

    public function GetAllSubCategory()
    {
         $allsubcategory = Subcategory::all();
         return view('admin.subcategory.allsubcategory',compact('allsubcategory'));
    }

    public function EditSubCategory(Request $request,$id)
    {
        $subcategoryedit = Subcategory::findOrFail($id);
        return view('admin.subcategory.subcategoryedit',compact('subcategoryedit'));

    }
    public function subcategoryUpdate(Request $request)
    {
        Subcategory::find($request->subcategory_id)->update([
            
            'subcategory_name' => $request->subcategory_name,
            'subcategory_description' => $request->subcategory_description,
        
             ]);
        
             return redirect('allsubcategory');

    }
    public function deleteSubcategory($id)
    {
        Subcategory::find($id)->delete();
        return back()->with('message','Successfully Delete Category');

    }

}
