@extends('template.layout.main')

@php
$agentDetails = App\Models\Agents::find($id);
@endphp

@section('section')
<div class="d-flex flex-column flex-lg-row  justify-content-center">
    @include('template.layout.admin-sidebar')
    <div class="dashboardbg w-100" style="height : unset !important">
        <div class="dashboard">
            <h1 class="dashboard-h1">Profile</h1>
            <div class=" row mx-0 gx-5 align-items-start mt-5">
                <!--box 1-->
                <div class=" col-md-6 col-sm-6 mx-0  pe-md-5 ps-0 pe-0 pe-sm-3   pb-0 mt-5" style="border-radius : 15px;position : relative">
                    <div class="opporbox1 pb-3" style="border-radius : 15px;">
                        <div class="d-flex flex-column">
                            <div class="mx-auto editprofileimg">
                                @if ($agentDetails->profile_picture != null)
                                <div class="position-relative">
                                    <img src="{{ asset('template/assets/Profiles/Profile-Pictures/' . $agentDetails->profile_picture) }}" class="profileimg rounded-circle" alt="" id="profilePicturePreview">
                                    <label style="width: unset" for="imageUpload1">
                                        <img src="{{ asset('common/camera.png') }}" class="chooseimg" alt="">
                                    </label>
                                </div>
                                <input type="file" id="imageUpload1" class="d-none" accept="image/*" />
                                @endif
                                @if ($agentDetails->profile_picture == null)
                                <div class="position-relative">
                                    <img src="{{ asset('common/camera.png') }}" class="profileimg" alt="" id="profilePicturePreview">
                                    <img src="{{ asset('common/camera.png') }}" class="chooseimg" alt="">
                                </div>
                                <input type="file" id="imageUpload1" class="d-none" accept="image/*" />
                                @endif
                            </div>
                        </div>

                        <div class="d-flex flex-column margin">
                            <div class="mx-auto">
                                <!--profilelogo-->
                                <div style="width:100%;height : 55px">
                                    @if ($agentDetails->agency_logo != null)
                                    <img src="{{ asset('template/assets/Agencies/Agency-logo/' . $agentDetails->agency_logo) }}" class="" style="width:100%;height:100%;object-fit : contain" alt="" id="agencyLogoPreview">
                                    <input type="file" id="imageUpload2" class="d-none" accept="image/*" />
                                    @endif
                                    @if ($agentDetails->agency_logo == null)
                                    <img src="{{ asset('template/assets/img/profilelogo.png') }}" class="img-fluid" alt="" style="width:auto;height:100%;" id="agencyLogoPreview">
                                    <input type="file" id="imageUpload2" class="d-none" accept="image/*" />
                                    @endif
                                </div>
                            </div>
                            <div class="d-flex align-content-end justify-content-end mt-2">
                                <a class="d-flex mx-3 align-items-center gap-2" href="javascript:void(0)">
                                    {{-- <i class="fa-solid custom-opacity fa-pen-to-square"></i>  --}}
                                    {{-- <h4 class="edittext mb-0 ">Edit Logo</h4>  --}}
                                </a>
                            </div>
                        </div>

                        <!-- Modal for Image Preview for agency logo -->
                        <div id="previewModal2" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mx-3">Preview Agency Logo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img id="imageToPreview2" style="width: 100% !important" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" id="uploadImageButton2" class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                const imageUpload2 = $('#imageUpload2');
                                const imageToPreview2 = $('#imageToPreview2');
                                const imagePreview4 = $('#agencyLogoPreview');

                                imageUpload2.change(function(e) {
                                    const files = e.target.files;

                                    if (files && files.length > 0) {
                                        const file = files[0]; // Get the first file
                                        const reader = new FileReader();

                                        reader.onload = function(event) {
                                            imageToPreview2.attr('src', event.target.result); // Set image source for preview
                                            $('#previewModal2').modal('show'); // Show the modal for preview
                                        };

                                        reader.readAsDataURL(file); // Read file as data URL
                                    }
                                });

                                $('#uploadImageButton2').click(function() {
                                    const file = imageUpload2[0].files[0];

                                    if (file) {
                                        const formData = new FormData();
                                        formData.append('cropped_image', file);
                                    }
                                });
                            });

                        </script>


                        <div class="profileform mt-3">
                            <div class="d-flex flex-column mt-2">
                                <h2 class=" mb-0 edittexth2 fw-bold">{{ $agentDetails->first_name }}
                                    {{ $agentDetails->last_name }}
                                </h2>
                                <h3 class=" edittexthmh mt-1">
                                    {{ $agentDetails->position ?? 'Position' }}
                                </h3>
                            </div>
                            <div class="d-flex flex-column mt-2">
                                <h2 class=" mb-0 edittexth3 fw-bold">
                                    {{ $agentDetails->agency_name ?? "Agency Name" }}
                                </h2>
                                <h3 class=" edittexthmh mt-1 d-none">
                                    {{ ucfirst(($agentDetails->focused == "both" ? "Selling And Buying":$agentDetails->focused)) ?? "Focused On" }}
                                </h3>
                            </div>
                            <!-- <div class="d-flex flex-column mt-2">
                                <h2 class=" mb-0 edittexth3 fw-bold">
                                    {{ $agentDetails->agenct_code ?? "ABN/ACN" }}
                                </h2>
                            </div> -->
                            <div class="d-flex align-items-center  gap-3 mt-3">

                                <i class="fa-solid text-dark fa-phone phone-icon-prof"></i>
                                <h3 class="mb-0 edittexthmh">{{ $agentDetails->phone_number }}</h3>
                            </div>
                            <div class="d-flex align-items-center  gap-3 mt-3 mb-3">
                                <i class="fa-solid text-dark fa-envelope phone-icon-prof"></i>
                                <h3 class="edittexthmh">{{ $agentDetails->email }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex col-md-12 mx-0   flex-column mt-md-5 mt-sm-5 mt-3">
                        <form action="javascript:void(0)" id="passwordForm" method="post">
                            @csrf
                            <div class="opporbox1 py-4 profileform" style="border-radius: 15px;">
                                <h1 class="sidebar-h1 h1borderbottom text-dark">Password</h1>
                                <label class="mt-3">Password (Optional)</label>
                                <input type="password" name="password" id="newPassword" class="profileinput w-100 mt-2" placeholder="Password" required>
                                <label class="mt-3">Confirm Password (Optional)</label>
                                <input type="password" name="confirm_password" id="confirmNewPassword" class="profileinput w-100 mt-2" placeholder="Password" required>
                                {{-- <button type="submit" class="updatebtn mb-lg-3 mb-2 w-100 d-flex align-items-center justify-content-center mx-auto">Update</button>  --}}
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex col-md-6 col-sm-6 mx-0 px-0  flex-column  mt-4">
                    <form action="javascript:void(0)" method="post">
                        @csrf
                        <div class="opporbox1 pb-4 mt-4 " style="border-radius : 15px">
                            <h1 class="sidebar-h1  h1borderbottom pt-2">Fees & marketing &nbsp;&nbsp;&nbsp; <span class="fw-medium fs-6">(inc.GST)</span>
                            </h1>

                            <div class="profileform">
                                <div class="d-flex flex-column ">
                                    <label>Commission</label>
                                    <input type="text" placeholder="Commission" value="{{ $agentDetails->agency_commission ?? 'N/A' }}" name="agency_commission" class="profileinput numberOnly" />

                                </div>
                                <div class="d-flex flex-column mt-2">
                                    <label>Marketing Budget</label>
                                    <input type="text" placeholder="Marketing Budget" value="{{ $agentDetails->marketting_budget ?? 'N/A' }}" name="marketting_budget" class="profileinput numberOnly" />
                                </div>
                                <div class="d-flex flex-column mt-2">
                                    <label>Total Sales in 12 months</label>
                                    <input type="text" placeholder="Total Sales in 12 months" value="{{ $agentDetails->sold_in_area ?? 'N/A' }}" name="sold_in_area" class="profileinput numberOnly" />
                                </div>
                                <div class="d-flex flex-column mt-2">
                                    <label>Which suburbs do you service?</label>

                                    @php
                                    $array = json_decode($agentDetails->average_sale_price, true);
                                    @endphp
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Which suburbs do you service?" value="{{ $array[0] ?? '' }}" name="suburb_name[]" class="profileinput w-100 suburbName" />
                                        </div>
                                        <div class="col-lg-6 mt-2 mt-md-0">
                                            <input type="text" placeholder="Which suburbs do you service?" value="{{ $array[1] ?? '' }}" name="suburb_name[]" class="profileinput w-100 suburbName" />
                                        </div>
                                        <div class="col-lg-6 mt-2">
                                            <input type="text" placeholder="Which suburbs do you service?" value="{{ $array[2] ?? '' }}" name="suburb_name[]" class="profileinput w-100 suburbName" />
                                        </div>
                                        <div class="col-lg-6 mt-2">
                                            <input type="text" placeholder="Which suburbs do you service?" value="{{ $array[3] ?? '' }}" name="suburb_name[]" class="profileinput w-100 suburbName" />
                                        </div>
                                    </div>
                                </div>
                                {{-- <button type="submit" class="updatebtn w-100 mb-0 d-flex align-items-center justify-content-center mx-auto">Update  --}}
                                </button>

                            </div>
                        </div>
                    </form>
                    <form action="javascript:void(0)" method="post">
                        @csrf
                        <div class="col-md-12 mt-5">
                            <div class="py-4 opporbox1 profileform" style="border-radius : 15px">
                                <h1 class="sidebar-h1 h1borderbottom">Add Video Link</h1>
                                <div class="profileform">
                                    <div class="d-flex flex-column mt-3">
                                        <label>Video Link</label>
                                        <input type="url" value="{{ $agentDetails->video_link ?? '' }}" placeholder="Add Video Link" name="video_link" class="profileinput" required />
                                    </div>
                                </div>
                                {{-- <button type="submit" class="updatebtn mb-3 w-100  d-flex align-items-center justify-content-center mx-auto">Update
                                </button>  --}}
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mt-md-4 mt-3 px-0 mx-0  col-md-12">
                    <form action="javascript:void(0)" method="post">
                        @csrf
                        <div class="opporbox1 profileform" style="border-radius : 15px">
                            <h1 class="sidebar-h1 h1borderbottom">Address & Location</h1>
                            <div class="d-flex flex-md-nowrap flex-wrap gap-lg-3 gap-2">
                                <div class="d-flex flex-column w-100 mt-3">
                                    <label>Address</label>
                                    <input type="text" placeholder="Address" value="{{ $agentDetails->agenct_address ?? '' }}" name="address" class="profileinput numberOnly mt-1" id="agencyOfficeAddress" required>
                                </div>
                            </div>

                            <div class="mt-4">
                                <iframe id="googleMap" width="100%" height="250" style="border:0; border-radius: 15px;" allowfullscreen loading="lazy"></iframe>
                            </div>
                            <input type="hidden" id="latitude" name="latitude">
                            <input type="hidden" id="longitude" name="longitude">
                            {{-- <button type="submit" class="updatebtn mb-3 w-100 d-flex align-items-center justify-content-center mx-auto">Update  --}}
                            {{-- </button>  --}}
                        </div>
                    </form>
                </div>
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAp0oOTg0H4Zn6WPfkXiXXnhYz3h5nIf80&libraries=places">
                </script>

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

                <script>
                    // Ensure these values are set correctly
                    var address = "{!! $agentDetails->agenct_address !!}";

                    // Construct the URL for the iframe
                    var apiKey = 'AIzaSyAp0oOTg0H4Zn6WPfkXiXXnhYz3h5nIf80'; // Ensure this is your actual API key
                    var mapUrl = `https://www.google.com/maps/embed/v1/place?key=${apiKey}&q=${address}`;

                    // Set the src attribute of the iframe
                    document.getElementById("googleMap").src = mapUrl;

                </script>
            </div>
        </div>
    </div>
</div>
@endsection
