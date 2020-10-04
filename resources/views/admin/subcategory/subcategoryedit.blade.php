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
        <h4>Add New SubCategory</h4>
    </div>
        <div class="main-card mb-4 card">
            <div class="card-body">
                
                <form action="{{route('subcategoryUpdate')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleAddress" class="">SubCategory Name</label>
                        <input required name="subcategory_name"  type="text" value="{{$subcategoryedit->subcategory_name}}" class="form-control">
                        <input required name="subcategory_id"  type="hidden" value="{{ $subcategoryedit->id }}" class="form-control">
                    </div>
                
                    <div class="position-relative form-group">
                        <label for="exampleFormControlTextarea1">SubCategory Description</label>
                        <textarea class="form-control" required name="subcategory_description" value={{$subcategoryedit->subcategory_description  }}  id="" cols="30" rows="10"></textarea>
                    </div>
               
                
                   
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sub Category Update</button>
                </form>
            </div>
        </div>
    </div>
  
   



@endsection