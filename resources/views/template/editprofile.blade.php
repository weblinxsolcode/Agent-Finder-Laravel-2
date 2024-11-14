@extends('template.layout.main')



@section('section')
    <div class="d-flex flex-column flex-lg-row  justify-content-center">
        @include('template.layout.sidebar')
        <div class="dashboardbg w-100" style="height : unset !important">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="dashboard">
                    <h1 class="dashboard-h1">Profile</h1>
                    {{-- <h1 class="dashboard-h1 border-0 p-0 mt-5" style="color : #8EC2BA">Property ID #302011</h1> --}}
                    <div class="d-flex row mx-0 align-items-start mt-2">
                        <div class="d-flex col-md-6 mx-0 px-2  flex-column mt-md-5 mt-3">
                            <div class="opporbox1 py-4" style="border-radius : 15px;">
                                <input type="text" name="agency_name" value="{{ $agentDetails->agency_name ?? '' }}" class="profileinput w-100" placeholder="Agency Name" required>
                                <input type="number" name="agency_code" value="{{ $agentDetails->agenct_code ?? '' }}" class="profileinput mt-4 w-100" placeholder="Agency Code" required>
                                <input type="text" name="first_name" value="{{ $agentDetails->first_name ?? '' }}" class="profileinput mt-4 w-100" placeholder="First Name" required>
                                <input type="text" name="last_name" value="{{ $agentDetails->last_name ?? '' }}" class="profileinput mt-4 w-100" placeholder="Last Name" required>
                                <input type="email" name="email" value="{{ $agentDetails->email ?? '' }}" readonly class="profileinput mt-4 w-100" placeholder="Email" required>
                                <input type="number" name="phone_number" value="{{ $agentDetails->phone_number ?? '' }}" class="profileinput mt-4 w-100" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="d-flex col-md-6 mx-0 px-2  flex-column  mt-4">
                            <div class="opporbox1 pb-5 mt-4" style="border-radius : 15px">
                                <h1 class="sidebar-h1">Fees & marketing <span class="fw-semibold fs-6">(inc.GST)</span>
                                </h1>

                                <div class="profileform">
                                    <div class="d-flex flex-column mt-3">
                                        <label>Commission</label>
                                        <input type="number" placeholder="Commission"
                                            value="{{ $agentDetails->agency_commission ?? 'N/A' }}" name="agency_commission"
                                            class="profileinput numberOnly"/>
                                    </div>
                                    <div class="d-flex flex-column mt-3">
                                        <label>Marketing Budget</label>
                                        <input type="number" placeholder="Marketing Budget"
                                            value="{{ $agentDetails->marketting_budget ?? 'N/A' }}" name="marketting_budget"
                                            class="profileinput numberOnly" />
                                    </div>
                                    <div class="d-flex flex-column mt-3">
                                        <label>Sold In Your Area</label>
                                        <input type="number" placeholder="Sold In Your Area"
                                            value="{{ $agentDetails->sold_in_area ?? 'N/A' }}" name="sold_in_area"
                                            class="profileinput numberOnly" />
                                    </div>
                                    <div class="d-flex flex-column mt-3">
                                        <label>Average Sale Price</label>
                                        <input type="number" placeholder="Average Sale Price"
                                            value="{{ $agentDetails->average_sale_price ?? 'N/A' }}"
                                            name="average_sale_price" class="profileinput numberOnly" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-md-5 col-md-12">
                        <div class="opporbox1" style="border-radius : 15px">
                            <h1 class="sidebar-h1">Address & Location</h1>
                            <div class="d-flex gap-4 align-items-center">
                                <div class="d-flex flex-column mt-3 w-100">
                                    <label>Address</label>
                                    <input type="text" placeholder="Address" id="agencyOfficeAddress" value="{{ $agentDetails->agenct_address ?? 'N/A' }}" name="address" class="profileinput w-100" />
                                </div>
                    
                            </div>
                            <input type="hidden" id="latitude" name="latitude" value="{{ $agentDetails->latitude ?? '' }}">
                            <input type="hidden" id="longitude" name="longitude" value="{{ $agentDetails->longitude ?? '' }}">
                        </div>
                    </div>
                    <div class=" mt-5">
                        <div class="py-4 opporbox1" style="border-radius : 15px">
                            <h1 class="sidebar-h1">Add Video Link</h1>
                            <div class="profileform">
                                <div class="d-flex flex-column mt-3">
                                    <label>Video Link</label>
                                    <input type="url" placeholder="Video Link"
                                        value="{{ $agentDetails->video_link ?? ' N/A' }}" name="video_link"
                                        class="profileinput" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="updatebtn d-flex align-items-center justify-content-center mx-auto">Update
                        Profile</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- This script is working for number input field only -->
    <script>
        $(document).ready(function() {
            $('.numberOnly').on('input', function() {
                // Replace any non-numeric character with an empty string
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
    </script>
    <!-- End Scritp -->
    
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
@endsection
