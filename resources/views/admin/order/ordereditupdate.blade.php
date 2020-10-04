@extends('admin.maindashboard');
@section('content');


   <div class="col-lg-9 col-md-9 col-xl-9">
    @if(session('message'))
    <h4 style="color:red;" class="text-center">
     {{session('message')}}
      </h4>
   @endif
   @foreach($errors->all() as $error)
 <h4 style="color:red;" class="text-center">
        {{$error}}
          </h4>
  @endforeach 
    <div class="text-center">
        <h4>Edit Order</h4>
    </div>
        <div class="main-card mb-4 card">
            <div class="card-body">
                
                <form action="{{ url('UpdateOrder') }}" method="post" class="form-horizontal">
                    @csrf
                    
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Product Id</label>
                        <select name="product_id" id="select" required class="form-control">
                            <option value="">Select product id *</option>
                            @foreach($allproduct as $product)
                            <option value="{{$product->id}}">{{$product->id}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Shipping Id</label>
                        <select name="shipping_id" id="select" required class="form-control">
                            <option value="">Select Shipping id *</option>
                            @foreach($allshipment as $shipment)
                            <option value="{{$shipment->id}}">{{$shipment->id}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Delivery Charge</label>
                        <input required name="delivery_charge" value="{{ $orderedit->delivery_charge }}" type="text" class="form-control">
                        <input required name="order_id" value="{{ $orderedit->id }}" type="hidden" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Discount</label>
                        <input required name="discount" value="{{ $orderedit->discount }}"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Subtotal</label>
                        <input required name="subtotal" value="{{ $orderedit->subtotal }}"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Total</label>
                        <input required name="total" value="{{ $orderedit->total }}"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Status</label>
                        <input required name="status"  value="{{ $orderedit->status }}" type="text" class="form-control">
                    </div>

                  
                  
                   
                    <button type="submit" class="btn btn-primary btn-lg btn-block"> Submit</button>
                </form>
            </div>
        </div>
    </div>
  
   



@endsection