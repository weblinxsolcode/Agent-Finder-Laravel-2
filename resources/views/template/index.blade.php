@extends('template.layout.main')

@section('section')
    <!-- sec1 -->
    <div class="sec1">
        <div class="container section-padding ">
            <h1 class="fw-normal sec1-h1">Compare Top Real <br> Estate Agents and <br> <span
                    class="fw-bolder text-nowrap">Receive
                    up to $5000</span>
            </h1>
            <div class="input-wrapper  d-flex align-items-center mt-md-4 mt-lg-5 mt-3">
                <i class="fa-solid fa-location-dot me-4 sec-1-icon"></i>
                <input type="text" class="sec-1-input" placeholder="Enter your Address...">
                <a class="text-decoration-none" href="javascript:void(0)">
                    <button class="sec-1-btn">
                        Compare Agents
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="sec2">
        <div class="slider">
            <div class="slide-track" id="slide-track">
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/Capturegroup.PNG') }}" alt="1" class="img-fluid ">
                </div>
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/10.png') }}" alt="10"
                        style="height: 66px !important;padding-top : 28px;" class="img-fluid  px-3">
                </div>
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/11.png') }}" alt="11"
                        style="height: 60px !important;padding-top : 22px;" class="img-fluid  px-3">
                </div>
                <!--<div class="slide d-flex align-items-center justify-content-center">-->
                <!--    <img src="assets/img/13.png" alt="13" style="height: 60px !important;padding-top : 27px;"   class="img-fluid px-3">-->
                <!--</div>-->
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/14.png') }}" alt="14"
                        style="height: 60px !important;padding-top : 31px;" class="img-fluid   px-3">
                </div>
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/Capturegroup.PNG') }}" alt="1" class="img-fluid ">
                </div>
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/10.png') }}" alt="10"
                        style="height: 66px !important;padding-top : 28px;" class="img-fluid  px-3">
                </div>
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/11.png') }}" alt="11"
                        style="height: 60px !important;padding-top : 22px;" class="img-fluid  px-3">
                </div>
                <!--<div class="slide d-flex align-items-center justify-content-center">-->
                <!--    <img src="assets/img/13.png" alt="13" style="height: 60px !important;padding-top : 27px;"   class="img-fluid px-3">-->
                <!--</div>-->
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/14.png') }}" alt="14"
                        style="height: 60px !important;padding-top : 31px;" class="img-fluid   px-3">
                </div>
            </div>
        </div>
    </div>

    <!-- sec3 -->
    <div class="sec-3 py-md-3  ">
        <div
            class="d-flex container section-padding  py-5 row  align-items-center justify-content-center mx-auto container ">
            <div class="bgarrow sec-3-left-sec col-md-5 px-0">
                <h1 class="p-0 m-0 sec-3-h1">How it <br> <span class="p-0 m-0">works?</span></h1>
                <p class="mt-3 sec-3-p">How to receive up to $5,000 <br> by connecting with the Top 3 <br> Agents in your
                    area</p>
            </div>
            <div class="col-md-7 p-0 m-0">
                <video id="myVideo" class="videohide" controls playsinline poster="assets/img/agentthumb.jpg">
                    <source src="{{ asset('template/assets/img/AgentChoice.mp4') }}">
                </video>
                <div id="video_play" class="video_play videoshow">
                    <div class="position-relative">
                        <div>
                            <img class="video_play" src="{{ asset('template/assets/img/thumbnil.jpeg') }}">
                        </div>

                        <div>
                            <img class="videoplaybtn" src="{{ asset('template/assets/img/videoplaybtn.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container stepbox section-padding mt-md-4 pt-3">
            <h1 class="step-box-h2 p-0 m-0">The 3 Step Process</h1>
            <h3 class="p-0 mt-3 fw-medium roboto-regular step-box-h3">Compare and connect with the top 3 real estate agentin
                your
                local area</h3>
            <div class="d-flex flex-wrap  gap-md-2 my-0 align-items-center justify-content-center step-box ">
                <div class="position-relative d-flex">
                    <img src="{{ asset('template/assets/img/Step1.png') }}" class="img-fluid stepboximg" alt="">
                    <div class="img_text px-3 px-lg-4">
                        <div class="d-flex justify-content-center mt-3 mx-auto align-items-center gap-2">
                            <img src="{{ asset('template/assets/img/stepboximg1.png') }}" class="stepicon" alt="">
                            <h4 class="mb-0">Find an Agent</h4>
                        </div>
                        <p class="text-center ">Complete a 30 second questionnaire and we will suggest the top 3
                            <br>
                            performing agents in your area.
                        </p>
                    </div>
                </div>
                <div class="position-relative d-flex">
                    <img src="{{ asset('template/assets/img/Step2.png') }}" class="img-fluid stepboximg" alt="">
                    <div class="img_text px-3 px-lg-4 pb-3">
                        <div class="d-flex justify-content-center mt-3  mx-auto align-items-center  gap-2">
                            <img src="{{ asset('template/assets/img/stepboximg2.png') }}" class="stepicon"
                                alt="">
                            <h4 class="mb-0" style="color : #2E353C">Compare & Choose</h4>
                        </div>
                        <p class="text-center ">Compare the top performing agents and pick your agent to
                            connect. </p>
                    </div>
                </div>
                <div class="position-relative d-flex">
                    <img src="{{ asset('template/assets/img/Step3.png') }}" class="img-fluid stepboximg" alt="">
                    <div class="img_text px-3 px-lg-4">
                        <div class="d-flex justify-content-center mt-3 mx-auto align-items-center gap-2">
                            <img src="{{ asset('template/assets/img/stepboximg3.png') }}" class="stepicon"
                                alt="">
                            <h4 class="mb-0" style="color :#A3A3A3">Receive Cashback</h4>
                        </div>
                        <p class="text-center ">Pick any agent of your choice and receive upto $5000 towards
                            your marketing
                            styling or simply keep the cash.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sec3 -->

    <!-- sec-4 -->
    <div id="mission" class="sec4 py-5">
        <h1 class="text-center text-white sec4-h1">Our Mission</h1>
        <p class="text-center py-4 sec-4-p">Supporting <span>everyday Australian families by giving back to the</span>
            community
            <span>and providing</span> guidance <span>in their</span> real
            estate <span>journey.</span>
        </p>
        <div
            class="section-padding container my-md-5 my-3 d-flex flex-column flex-md-row align-items-center justify-content-center ">
            <div class="sec-4box mb-5">
                <img src="{{ asset('template/assets/img/missionicon1.png') }}" alt="">
                <h2 class="text-white  sec-4-h2">Free & Unbiased</h2>
                <hr class="sec-4-hrline ">
                <h3 class="text-white  sec-4-h3">Our service is 100% free with no catch. Meet the best agents in <br> your
                    area.
                </h3>
            </div>
            <div class="sec-4box mb-5">
                <img src="{{ asset('template/assets/img/missionicon2.png') }}" alt="">
                <h2 class="text-white  sec-4-h2">Save Time & Hassle</h2>
                <hr class="sec-4-hrline ">
                <h3 class="text-white  sec-4-h3">It takes less than 60 seconds to find the top 3 agents to connect <br>
                    with.
                </h3>
            </div>
            <div class="sec-4box mb-5">
                <img src="{{ asset('template/assets/img/missionicon3.png') }}" class="px-1" alt="">
                <h2 class="text-white  sec-4-h2">Only The Top Agents</h2>
                <hr class="sec-4-hrline ">
                <h3 class="text-white  sec-4-h3">We analyse 55,000+ agents and thousands of reviews to find the best
                    agents
                    for your needs.</h3>
            </div>

        </div>
    </div>

    <!-- sec5 -->
    <div class="sec5 ">
        <div class="section-padding py-md-5 py-5 container roboto-regular">
            <h2 class=" gothic-a1-black fw-bold py-3 sec-5-h2">Why We Only Work With Top Agents</h2>
            <div class="text-wrapper  features mt-md-5 mt-3">
                <div class="feature d-flex align-items-start gap-3 feature--sell">
                    <div class="feature__icon">
                        <svg class="bill-icon " width="25" height="24" viewBox="0 0 25 19">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M23.4533 -2.82942e-05H1.85563C1.69785 -0.000332011 1.54156 0.0304828 1.3957 0.0906524C1.24984 0.150822 1.11728 0.239165 1.00561 0.350626C0.893933 0.462086 0.805335 0.594476 0.744885 0.740217C0.684435 0.885959 0.65332 1.04219 0.65332 1.19997V13.2C0.65332 13.5182 0.779748 13.8235 1.00479 14.0485C1.22984 14.2735 1.53506 14.4 1.85332 14.4H23.451C23.7693 14.4 24.0745 14.2735 24.2995 14.0485C24.5246 13.8235 24.651 13.5182 24.651 13.2V1.19997C24.651 0.882112 24.5249 0.577237 24.3004 0.352259C24.0758 0.127282 23.7712 0.000583563 23.4533 -2.82942e-05ZM2.45388 4.20055V1.80055H4.85388C4.85357 2.43698 4.60062 3.04725 4.15059 3.49727C3.70057 3.94729 3.0903 4.20025 2.45388 4.20055ZM22.8537 4.20055C22.2172 4.20055 21.6067 3.9477 21.1567 3.49761C20.7066 3.04752 20.4537 2.43707 20.4537 1.80055H22.8537V4.20055ZM20.4537 12.6006H22.8537V10.2006C22.2172 10.2006 21.6067 10.4534 21.1567 10.9035C20.7066 11.3536 20.4537 11.964 20.4537 12.6006ZM2.45388 12.6006V10.2006C3.0904 10.2006 3.70084 10.4534 4.15093 10.9035C4.60102 11.3536 4.85388 11.964 4.85388 12.6006H2.45388ZM9.6539 7.20021C9.6539 9.18327 10.9994 10.8002 12.6568 10.8002C14.313 10.8002 15.6597 9.18327 15.6597 7.20021C15.6597 5.21715 14.3165 3.60021 12.6568 3.60021C10.9971 3.60021 9.6539 5.21715 9.6539 7.20021Z"
                                fill="currentColor"></path>
                            <path
                                d="M24.1913 16.2006H1.1153C0.860157 16.2006 0.65332 16.4074 0.65332 16.6626V17.5392C0.65332 17.7943 0.860157 18.0011 1.1153 18.0011H24.1913C24.4465 18.0011 24.6533 17.7943 24.6533 17.5392V16.6626C24.6533 16.4074 24.4465 16.2006 24.1913 16.2006Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div class="feature__text">
                        <h3 class="feature__title  p-0 m-0">Sell for more</h3>
                        <p class="feature__description mt-1">Top agents help you sell your home for as much as 5-10%
                            more on
                            average.</p>
                    </div>
                </div>
                <hr class="p-0 mt-2" style="opacity : 1 !important;width : 65%">
                <div class="feature d-flex gap-3 feature--close mt-4 mt-md-4">
                    <div class="feature__icon">
                        <img src="{{ asset('template/assets/img/sellicon.png') }}" style="height : 24px;width : 25px" alt="">
                    </div>
                    <div class="feature__text">
                        <h3 class="feature__title p-0 m-0">Sell faster</h3>
                        <p class="feature__description mt-1">Top agents close deals faster than the average agent.</p>
                    </div>
                </div>
                <hr class="p-0 mt-2" style="opacity : 1 !important;width : 55%">
                <div class="feature d-flex gap-3 feature--sell mt-4 mt-md-4">
                    <div class="feature__icon">
                        <svg viewBox="0 0 24 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 25px; height: 24px;">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="the-walkthrough-4-copy" class=""
                                    transform="translate(-652.000000, -3921.000000)" fill="#111" fill-rule="nonzero">
                                    <g id="Group-11" transform="translate(652.000000, 3921.000000)">
                                        <path
                                            d="M10.7125257,0.79907197 L7.78318506,6.73850068 L1.229178,7.694013 C0.0538529828,7.86447999 -0.417174218,9.31344938 0.435160717,10.1433544 L5.17683454,14.763907 L4.05534121,21.2909982 C3.85347241,22.4708092 5.09608702,23.3545459 6.13683284,22.8027712 L12,19.7209075 L17.8631672,22.8027712 C18.903913,23.35006 20.1465276,22.4708092 19.9446588,21.2909982 L18.8231655,14.763907 L23.5648393,10.1433544 C24.4171742,9.31344938 23.946147,7.86447999 22.770822,7.694013 L16.2168149,6.73850068 L13.2874743,0.79907197 C12.7626155,-0.259617739 11.2418705,-0.273075659 10.7125257,0.79907197 Z"
                                            id="star-solid"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="feature__text">
                        <h3 class="feature__title  p-0 m-0">Work with the best</h3>
                        <p class="feature__description mt-1">We only recommend the top performing agents working in your
                            area.</p>
                    </div>
                </div>
                <hr class="p-0 mt-2" style="opacity : 1 !important;width : 46%">
                <div class="feature d-flex gap-3 feature--sell mt-4 mt-md-4">
                    <div class="feature__icon">
                        <img src="{{ asset('template/assets/img/secures.png') }}" alt="secure" style="height: 27px;width : 25px">
                    </div>
                    <div class="feature__text">
                        <h3 class="feature__title  p-0 m-0">Secure</h3>
                        <p class="feature__description mt-1">Your details will not be shared with <br> agents without
                            your
                            consent.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sec6 -->
    <div class="sec6 section-padding py-md-5 py-5 container roboto-regular">

        <!--<h1 class="text-center sec-6-h1 ">Disclaimer: Agent Choice provides a <span class="fw-bolder">100% free no obligation</span> service to home owners and is-->
        <!--    entirely independent, with no-->
        <!--    affiliations to any real estate agent or agencies.</h1>-->
        <h1 class="text-center sec-6-h1 ">
            <span class="fw-bold text-dark" style="font-size: 22px;">Disclaimer:</span> Agent Choice provides a 100% free,
            no obligation service to home owners and is entirely independent, is <span class="fw-bolder"
                style="color : #8EC2BA">not affiliated with, not endorsed by, or in partnership with</span> any real estate
            agent or agencies listed on this website.
        </h1>
        <div class="input-wrapper mx-xl-4 d-flex align-items-center  mt-md-4 mt-lg-5 mt-3">
            <i class="fa-solid fa-location-dot me-4 sec-1-icon"></i>
            <input type="text" class="sec-1-input" placeholder="Enter Your Address...">
            <a class="text-decoration-none" href="compareagentsteps.php">
                <button class="sec-1-btn">
                    Compare Agents
                </button>
            </a>
        </div>
    </div>

    <script>
        var video = document.getElementById('myVideo');
        var videoPlayButton = document.querySelector('.videoplaybtn');

        videoPlayButton.addEventListener('click', function() {
            if (video.classList.contains('videohide')) {
                video.classList.remove('videohide');
                video.classList.add('videoshow');
                document.getElementById('video_play').classList.remove('videoshow');
                document.getElementById('video_play').classList.add('videohide');
                video.play().catch(function(error) {
                    console.log('Play failed:', error);
                });
            } else {
                video.classList.remove('videoshow');
                video.classList.add('videohide');
                video.pause();
                document.getElementById('video_play').classList.remove('videohide');
                document.getElementById('video_play').classList.add('videoshow');
            }
        });
    </script>
@endsection
