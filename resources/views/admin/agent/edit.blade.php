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
                            <a href="{{ route('admin.agent.management') }}">
                                Agent Management
                            </a>
                        </li>
                        <li class="breadcrumb-item active">{{ $title ?? '' }}</li>
                    </ul>
                </div>
                <a href="{{ route('admin.agent.management') }}" class="btn btn-primary btn-lg btn-rounded">
                    <i class="fa-solid fa-circle-arrow-left"></i>
                    Back
                </a>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card customShadow">
                    <form action="{{ route('admin.update.agent', ['id' => $id]) }}" id="formSubmit" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="first_name" id="" class="form-control" placeholder="Enter first name" value="{{ $item->first_name ?? old('first_name') }}" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" name="last_name" id="" class="form-control" placeholder="Enter last name" value="{{ $item->last_name ?? old('last_name') }}" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="">Email</label>
                                    <input type="email" id="" class="form-control" placeholder="Enter email" disabled value="{{ $item->email ?? old('email') }}" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="phone_number" id="" class="form-control" placeholder="Enter phone number" value="{{ $item->phone_number ?? old('phone_number') }}" required>
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
                                        <option value="Principal/Director" {{ $item->position == 'Principal/Director' ? 'selected':'' }}>Principal/Director</option>
                                        <option value="Contractor" {{ $item->position == 'Contractor' ? 'selected':'' }}>Contractor</option>
                                        <option value="Sale Agent" {{ $item->position == 'Sale Agent' ? 'selected':'' }}>Sale Agent</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="">Agency Name</label>
                                    <input type="text" name="agency_name" id="" class="form-control" placeholder="Enter agency name" value="{{ $item->agency_name ?? old('agency_name') }}" required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label for="">Agency Address</label>
                                    <input type="text" name="agency_address" id="agencyOfficeAddress" class="form-control" placeholder="Enter agency address" value="{{ $item->agenct_address ?? old('agency_address') }}" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="">ABN/ACN</label>
                                    <input type="text" name="agency_code" id="" class="form-control" placeholder="Enter agency code" value="{{ $item->agenct_code ?? old('agency_code') }}" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="">Focused On</label>
                                    <select name="focused" id="" class="form-control" required>
                                        <option disabled>Select Focused On</option>
                                        <option value="sales" {{ $item->focused == 'sales' ? 'selected':'' }}>Sales</option>
                                        <option value="rent" {{ $item->focused == 'rent' ? 'selected':'' }}>Rent</option>
                                        <option value="both" {{ $item->focused == 'both' ? 'selected':'' }}>Both</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center my-2">
                                <h3 class="card-title text-primary">
                                    Fees & Comission
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 form-group">
                                    <label for="">Comission (Optional)</label>
                                    <input type="text" name="agency_commission" id="" placeholder="Enter comission" class="form-control " value="{{ $item->agency_commission ?? old('agency_commission') }}">
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label for="">Marketing Budget (Optional)</label>
                                    <input type="text" name="marketting_budget" id="" placeholder="Enter marketing budget" class="form-control
                                    " value="{{ $item->marketting_budget ?? old('marketting_budget') }}">
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label for="">Total Sales in 12 months (Optional)</label>
                                    <input type="text" name="sold_in_area" id="" placeholder="Enter total sales in last 12 months" class="form-control
                                    " value="{{ $item->sold_in_area ?? old('sold_in_area') }}">
                                </div>
                            </div>
                            <div class="text-center my-2">
                                <h3 class="card-title text-primary">
                                    Which suburbs do you service?
                                </h3>
                            </div>
                            <div class="row">
                                @php
                                $explode = json_decode($item->average_sale_price, true);
                                @endphp

                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control subrub" placeholder="Enter suburb name" name="suburb[]" value="{{ $explode[0] ?? '' }}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control subrub" placeholder="Enter suburb name" name="suburb[]" value="{{ $explode[1] ?? '' }}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control subrub" placeholder="Enter suburb name" name="suburb[]" value="{{ $explode[2] ?? '' }}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control subrub" placeholder="Enter suburb name" name="suburb[]" value="{{ $explode[3] ?? '' }}">
                                </div>
                            </div>
                            <div class="text-center my-2">
                                <h3 class="card-title text-primary">
                                    Video Link
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="url" name="video_link" id="" class="form-control" placeholder="Pleazse enter video link" value="{{ $item->video_link ?? old('video_link') }}">
                                </div>
                            </div>
                            <div class="text-center my-2">
                                <h3 class="card-title text-primary">
                                    Media
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Upload Profile Pictures</label>
                                    <input type="file" name="profile_picture" id="profilePictureInput" class="form-control" accept="image/*" multiple>
                                    <input type="hidden" name="cropped_image" id="cropped_image">
                                </div>

                                <div class="col-lg-6">
                                    <label for="">Upload Logo</label>
                                    <input type="file" name="agency_logo" id="" class="form-control" accept="image/*">
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
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" autocomplete="">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="confirm_password" id="confirmPassword" class="form-control" placeholder="Enter confirm password" autocomplete="">
                                </div>
                                <input type="hidden" id="latitude" name="latitude">
                                <input type="hidden" id="longitude" name="longitude">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-lg btn-rounded">
                                    Update Agent
                                </button>
                            </div>
                        </div>

                        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAp0oOTg0H4Zn6WPfkXiXXnhYz3h5nIf80&libraries=places"></script>

                        <script>
                            $(document).ready(function() {
                                $("#password").val('');
                            });

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
                        {{-- This script is working for getting suburb Or Cities Of Australia in the dropdown --}}
                        <script>
                            $(document).ready(function() {

                                $('.subrub').on('keyup', function() {
                                    var $input = $(this)[0];
                                    var autocomplete = new google.maps.places.Autocomplete($input, {
                                        types: ['(cities)']
                                        , componentRestrictions: {
                                            country: 'au'
                                        }
                                    });

                                    // Listen for place changed event
                                    google.maps.event.addListener(autocomplete, 'place_changed', function() {
                                        var place = autocomplete.getPlace();
                                        if (place && place.name) {}
                                    });
                                });
                            });

                        </script>
                        {{-- End Script --}}
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
    $(document).ready(function() {
        // Prevent form submission on pressing Enter key
        $("#formSubmit").on("keypress", function(event) {
            // Check if the key pressed is Enter
            if (event.which === 13) {
                event.preventDefault(); // Prevent form submission
            }
        });

        // Submit form with validation for password and confirm password
        $("#formSubmit").submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            var password = $("#password").val();
            var confirmPassword = $("#confirmPassword").val();
            var form = $("#formSubmit");

            if (password != null || confirmPassword != null) {
                if (password != confirmPassword) {
                    alert("Password and Confirm Password do not match!");
                    return false; // Stop form submission
                } else {
                    form[0].submit(); // Submit the form if validation passes
                }
            }
        });
    });

