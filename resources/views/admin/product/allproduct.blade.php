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
<div class="col-lg-12 col-md-12 col-xl-12">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">brand Name</th>
            <th scope="col">subcategory name</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">old price</th>
            <th scope="col">new price</th>
            <th scope="col">is avaliable</th>
            <th scope="col">is in stock</th>
            <th scope="col">quantity</th>
            <th scope="col">product Type</th>
            {{-- <th scope="col">image</th> --}}
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($allproduct as $product)
          <tr>
            <th scope="row">{{ $loop->index+1 }}</th>
            <td>{{ $product->brand_name}}</td>
            <td>{{ $product->subcategory_name }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description}}</td>
            <td>{{ $product->old_price}}</td>
            <td>{{ $product->new_price}}</td>
            <td>{{ $product->is_avaliable}}</td>
            <td>{{ $product->is_in_stock}}</td>
            <td>{{ $product->quantity}}</td>
            <td>{{ $product->product_type}}</td>
            {{-- <td>{{ $product->image}}</td> --}}
            <td>
                <button type="button" class="btn btn-success"><a href="{{ url('productedit') }}/{{ $product->id }}">Edit</a></button>
                <button type="button" class="btn btn-danger"><a href="{{ url('Productdelete') }}/{{ $product->id }}">Delete</a></button>
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>

</div>



@endsection