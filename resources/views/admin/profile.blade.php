@extends('admin.layouts.main')

@section('section')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">{{ $title ?? '' }}</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">{{ $title ?? '' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card customShadow">
                        <form action="{{ route('admin.update.profile') }}" id="formSubmit" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" id="" class="form-control"
                                            placeholder="Please enter name" value="{{ $info->name ?? old('name') }}" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="" class="form-control"
                                            placeholder="Enter last name" value="{{ $info->email ?? old('email') }}" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">New Password (Optional)</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Please enter new password">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Confirm Password</label>
                                        <input type="password" name="confirm_password" id="confirmPassword" class="form-control"
                                            placeholder="Please confirm your password">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-lg btn-rounded">
                                        Add Agent
                                    </button>
                                </div>
                            </div>
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
            $("#formSubmit").submit(function() {
                event.preventDefault();

                var password = $("#password").val();
                var confirmPassword = $("#confirmPassword").val();
                var form = $("#formSubmit");

                if(password != confirmPassword){
                    alert("Password and Confirm Password does not match !");
                    return false;
                } else {
                    form[0].submit();
                }

            });
        });
    </script>
    {{-- End Script --}}
@endsection
