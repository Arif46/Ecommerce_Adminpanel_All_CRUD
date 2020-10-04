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
        <h4>Add shipment</h4>
    </div>
        <div class="main-card mb-4 card">
            <div class="card-body">
                
                <form action="{{ url('addshipment') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleAddress" class="">First Name</label>
                        <input required name="first_name"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Last Name</label>
                        <input required name="last_name"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Company name</label>
                        <input required name="company_name"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Country</label>
                        <input required name="country"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Street Address</label>
                        <input required name="street_address"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">City</label>
                        <input required name="city"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">district</label>
                        <input required name="district"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Post Code</label>
                        <input required name="post_code"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Phone</label>
                        <input required name="phone"  type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Email</label>
                        <input required name="email"  type="email" class="form-control">
                    </div>
                  
                   
                    <button type="submit" class="btn btn-primary btn-lg btn-block"> Submit</button>
                </form>
            </div>
        </div>
    </div>
  
   



@endsection