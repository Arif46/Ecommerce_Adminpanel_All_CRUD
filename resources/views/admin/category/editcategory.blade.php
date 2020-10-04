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
    <div class="text-center">
        <h4>Add New Category</h4>
    </div>
        <div class="main-card mb-4 card">
            <div class="card-body">
                
                <form action="{{route('categoryUpdate')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Category Name</label>
                        <input required name="category_name"  type="text" value="{{$categoryedit->category_name }}" class="form-control">
                        <input required name="category_id"  type="hidden" value="{{$categoryedit->id }}" class="form-control">
                    </div>
 
                    <div class="position-relative form-group">
                        <label for="exampleFormControlTextarea1">Category Description</label>
                        <textarea class="form-control" required name="category_description" value="{{$categoryedit->category_description }}"  id="" cols="30" rows="10"></textarea>
                    </div>
               
                
                   
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update Category</button>
                </form>
            </div>
        </div>
    </div>
  
   



@endsection