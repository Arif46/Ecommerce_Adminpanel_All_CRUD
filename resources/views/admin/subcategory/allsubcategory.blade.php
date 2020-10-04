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
            <th scope="col">Category Name</th>
            <th scope="col">Sub Category Name</th>
            <th scope="col"> Sub Category  description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($allsubcategory as $subcategory)
          <tr>
            <th scope="row">{{ $loop->index+1 }}</th>
            <td>{{ $subcategory->category_name }}</td>
            <td>{{ $subcategory->subcategory_name }}</td>
            <td>{{ $subcategory->subcategory_description }}</td>
            <td>
                <button type="button" class="btn btn-success"><a href="{{ url('subcategoryEdit') }}/{{$subcategory->id}}">Edit</a></button>
                <button type="button" class="btn btn-danger"><a href="{{ url('subtegorydelete') }}/{{ $subcategory->id }}">Delete</a></button>
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>

</div>



@endsection
