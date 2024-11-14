<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - {{ $title ?? '' }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('common/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @include('admin.layouts.errors')

    <!-- Datatables JS -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('cropper/css/cropper.css') }}">
    <script src="{{ asset('cropper/js/cropper.js') }}"></script>

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="{{ route('admin.dashboard') }}" class="logo">
                    <img src="{{ asset('common/logo.png') }}" alt="Logo">
                </a>
                <a href="{{ route('admin.dashboard') }}" class="logo logo-small">
                    <img src="{{ asset('common/logo.png') }}" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>

            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->

            <!-- Header Right Menu -->
            <ul class="nav user-menu">

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" width="31" alt="Ryan Taylor">
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('admin.profile') }}">
                            Settings
                        </a>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}">
                            Logout
                        </a>
                    </div>
                </li>
                <!-- /User Menu -->

            </ul>
            <!-- /Header Right Menu -->

        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        @yield('section')
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.morris.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>



</body>

</html>
<script>
    $(document).ready(function() {
        // Attach the event handler for keypress on all input elements with the class 'numeric-input'
        $('.numberOnly').on('keypress', function(e) {
            // Allow only numbers (0-9), backspace, and arrow keys
            var charCode = e.which ? e.which : e.keyCode;

            if (charCode != 8 && charCode != 37 && charCode != 39 && (charCode < 48 || charCode > 57)) {
                return false;
            }
        });

        // Optional: prevent pasting non-numeric characters
        $('.numeric-input').on('paste', function(e) {
            var pasteData = e.originalEvent.clipboardData.getData('text');
            if (!/^\d+$/.test(pasteData)) {
                e.preventDefault();
            }
        });
    });
</script>