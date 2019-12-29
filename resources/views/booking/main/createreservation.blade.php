@extends('booking.booking')

@section('title', 'Flights')

@section('content')

<form action="\store" method="POST" >
    @csrf
          @if (session()->has('success'))
            <div class="alert alert-success">
          @if(is_array(session()->get('success')))
              <ul>
            @foreach (session()->get('success') as $message)
                <li>{{ $message }}</li>
            @endforeach
              </ul>
          @else
            {{ session()->get('success') }}
          @endif
          </div>
          @endif

          @foreach($errors->all() as $error)
            <p class="alert alert-danger"> {{$error}}</p>
          @endforeach
          
<div class="form-row p-3 shadow bg-white">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="first_name" id="exampleInputPassword1" placeholder="Enter First Name">
        </div>
    </div>
    <div class="col-lg-4">
    <div class="form-group">
            <label for="middlename">Middle Name</label>
            <input type="text" class="form-control" name= "middle_name" id="exampleInputPassword1" placeholder="Enter Middle Name">
        </div>
    </div>
    <div class="col-lg-4">
    <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="exampleInputPassword1" placeholder="Enter Last Name">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone"id="exampleInputPassword1" placeholder="Enter Phone Number">
        </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" email="email" id="exampleInputPassword1" placeholder="Enter Email">
        </div>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <label for="exampleInputPassword1">Street Name </label>
            <input type="text" class="form-control" name="street_name" id="exampleInputPassword1" placeholder="Enter Street Name">
        </div>
    </div>
    <div class="col-lg-2">
    <div class="form-group">
            <label for="apt">Apt #</label>
            <input type="text" class="form-control" name="apartment" id="exampleInputPassword1" placeholder="Enter Apt#">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" id="exampleInputPassword1" placeholder="Enter City">
        </div>
    </div>
    <div class="col-lg-4">
        <label for="state">State</label>
            <select class="form-control" id="state">
            <option value="AL">Alabama (AL)</option>
                <option value="AK">Alaska (AK)</option>
                <option value="AZ">Arizona (AZ)</option>
                <option value="AR">Arkansas (AR)</option>
                <option value="CA">California (CA)</option>
                <option value="CO">Colorado (CO)</option>
                <option value="CT">Connecticut (CT)</option>
                <option value="DE">Delaware (DE)</option>
                <option value="DC">District Of Columbia (DC)</option>
                <option value="FL">Florida (FL)</option>
                <option value="GA">Georgia (GA)</option>
                <option value="HI">Hawaii (HI)</option>
                <option value="ID">Idaho (ID)</option>
                <option value="IL">Illinois (IL)</option>
                <option value="IN">Indiana (IN)</option>
                <option value="IA">Iowa (IA)</option>
                <option value="KS">Kansas (KS)</option>
                <option value="KY">Kentucky (KY)</option>
                <option value="LA">Louisiana (LA)</option>
                <option value="ME">Maine (ME)</option>
                <option value="MD">Maryland (MD)</option>
                <option value="MA">Massachusetts (MA)</option>
                <option value="MI">Michigan (MI)</option>
                <option value="MN">Minnesota (MN)</option>
                <option value="MS">Mississippi (MS)</option>
                <option value="MO">Missouri (MO)</option>
                <option value="MT">Montana (MT)</option>
                <option value="NE">Nebraska (NE)</option>
                <option value="NV">Nevada (NV)</option>
                <option value="NH">New Hampshire (NH)</option>
                <option value="NJ">New Jersey (NJ)</option>
                <option value="NM">New Mexico (NM)</option>
                <option value="NY">New York (NY)</option>
                <option value="NC">North Carolina (NC)</option>
                <option value="ND">North Dakota (ND)</option>
                <option value="OH">Ohio (OH)</option>
                <option value="OK">Oklahoma (OK)</option>
                <option value="OR">Oregon (OR)</option>
                <option value="PA">Pennsylvania (PA)</option>
                <option value="RI">Rhode Island (RI)</option>
                <option value="SC">South Carolina (SC)</option>
                <option value="SD">South Dakota (SD)</option>
                <option value="TN">Tennessee (TN)</option>
                <option value="TX">Texas (TX)</option>
                <option value="UT">Utah (UT)</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="zip">Zip Code</label>
            <input type="text" class="form-control" name="zipcode" id="exampleInputPassword1" placeholder="Enter Zip Code">
        </div>
    </div>
    <div class="col-lg-4">
    <div class="form-group">
            <label for="trycoun">Country</label>
            <!-- <input type="text" class="form-control" name= "country"id="exampleInputPassword1" placeholder="Enter Country"> -->
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="passport">Pasport</label>
            <input type="text" class="form-control" name="passport" id="exampleInputPassword1" placeholder="Enter Passport">
        </div>
    </div>
    <div class="col-lg-4">
    <div class="form-group">
            <label for="ita">IATA Country Code</label>
            <input type="text" class="form-control" name="iata_country_code" id="exampleInputPassword1" placeholder="Enter IATA Country Code">
        </div>
    </div>

    
    <a href = "/"  class="btn btn-danger mx-2" style="width: 200px;">CANCEL</a>
    <button type="submit" class="btn btn-primary" style="width: 200px;">SUBMIT</button>
    
</div>
</form>


@endsection