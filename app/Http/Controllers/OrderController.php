<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Shipment;

class OrderController extends Controller
{
    public function addpage()
    {
        $allproduct=Product::all();
        $allshipment=Shipment::all();
        return view('admin.order.addorder',compact('allproduct','allshipment'));
    }
    public function createorder(Request $req)
    {
        $order = new Order;
        $order->product_id=$req->product_id;
        $order->shipping_id=$req->shipping_id;
        $order->delivery_charge=$req->delivery_charge;
        $order->discount=$req->discount;
        $order->subtotal=$req->subtotal;
        $order->total=$req->total;
        $order->status=$req->status;
        $order->save();
        return back()->with('message','Order Upload successfully');

    }
    public function GetOrder()
    {
        $order = Order::all();
        return view('admin.order.allorder',compact('order'));
    }
    public function OrderEdit($id)
    {
        $orderedit = Order::find($id);
        $allproduct=Product::all();
        $allshipment=Shipment::all();
        return view('admin.order.ordereditupdate',compact('orderedit','allproduct','allshipment'));

    }
    public function Orderupdate(Request $req)
    {
         Order::find($req->order_id)->update([
            
            'product_id'=>$req->product_id,
        'shipping_id'=>$req->shipping_id,   
          'delivery_charge' =>$req->delivery_charge,
           'discount'=>$req->discount,
           'subtotal'=>$req->subtotal,
            'total'=>$req->total,
            'status'=>$req->status,
             ]);
            
             return redirect('showorder');
    }
    public function orderdelete($id)
    {
       $delete=Order::find($id)->delete();
       return back()->with('message','Successfully Delete Order',compact('delete'));

    }
}
