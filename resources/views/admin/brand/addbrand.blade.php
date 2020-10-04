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
        <h4>Add Brand</h4>
    </div>
        <div class="main-card mb-4 card">
            <div class="card-body">
                
                <form action="{{ url('addBrand') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Brand Name</label>
                        <input required name="brand_name"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleFormControlTextarea1">Brand Description</label>
                        <textarea class="form-control" required  name="brand_description"  id="" cols="30" rows="10"></textarea>
                    </div>
               
                
                   
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Brand Submit</button>
                </form>
            </div>
        </div>
    </div>
  
   



@endsection