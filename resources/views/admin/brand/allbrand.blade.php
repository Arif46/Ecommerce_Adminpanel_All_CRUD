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
            <th scope="col">Brand Name</th>
            <th scope="col">Brand  description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($allbrand as $brand)
            <th scope="row">{{ $loop->index+1 }}</th>
            <td>{{ $brand->brand_name }}</td>
            <td>{{ $brand->brand_description }}</td>
            <td>
                <button type="button" class="btn btn-success"><a href="{{ url('brandEdit') }}/{{ $brand->id }}">Edit</a></button>
                <button type="button" class="btn btn-danger"><a href=" {{ url('brandDelete') }}/{{ $brand->id }}">Delete</a></button>
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>

</div>



@endsection