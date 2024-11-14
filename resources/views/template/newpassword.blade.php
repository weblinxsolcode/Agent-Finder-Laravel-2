@extends('template.layout.main')

@section('section')
    <div class="loginbg">
        <div class="container loginbox">
            <div>
                <div class="stepsbox">
                    <h1 class=" fw-bold stepboxheading01 m-0">Create Password</h1>
                    <h2 class="stepboxheading02 mt-3">Enter your unique code that was sent to your email.</h2>
                    <form method="POST" id="formSubmit" action="{{ route('update.new.password', ['id' => $info->id]) }}">
                        @csrf
                        <input type="text" name="code" class="step5input mt-2" id="formCode" placeholder="Code" required>

                        <div class="d-flex align-items-start gap-2 mt-3">
                            <img src="{{ asset('template/assets/img/info.png') }}" class="infoicon mt-1" />
                            <h2 class="stepboxheading02 fw-normal m-0">
                                Password must have one upper-case letter, one numeric character and be at least 8 characters
                                long.

                            </h2>
                        </div>
                        <input type="password" class="step5input mt-2" name="password" id="formPassword" placeholder="Enter new password" required>
                        <input type="password" class="step5input mt-2" name="confirmPassword" id="confirmPassword" placeholder="Re-enter New Password" required>
                        <button type="submit" class="step6btn w-100 mt-2">Submit</button>
                        <a href="javascript:void(0)">
                            <h2 style="color :#8EC2BA;cursor : pointer; " class="stepboxheading02 mt-2 text-end">I didn't
                                receive my code.</h2>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- This script is working for form submission --}}
    <script>
        $(document).ready(function(){
            $("#formSubmit").submit(function(){
                event.preventDefault();

                var form = $("#formSubmit");
                var password = $("#formPassword").val();
                var confirmPassword = $("#confirmPassword").val();
                var code = "{{ $info->code }}";
                var inputCode = $("#formCode").val();

                if(code == inputCode)
                {
                    if(password == confirmPassword)
                    {
                        form[0].submit();
                    }
                    else
                    {
                        alert("New Password and confirm password doesn't match");
                    }
                } else {
                    alert("Code doesn't match");
                }


            });
        });
    </script>
    {{-- End Script --}}
@endsection
