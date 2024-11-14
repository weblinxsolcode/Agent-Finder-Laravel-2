@extends('admin.layouts.main')

@section('section')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="">
                    <h3 class="page-title">{{ $title ?? '' }}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.lead.management') }}">
                                Lead Management
                            </a>
                        </li>
                        <li class="breadcrumb-item active">{{ $title ?? '' }}</li>
                    </ul>
                </div>
                <a href="{{ route('admin.lead.management') }}" class="btn btn-primary btn-lg btn-rounded">
                    <i class="fa-solid fa-circle-arrow-left"></i>
                    Back
                </a>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card customShadow">
                    <form action="{{ route('admin.store.lead') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="">First Name</label>
                                    <input type="text" name="first_name" id="" class="form-control" placeholder="Please enter first name" value="{{ old('first_name') }}" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Last Name</label>
                                    <input type="text" name="last_name" id="" class="form-control" placeholder="Please enter last name" value="{{ old('last_name') }}" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Email</label>
                                    <input type="email" name="email" id="" class="form-control" placeholder="Please enter email" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" id="" class="form-control" placeholder="Please enter phone" value="{{ old('phone') }}" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Address</label>
                                    <input type="text" name="address" id="leadAddress" class="form-control" placeholder="Please enter address" value="{{ old('address') }}" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="">Bedroom</label>
                                    <input type="text" name="bedroom" id="bedroom" class="form-control numberOnly" placeholder="Please enter bedroom" value="{{ old('bedroom') }}" required>
                                </div>
                                <input type="hidden" id="latitude" name="lat">
                                <input type="hidden" id="longitude" name="long">
                                <div class="form-group col-lg-3">
                                    <label for="">Purpose</label>
                                    <select name="prupose" id="" class="form-control" required>
                                        <option selected disabled>-- Select --</option>
                                        <option value="Sell">Sell</option>
                                        <option value="Rent" disabled>Rent</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="">Type Of Property</label>
                                    <select name="type" id="" class="form-control" required>
                                        <option selected disabled>-- Select --</option>
                                        <option value="House">House</option>
                                        <option value="Unit/Townhouse">Unit/Town house</option>
                                        <option value="Land">Land</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="">Duration</label>
                                    <select name="duration" id="" class="form-control" required>
                                        <option selected disabled>-- Select --</option>
                                        <option value="ASAP">ASAP</option>
                                        <option value="3 Months">3 Months</option>
                                        <option value="6 Months">6 Months</option>
                                        <option value="12 Months">12+ Months</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-end">
                                <button class="btn btn-primary btn-lg btn-rounded">
                                    Add Lead
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- This script is working for initializing address  --}}
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyAp0oOTg0H4Zn6WPfkXiXXnhYz3h5nIf80&libraries=places">
</script>
<script>
    $("#leadAddress").keyup(function() {
        var input = document.getElementById('leadAddress');

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
{{-- End Script  --}}
@endsection
