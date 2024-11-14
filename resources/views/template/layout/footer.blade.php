<aside class="plus-jakarta-sans-family">
    <footer class="footer-sec-1 py-4">
        <div class="container  section-padding">
            <div class=" d-flex row align-items-center justify-content-between w-100">
                <div class="col-md-5 p-0">
                    <a class="navbar-brand mx-auto d-flex" href="{{ route('agent.home') }}">
                        <img src="{{ asset('template/assets/img/header-logo.png') }}"
                            class="img-fluid mx-auto footer-logo" alt="logo">
                    </a>
                </div>
                <div class="col-md-7 px-0 mt-4  mt-md-0">
                    <div class="d-flex mb-0  align-items-center justify-content-between">
                        <h1 class="footer-sec1-h1 mx-3">Sign up to our newsletter</h1>
                        <img src="{{ asset('template/assets/img/downarrow.png') }}" class="px-4" width="62" alt="">
                    </div>
                    <div class="position-relative footer-sec-input">
                        <form action="{{ route('subscribe') }}" method="post">
                            @csrf
                            <div class="input-wrapper p-0">
                                <input class="footer-sec1-input" type="text" placeholder="Enter your email address"
                                    name="email" required>
                                <button type="submit" class="footer-sec1-btn">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer-sec-2  footer-sec-2-bg ">
        <div class="container section-padding">
            <div class="row gap-lg-4" bis_skin_checked="1">
                <div class="col-lg-3 col-md-4" bis_skin_checked="1">
                    <h5 class="">Site Overview </h5>
                    <ul class="nav flex-column mt-4">
                        <li class="nav-item mb-0">
                            <a href="{{ route('agent.home') }}" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2 mt-1" />
                                Home
                            </a>
                        </li>
                        <li class="nav-item mb-0">
                            <a href="javascript:void(0)" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2" />
                                About
                                Us
                            </a>
                        </li>
                        <li class="nav-item mb-0">
                            <a href="javascript:void(0)" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2" />
                                Cahback
                            </a>
                        </li>
                        <li class="nav-item mb-0">
                            <a href="javascript:void(0)" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2" />
                                Property Report
                            </a>
                        </li>
                        <li class="nav-item mb-0">
                            <a href="javascript:void(0)" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2" />
                                Calculators
                            </a>
                        </li>
                        <li class="nav-item mb-0">
                            <a href="javascript:void(0)" class="nav-link p-0 mb-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2" />
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 px-lg-5 col-md-4" bis_skin_checked="1">
                    <h5 class="mt-4 mt-md-0">Company Insights</h5>
                    <ul class="nav flex-column mt-4">
                        <!-- <li class="nav-item mb-0 ">
                            <a href="{{ route('about.us') }}" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2 mt-1" />
                                About us
                            </a>
                        </li>
                        <li class="nav-item mb-0">
                            <a href="javascript:void(0)" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2 mt-1" />
                                Our Mission
                            </a>
                        </li> -->


                        <li class="nav-item mb-0">
                            <a href="{{ route('agent.home') }}" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2 mt-1" />
                                Agent Portal
                            </a>
                        </li>
                        <li class="nav-item mb-0">
                            <a href="{{ route('cash.back') }}" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2 mt-1" />
                                Cashback Explained
                            </a>
                        </li>
                        <li class="nav-item mb-0">
                            <a href="{{ route('calculator') }}" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2 mt-1" />
                                Commission Calculator
                            </a>
                        </li>
                        <li class="nav-item mb-0">
                            <a href="{{ route('cash.back') }}#cashbackfaq" class="nav-link p-0">
                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                    class="footerarrow me-2 mt-1" />
                                FAQ's
                            </a>
                        </li>
                        <div class="icons"></div>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4" bis_skin_checked="1">
                    <h5 class="mt-4 mt-md-0">Get in Touch
                    </h5>
                    <ul class="nav flex-column mt-4">
                        <li class="nav-item" style="margin-bottom : 12px">
                            <a href="tel:1300 344 148" style="   color: #2e353c;"
                                class="nav-link text-decoration-none mb-0 p-0 fw-bold">
                                <img src="{{ asset('template/assets/img/tele.png') }}" alt="" class="me-2 contact-icon">
                                1300 344 148
                            </a>
                        </li>
                        <li class="nav-item " style="margin-bottom : 12px">
                            <a href="mailto:info@agentchoice.com.au" style="color: #2e353c;"
                                class="nav-link text-decoration-none mb-0 p-0 d-flex fw-medium ">
                                <img src="{{ asset('template/assets/img/email.png') }}" alt=""
                                    class="me-2 mt-1 email-icon">
                                info@agentchoice.com.au
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="javascript:void(0)" style="color: #2e353c;"
                                class="align-items-center d-flex nav-link text-decoration-none p-0 mb-0 d-flex fw-medium">
                                <!-- <img src="{{ asset('template/assets/img/location.png') }}" alt=""
                                    class="me-2 mt-1 contact-icon"> -->
                                <i class="fa-solid fa-map-location-dot text-white me-2"></i>
                                Suite 312, Level 3, 478 George Street <br> Sydney, NSW 2000
                            </a>
                        </li>
                        <!--<li class="nav-item mt-2"><a href="#" class="nav-link p-0 d-flex">-->
                        <!--        <img src="./assets/img/location.png" alt="" class="me-3 contact-icon">-->
                        <!--        <span>Suite 302, Level 3 478 George Street</span> -->
                        <!--        <span>Sydney, NSW 2000</span>-->
                        <!--    </a></li>-->
                        <li class="d-flex gap-4 mt-md-3 align-items-center">
                            <i class="fa-brands fa-facebook-f footer-sec-icon"></i>
                            <i class="fa-brands fa-instagram footer-sec-icon"></i>
                            <i class="fa-brands fa-x-twitter  footer-sec-icon"></i>
                            <i class="fa-brands fa-linkedin-in footer-sec-icon"></i>
                            <i class="fa-brands fa-youtube footer-sec-icon"></i>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>
    <footer class="footer-sec-1 py-4">
        <div class="container paddiing">
            <div
                class=" d-flex flex-md-row flex-column-reverse flex-wrap align-items-center justify-content-between w-100">
                <div class="">
                    <h2 style="color  :#bebebe" class=" footersec-h2 mt-2 text-center mt-md-0">© 2024
                        The Agent Choice Holdings Pty Limited. All Rights Reserved.
                        ABN <span class="text-decoration-underline" style="color : #8EC2BA">68 271 308 458</span>
                    </h2>
                </div>
                <div class=" mt-0 mt-md-0">
                    <h3 style="color  :#bebebe" class="footersec-h3 ">
                        <a style="color  :#bebebe" class="footerhover" href="{{ route('terms') }}">
                            Terms & Conditions
                        </a>
                        <span class="mx-md-2 mx-0">|</span>
                        <a style="color  :#bebebe" class="footerhover" href="{{ route('user.agreement') }}">
                            User Agreement
                        </a>
                        <span class="mx-md-2 mx-0">|</span>
                        <a style="color  :#bebebe" class="footerhover" href="{{ route('privacy.policy') }}">
                            Privacy Policy
                        </a>
                        <span class="mx-md-2 mx-0">|</span>

                        <a style="color  :#bebebe" class="footerhover" href="{{ route('disclaimer') }}">
                            Disclaimer
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </footer>
</aside>