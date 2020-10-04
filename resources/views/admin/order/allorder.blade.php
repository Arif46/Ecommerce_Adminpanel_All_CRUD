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
        </div> 
 <div class="col-lg-9 col-md-9 col-xl-9">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Product Id</th>
            <th scope="col">Shipping Id</th>
            <th scope="col">Delivery Charge</th>
            <th scope="col">discount</th>
            <th scope="col">subtotal</th>
            <th scope="col">total</th>
            <th scope="col">status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($order as $view_order)
            <th scope="row">{{ $loop->index+1 }}</th>
            <td>{{ $view_order->product_id}}</td>
            <td>{{ $view_order->shipping_id }}</td>
            <td>{{ $view_order->delivery_charge }}</td>
            <td>{{ $view_order->discount }}</td>
            <td>{{ $view_order->subtotal }}</td>
            <td>{{ $view_order->total }}</td>
            <td>{{ $view_order->status }}</td>
            <td>
                <button type="button" class="btn btn-success"><a href="{{url('editOrder') }}/{{ $view_order->id }}">Edit</a></button>
                <button type="button" class="btn btn-danger"><a href="{{ url('delete') }}/{{ $view_order->id }} ">Delete</a></button>
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>

</div>



@endsection