@extends('template.layout.main')

@section('section')
    <aside class="roboto-light">
        <div class="contactUs">
            <div class="container section-padding roboto-regular">
                <h1 class="fw-bold sec1-h1">Get in touch</h1>
                <hr class="aboutsec1line  my-md-4">
                <h3>Connect With Our Team</h3>
            </div>
        </div>
        <!-- Contact Us Form Section Start Here -->
        <div class="form-container cashbg">
            <div class="container section-padding">
                <h2 class="p-0 m-0 fw-bold">Thank you for visiting us</h2>
                <p class="p-0 mb-3">If you have any questions please feel free to contact us on any of the following:</p>
                <div class="row formBox">
                    <div class="col-md-5 col-lg-4 connect-us">
                        <div class="connect-header">
                            <h3 class="m-0">Connect <br> <span>With Us</span></h3>
                            <hr class="hr">
                        </div>
                        <div class="contact-col">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="tel:1300344148"
                                        class="nav-link text-white p-0 fw-bolder">
                                        <i class="fa-solid fa-phone me-2 mt-1"></i>
                                        1300 344 148</a></li>
                                <li class="nav-item "><a href="mailto:info@agentchoice.com.au"
                                        class="nav-link text-white p-0 d-flex ">
                                        <i class="fa-regular fa-envelope me-2 mt-1"></i>
                                        info@agentchoice.com.au</a></li>
                                <li class="nav-item mt-2"><a href="#" class="nav-link text-white p-0 d-flex ">
                                        <i class="fa-solid fa-location-dot me-2 mt-1"></i>
                                        Suite 312, Level 3, 478 George Street <br> Sydney, NSW 2000</a></li>
                                <li class="d-flex gap-4 align-items-center mt-2">
                                    <i class="fa-brands fa-facebook-f footer-sec-icon"></i>
                                    <i class="fa-brands fa-instagram footer-sec-icon"></i>
                                    <i class="fa-brands fa-twitter footer-sec-icon"></i>
                                    <i class="fa-brands fa-linkedin-in footer-sec-icon"></i>
                                    <i class="fa-brands fa-youtube footer-sec-icon"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 form-field px-lg-5">
                        <form id="contactForm" class="inputform" action="javascript:void(0)" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Full Name" id="formName" required>
                            </div>

                            <div class="row gap-3 gap-md-0 mb-3">
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" id="formEmail"
                                        aria-describedby="emailHelp" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" placeholder="Phone Number" id="formNumber"
                                        required>
                                </div>
                            </div>
                            <div class="">
                                <input class="form-control messagebox" placeholder="Message" id="formDescription"
                                    required />
                            </div>
                            <button type="submit" class="submitbtn text-white fw-medium">Submit Now</button>
                        </form>
                        <script>
                            $(document).ready(function() {
                                $("#contactForm").on("submit", function(e) {
                                    e.preventDefault(); // Prevent the form from submitting normally

                                    // Collect form data
                                    var formData = {
                                        name: $("#formName").val(),
                                        email: $("#formEmail").val(),
                                        phone: $("#formNumber").val(),
                                        _token: "{{ csrf_token() }}", // Corrected _token key and added the missing comma
                                        description: $("#formDescription").val(),
                                    };

                                    // Perform the AJAX request
                                    $.ajax({
                                        url: '{{ route('store.contact') }}', // Change this URL to your desired endpoint
                                        type: 'POST',
                                        data: formData,
                                        dataType: 'json',
                                        success: function(response) {

                                            document.getElementById('contactForm').addEventListener('submit',
                                                function(event) {
                                                    event
                                                        .preventDefault(); // Prevent the form from submitting the traditional way

                                                    // Hide the form fields
                                                    document.querySelector('.inputform').style.display = 'none';

                                                    // Show the thank-you message
                                                    document.getElementById('thankYouMessage').style.display =
                                                        'block';
                                                });

                                        },
                                        error: function(xhr, status, error) {
                                            document.getElementById('contactForm').addEventListener('submit',
                                                function(event) {
                                                    event
                                                        .preventDefault(); // Prevent the form from submitting the traditional way

                                                    // Hide the form fields
                                                    document.querySelector('.inputform').style.display = 'none';

                                                    // Show the thank-you message
                                                    document.getElementById('thankYouMessage').style.display =
                                                        'block';
                                                });
                                        }
                                    });
                                });
                            });
                        </script>
                        <div id="thankYouMessage" class="thankYouMessage" style="display: none;">
                            <h1>Thank you - We have received your request</h1>
                            <p>A member of our team will reach out to you shortly.</p>

                            <div class="d-flex align-items-start gap-2 disclaimer">
                                <img src="{{ asset('template/assets/img/info.png') }}" class="infoicon mt-1">
                                <h4 class="">In the meantime, you may refer to our <span style="color : #8EC2BA"> <a
                                            class="text-decoration-none" href="{{ route('cash.back') }}#cashbackfaq">FAQ</a>
                                    </span> for
                                    any questions you may have.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us Form Section End Here -->

    </aside>

    <script></script>
@endsection
