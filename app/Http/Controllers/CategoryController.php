<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Validator;


class CategoryController extends Controller
{
    public function addcategory()
    {
          return view('admin.category.newcategory');
    }

    public function createcategory(Request $request)
    {
        $Category = Validator::make($request->all(), [
            'category_name' => 'required|unique:categories,category_name',
            'category_description' => 'required|unique:categories',
        ]);
         Category::insert([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            
            ]);

            return back()->with('message','Successfully upload category');


    }
    public function GetallCategory()
    {
        $allcategory=Category::all();
         return view('admin.category.allcategory',compact('allcategory'));

    }
    public function EditCategory($id)
    {
        $categoryedit=  Category::findOrFail($id);
        return view('admin.category.editcategory',compact('categoryedit'));
    }
    public function categoryupdate(Request $request)
    {
        Category::find($request->category_id)->update([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
        
             ]);
        
             return redirect('allcategory');

    }
    public function DeleteCategory($id)
    {
        Category:: find($id)->delete();
        return back()->with('message','Successfully Delete Category');
    }
}