</script>

{{-- End Script --}}

<!-- This script is working for cropper modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

<div id="cropperModal1" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crop Profile Picture</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <img id="cropImage1" style="width: 100%;" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="cropImageButton1">Crop Image</button>
            </div>
        </div>
    </div>
</div>

<script>
    let cropper1;
    const imageUpload1 = document.getElementById('profilePictureInput');
    const cropImage1 = document.getElementById('cropImage1');
    const cropImageButton1 = document.getElementById('cropImageButton1');
    const croppedImageInput = document.getElementById('cropped_image'); // Create hidden input

    imageUpload1.addEventListener('change', function(event) {
        const files = event.target.files;

        if (files && files.length > 0) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = new Image();
                img.src = e.target.result;

                img.onload = function() {
                    if (img.width < 500 || img.height < 500) {
                        alert('Please upload an image with a minimum size of 500x500 pixels.');
                    } else {
                        cropImage1.src = e.target.result;
                        $('#cropperModal1').modal('show');
                    }
                };
            };

            reader.readAsDataURL(files[0]);
        }
    });

    $('#cropperModal1').on('shown.bs.modal', function() {
        cropper1 = new Cropper(cropImage1, {
            aspectRatio: 1,
            viewMode: 1,
            autoCropArea: 1
        });
    }).on('hidden.bs.modal', function() {
        cropper1.destroy();
        cropper1 = null;
    });

    cropImageButton1.addEventListener('click', function() {
        const canvas = cropper1.getCroppedCanvas({
            width: 300,
            height: 300
        });

        const croppedImageDataUrl = canvas.toDataURL('image/png');

        croppedImageInput.value = croppedImageDataUrl;

        $('#cropperModal1').modal('hide');
    });
</script>


<!-- End Script -->

@endsection
