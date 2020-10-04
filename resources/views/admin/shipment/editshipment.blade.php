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
        <h4>Edit shipment</h4>
    </div>
        <div class="main-card mb-4 card">
            <div class="card-body">
                
                <form action="{{ url('updateshipment') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleAddress" class="">First Name</label>
                        <input required name="first_name" value="{{$shipmentedit->first_name }}" type="text" class="form-control">
                        <input required name="shipment_id" value="{{$shipmentedit->id }}" type="hidden" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Last Name</label>
                        <input required name="last_name" value="{{$shipmentedit->last_name }}"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Company name</label>
                        <input required name="company_name"  value="{{$shipmentedit->company_name }}" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Country</label>
                        <input required name="country" value="{{$shipmentedit->country }}"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Street Address</label>
                        <input required name="street_address" value="{{$shipmentedit->street_address }}"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">City</label>
                        <input required name="city"  type="text" value="{{$shipmentedit->city }}" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">district</label>
                        <input required name="district"  type="text" value="{{$shipmentedit->district }}" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Post Code</label>
                        <input required name="post_code"  type="text" value="{{$shipmentedit->post_code }}" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Phone</label>
                        <input required name="phone"  type="text" value="{{$shipmentedit->phone }}" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Email</label>
                        <input required name="email"  type="email" value="{{$shipmentedit->email }}" class="form-control">
                    </div>
                  
                   
                    <button type="submit" class="btn btn-primary btn-lg btn-block"> Submit</button>
                </form>
            </div>
        </div>
    </div>
  
   



@endsection