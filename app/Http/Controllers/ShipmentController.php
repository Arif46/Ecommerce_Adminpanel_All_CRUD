<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipment;

class ShipmentController extends Controller
{
    public function addpage()
    {
        return view('admin.shipment.addshipment');

    }
    public function createShipment(Request $request)
    {
        $shipment = new Shipment;
        $shipment->first_name =$request->first_name;
        $shipment->last_name =$request->last_name;
        $shipment->company_name=$request->company_name;
        $shipment->country=$request->country;
        $shipment->street_address =$request->street_address;
        $shipment->city=$request->city;
        $shipment->district=$request->district;
        $shipment->post_code=$request->post_code;
        $shipment->phone=$request->phone;
        $shipment->email=$request->email;
        $shipment->save();
        return back()->with('message','shipment upload sucessfully');

    }
    public function getallshipment()
    {
        $allshipment =Shipment::all();
        return view('admin.shipment.allshipment',compact('allshipment'));
    }
    public function shipmentedit($id)
    {
        $shipmentedit = Shipment::find($id);
        return view('admin.shipment.editshipment',compact('shipmentedit'));
    }
    public function shipmentupdate(Request $req)
    {
        Shipment::find($req->shipment_id)->update([
            
            'first_name'=>$req->first_name,
           'last_name'=>$req->last_name,   
          'company_name' =>$req->company_name,
           'country'=>$req->country,
           'street_address'=>$req->street_address,
            'city'=>$req->city,
            'district'=>$req->district,
            'post_code'=>$req->post_code,
            'phone'=>$req->phone,
            'email'=>$req->email,
             ]);
            
             return redirect('allshipment');  

    }
    public function shipmentdelete($id)
    {
        $delete =Shipment::find($id)->delete();
        return back()->with('message','shipment sucessfully delete',compact('delete'));

    }
}
