@extends('template.layout.main')

@section('section')
    <div class="loginbg">
        <div class="container loginbox">
            <div>
                <div class="stepsbox">
                    <h1 class=" fw-bold stepboxheading01 m-0">Reset Password</h1>
                    <h2 class="stepboxheading02 mt-3">Enter your registered email address to confirm your identity.</h2>
                    <form method="POST" action="{{ route('post.request') }}">
                        @csrf
                        <input type="email" class="step5input mt-2" name="email" placeholder="Email Address" required>
                        <button type="submit" class="step6btn w-100 mt-2">
                            Get Code
                        </button>
                    </form>
                    <a href="javascript:void(0)">
                        <h2 style="color :#8EC2BA;cursor : pointer; " class="stepboxheading02 mt-2 text-end">Having Trouble?
                        </h2>
                    </a>
                    <div class="d-flex align-items-start gap-2 mt-2">
                        <div>
                            <img src="{{ asset('template/assets/img/info.png') }}" class="infoicon" />
                        </div>
                        <div>
                            <h2 class="stepboxheading02 fw-bolder m-0">You will receive a unique code which will be required
                                to generate a new password. <span class="fw-normal"> Can't find your code in your email?
                                    Please check your spam folder.</span></h2>
                        </div>
                    </div>

                </div>
            </div>




            <!-- Step 5 -->
            <div class="step" id="step-5">
                <div class="stepsbox">
                    <h1 class="fw-bold stepboxheading01">Verify your password</h1>
                    <div class="sellbox mb-5 mb-md-4 mt-3 ">
                        <div class="d-flex align-items-start gap-2 mt-2">
                            <img class="img-fluid infoicon mt-1" src="assets/img/info.png" />
                            <h2 class="stepboxheading02">Please check your email for the confirmation code sent. If you
                                haven't received this code please check your spam/ junk folder.</h2>
                        </div>
                        <input type="email" class="step5input mt-2" placeholder="Username (email@email.com.au)">
                        <input type="password" class="step5input mt-3" placeholder="Confirmation code">
                        <div class="d-flex flex-wrap align-items-start justify-content-between  mt-3">
                            <div class="d-flex align-items-start gap-2 ">
                                <img class="img-fluid infoicon mt-1" src="assets/img/info.png" />
                                <h2 class="stepboxheading02"><span style="color : #8EC2BA">Resend</span> the code to my
                                    email address</h2>
                            </div>
                            <div>
                                <button class="step6btn" onclick="nextStep('step-6')">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
