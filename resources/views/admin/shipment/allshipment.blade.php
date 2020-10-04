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
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Company Name</th>
            <th scope="col">Country</th>
            <th scope="col">Street Address</th>
            <th scope="col">City</th>
            <th scope="col">District</th>
            <th scope="col">Post Code</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($allshipment as $shipment)
            <th scope="row">{{ $loop->index+1 }}</th>
            <td>{{ $shipment->first_name }}</td>
            <td>{{ $shipment->last_name }}</td>
            <td>{{ $shipment->company_name }}</td>
            <td>{{ $shipment->country }}</td>
            <td>{{ $shipment->street_address }}</td>
            <td>{{ $shipment->city }}</td>
            <td>{{ $shipment->district }}</td>
            <td>{{ $shipment->post_code }}</td>
            <td>{{ $shipment->phone }}</td>
            <td>{{ $shipment->email}}</td>

         
            <td>
                <button type="button" class="btn btn-success"><a href="{{ url('editShipment') }}/{{ $shipment->id }}">Edit</a></button>
                <button type="button" class="btn btn-danger"><a href="{{url('deleteshipment')}}/{{$shipment->id }} ">Delete</a></button>
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>

</div>



@endsection