@extends('template.layout.main')

@section('section')
    <div class="loginbg">
        <div class="container loginbox">
            <div>
                <div class="stepsbox">
                    <h1 class=" fw-bold stepboxheading01 m-0">Login</h1>
                    <h2 class="stepboxheading02 mt-3">Please input your email address and password</h2>
                    <form class="" action="{{route('agent.login.check')}}" method="POST">
                        @csrf
                        <input type="email" class="step5input mt-2" name="email" placeholder="Email Address" required>
                        <input type="password" class="step5input mt-2" name="password" placeholder="Password" required>
                        <button type="submit" class="step6btn w-100 mt-2">Login</button>
                    </form>
                    <a href="{{ route('forget.password') }}">
                        <h2 style="color :#8EC2BA;cursor : pointer; " class="stepboxheading02 mt-2 text-end">Forgot password
                        </h2>
                    </a>
                    <div class="d-flex align-items-start gap-2">
                        <div>
                            <img src="{{ asset('template/assets/img/info.png') }}" class="infoicon" />
                        </div>
                        <div>
                            <h2 class="stepboxheading02 fw-bolder m-0">Not registered yet?</h2>
                            <h2 class="stepboxheading02 m-0">If you're a top performing real estate agent eager to start
                                receiving leads,
                                <a style="color :#8EC2BA;cursor : pointer; " class="text-decoration-none"
                                    href="{{ route('registration') }}">
                                    sign up here
                                </a>
                                to establish your agent profile.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
