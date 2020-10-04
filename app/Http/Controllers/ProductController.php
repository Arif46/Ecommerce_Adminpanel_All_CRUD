<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Product;
use Validator;
use App\Brand;
use App\Subcategory;

class ProductController extends Controller
{
    public function addproductpage()
    {
        $brand=Brand::all();
        $subcategory=Subcategory::all();
        return view('admin.product.newproduct',compact('brand','subcategory'));
    }
    public function addproduct(Request $req)
    {
    // $this->validate($req, [
    //         'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
    // ]);

      $product = new Product;
      $product->brand_name = $req->brand_name;
      $product->subcategory_name=$req->subcategory_name;
      $product->name=$req->name;
      $product->description=$req->description;
      $product->old_price =$req->old_price;
      $product->new_price=$req->new_price;
      $product->is_avaliable=$req->is_avaliable;
      $product->is_in_stock=$req->is_in_stock;
      $product->quantity=$req->quantity;
      $product->product_type=$req->product_type;
      if ($req->hasFile('image')) {
        $image = $req->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/storage/ProductImages/');
        $image->move($destinationPath, $name);
        
      $product->image=$req->image; 
      $product->save();

      return back()->with('message','product upload successfully ');

    }
}

public function GetProduct()
{
  $allproduct=Product::all();
  return view('admin.product.allproduct',compact('allproduct'));
}
public function editProduct($id)
{
   $productEdit=Product::find($id);
   $brand=Brand::all();
   $subcategory=Subcategory::all();
   return view('admin.product.productedit',compact('productEdit','brand','subcategory'));

}
public function UpdateProduct(Request $req , $id)
{
      $productUpdate = new Product;
      $productUpdate=Product::find($id);
      $productUpdate->brand_name = $req->brand_name;
      $productUpdate->subcategory_name=$req->subcategory_name;
      $productUpdate->name=$req->name;
      $productUpdate->description=$req->description;
      $productUpdate->old_price =$req->old_price;
      $productUpdate->new_price=$req->new_price;
      $productUpdate->is_avaliable=$req->is_avaliable;
      $productUpdate->is_in_stock=$req->is_in_stock;
      $productUpdate->quantity=$req->quantity;
      $productUpdate->product_type=$req->product_type;
      if ($req->hasFile('image')) {
        $image = $req->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/storage/ProductImages/');
        $image->move($destinationPath, $name);  
      $productUpdate->image=$req->image; 
      $productUpdate->save();
      return redirect('allProduct');
      
}

}
public function deleteProduct($id)
{

        $productdelete=Product::find($id)->delete();
       return back()->with('message','Successfully Delete Brand',compact('productdelete'));

}
}