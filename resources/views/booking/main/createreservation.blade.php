@extends('booking.booking')

@section('title', 'Flights')

@section('content')

<form>


<div class="form-row p-3 shadow bg-white">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="exampleInputPassword1">First Name</label>
            <input type="text" class="form-control" name="fname" id="exampleInputPassword1" placeholder="Enter First Name">
        </div>
    </div>
    <div class="col-lg-4">
    <div class="form-group">
            <label for="exampleInputPassword1">Middle Name</label>
            <input type="text" class="form-control" name= "mname" id="exampleInputPassword1" placeholder="Enter Middle Name">
        </div>
    </div>
    <div class="col-lg-4">
    <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input type="text" class="form-control" name="lname" id="exampleInputPassword1" placeholder="Enter Last Name">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" class="form-control" name="phone"id="exampleInputPassword1" placeholder="Enter Phone Number">
        </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" email="email" id="exampleInputPassword1" placeholder="Enter Email">
        </div>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <label for="exampleInputPassword1">Street Name </label>
            <input type="text" class="form-control" name="stname" id="exampleInputPassword1" placeholder="Enter Street Name">
        </div>
    </div>
    <div class="col-lg-2">
    <div class="form-group">
            <label for="exampleInputPassword1">Apt #</label>
            <input type="text" class="form-control" name="aptnum" id="exampleInputPassword1" placeholder="Enter Apt#">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="exampleInputPassword1">City</label>
            <input type="text" class="form-control" name="city" id="exampleInputPassword1" placeholder="Enter City">
        </div>
    </div>
    <div class="col-lg-4">
    <div class="form-group">
            <label for="exampleInputPassword1">State</label>
            <input type="text" class="form-control" name = "state "id="exampleInputPassword1" placeholder="Enter State">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="exampleInputPassword1">Zip Code</label>
            <input type="text" class="form-control" name="zipcode" id="exampleInputPassword1" placeholder="Enter Zip Code">
        </div>
    </div>
    <div class="col-lg-4">
    <div class="form-group">
            <label for="exampleInputPassword1">Country</label>
            <input type="text" class="form-control" name= "country"id="exampleInputPassword1" placeholder="Enter Country">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="exampleInputPassword1">Pasport</label>
            <input type="text" class="form-control" name="passport" id="exampleInputPassword1" placeholder="Enter Passport">
        </div>
    </div>
    <div class="col-lg-4">
    <div class="form-group">
            <label for="exampleInputPassword1">IATA Country Code</label>
            <input type="text" class="form-control" name="country code" id="exampleInputPassword1" placeholder="Enter IATA Country Code">
        </div>
    </div>
    <button type="submit" class="btn btn-danger mx-2" style="width: 200px;">CANCEL</button>
    <button type="submit" class="btn btn-primary" style="width: 200px;">SUBMIT</button>
    
</div>




</form>


@endsection