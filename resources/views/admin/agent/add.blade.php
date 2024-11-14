@extends('admin.layouts.main')

@section('section')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">{{ $title ?? '' }}</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">{{ $title ?? '' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card customShadow">
                        <form action="{{ route('admin.store.agent') }}" id="formSubmit" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="card-title text-primary">
                                        Basic Info.
                                    </h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="">First Name</label>
                                        <input type="text" name="first_name" id="" class="form-control" placeholder="Enter first name" value="{{ old('first_name') }}" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" name="last_name" id="" class="form-control" placeholder="Enter last name" value="{{ old('last_name') }}" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="" class="form-control" placeholder="Enter email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Phone Number</label>
                                        <input type="text" name="phone_number" id="" class="form-control" placeholder="Enter phone number" value="{{ old('phone_number') }}" required>
                                    </div>
                                </div>
                                <div class="text-center my-2">
                                    <h3 class="card-title text-primary">
                                        Agency Info.
                                    </h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="">Role</label>
                                        <select name="role" id="" class="form-control" required>
                                            <option disabled>Select Role</option>
                                            <option value="Principal/Director">Principal/Director</option>
                                            <option value="Contractor" >Contractor</option>
                                            <option value="Sale Agent">Sale Agent</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Agency Name</label>
                                        <input type="text" name="agency_name" id="" class="form-control" placeholder="Enter agency name" value="{{ old('agency_name') }}" required>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label for="">Agency Address</label>
                                        <input type="text" name="agency_address" id="agencyOfficeAddress" class="form-control" placeholder="Enter agency address" value="{{ old('agency_address') }}" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Agency Code</label>
                                        <input type="text" name="agency_code" id="" class="form-control" placeholder="Enter agency code" value="{{ old('agency_code') }}" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Focused On</label>
                                        <select name="focused" id="" class="form-control" required>
                                            <option selected disabled>Select Focused On</option>
                                            <option value="sales">Sales</option>
                                            <option value="rent">Rent</option>
                                            <option value="both">Both</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center my-2">
                                    <h3 class="card-title text-primary">
                                        Security
                                    </h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" value="{{ old('password') }}" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Confirm Password</label>
                                        <input type="password" name="confirm_password" id="confirmPassword" class="form-control" placeholder="Enter confirm password" value="{{ old('confirm_password') }}" required>
                                    </div>
                                </div>
                                <input type="hidden" id="latitude" name="latitude">
                                <input type="hidden" id="longitude" name="longitude">
                            </div>
                            <div class="card-footer">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-lg btn-rounded">
                                        Add Agent
                                    </button>
                                </div>
                            </div>
                            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAp0oOTg0H4Zn6WPfkXiXXnhYz3h5nIf80&libraries=places"></script>

                            <script>
                                $("#agencyOfficeAddress").keyup(function() {
                                    var input = document.getElementById('agencyOfficeAddress');

                                    // Ensure the Google Maps Places library is initialized
                                    if (!window.google || !google.maps || !google.maps.places) {
                                        console.error('Google Maps Places library is not loaded.');
                                        return;
                                    }

                                    var autocomplete = new google.maps.places.Autocomplete(input);
                                    autocomplete.addListener('place_changed', function() {
                                        var place = autocomplete.getPlace();

                                        // Ensure that the place has geometry information
                                        if (!place.geometry) {
                                            console.error('No geometry information found for the selected place.');
                                            return;
                                        }

                                        // Update the latitude and longitude fields
                                        document.getElementById("latitude").value = place.geometry.location.lat();
                                        document.getElementById("longitude").value = place.geometry.location.lng();
                                    });
                                });

                            </script>
                        </form>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Main Wrapper -->

    {{-- This script is working for form submission --}}
    <script>
        $(document).ready(function(){
            $("#formSubmit").submit(function(){
                event.preventDefault();

                var password = $("#password").val();
                var confirmPassword = $("#confirmPassword").val();
                var form = $("#formSubmit");

                if(password != confirmPassword){
                    alert("Password and Confirm Password does not match !");
                    return false;
                } else {
                    form[0].submit();
                }
            });
        });
    </script>
    {{-- End Script --}}
@endsection
