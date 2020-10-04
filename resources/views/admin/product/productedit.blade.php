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
        <h4>edit Product</h4>
    </div>
        <div class="main-card mb-4 card">
            <div class="card-body">
                
                <form action="{{ url('updateProduct') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Product Name</label>
                        <input required name="name"  type="text" value="{{ $productEdit->name }}" class="form-control">
                        <input required name="id"  type="hidden" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">brand name</label>
            
                        <select name="brand_name" id="select"  required class="form-control">
                            <option value="">Select brand name *</option>
                            @foreach($brand as $view_brand)
                            <option value="{{$view_brand->brand_name}}">{{$view_brand->brand_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class=""> Sub category Name</label>
                        <select name="subcategory_name" id="select" required class="form-control">
                            <option value="">Select SubCategory name *</option>
                            @foreach($subcategory as $view_subcategory)
                            <option value="{{$view_subcategory->subcategory_name}}">{{$view_subcategory->subcategory_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleFormControlTextarea1">product Description</label>
                        <textarea class="form-control" required  name="description" value="{{ $productEdit->description }}"  id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Product Old Price</label>
                        <input required name="old_price"  type="text" value="{{ $productEdit->old_price }}" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Product New Price</label>
                        <input required name="new_price"  type="text" value="{{ $productEdit->new_price }}" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Avaliable</label>
                        <input required name="is_avaliable"  type="text" value="{{ $productEdit->is_avaliable }}" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">stock</label>
                        <input required name="is_in_stock"  type="text" value="{{ $productEdit->is_in_stock }}" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">quantity</label>
                        <input required name="quantity"  type="text" value="{{ $productEdit->quantity }}" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">product_type</label>
                        <input required name="product_type"  type="text" value="{{ $productEdit->product_type}}" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">product image</label>
                        <input required name="image"  type="file" class="form-control">
                    </div>
               

                   
                    <button type="submit" class="btn btn-primary btn-lg btn-block"> Product Update</button>
                </form>
            </div>
        </div>
    </div>
  
   



@endsection