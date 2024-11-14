<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - {{ $title ?? '' }}</title>
    
    <meta name="robots" content="noindex, nofollow">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/assets/css/main.css') }}?v={{ \Carbon\Carbon::now()->format('s') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/laptop.css') }}?v={{ \Carbon\Carbon::now()->format('s') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/tablet.css') }}?v={{ \Carbon\Carbon::now()->format('s') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/mobile.css') }}?v={{ \Carbon\Carbon::now()->format('s') }}">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @include('template.layout.errors')

    <link rel="stylesheet" href="{{ asset('cropper/css/cropper.css') }}">
    <script src="{{ asset('cropper/js/cropper.js') }}"></script>
</head>

<body class="plus-jakarta-sans-family">

    @if (!Route::is(['dashboard', 'opportunities', 'profile', 'lead.info']))
    <nav class="navbar  navbar-expand-lg">
        <div class="d-flex container-fluid  px-0 align-items-end justify-content-between">
            <a class="navbar-brand p-0 m-0" href="{{ route('home') }}">
                <img src="{{ asset('template/assets/img/header-logo.png') }}" class="img-fluid header-logo" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <i class="fa-solid fa-bars text-white fs-2 mt-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" -->
            <!-- aria-controls="offcanvasExample"></i> -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <ul class="d-flex align-items-center gap-2 justify-content-center header-contact-ul mb-0">
                    <li class="nav-link">
                        <a class="text-decoration-none" href="tel:130044148">
                            <button class="d-flex align-items-center gap-2 header-phone-button px-1">
                                <i class="fa-solid  fa-phone header-phone-icon"></i>
                                <h3 class="header-phone-text pe-3 mb-0 p-0 fw-bold">1300 344 148</h3>
                            </button>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="text-decoration-none" href="{{ route('agent.home') }}">
                            <button class="header-agent-btn fw-semibold">Agent Portal</button>
                        </a>
                    </li>
                    @if (Route::is(['agent.home']))
                    <li class="nav-link">
                        <a class="text-decoration-none" href="{{ route('agent.home') }}">
                        </a>
                        @if (!session('agent_id'))
                        <a class="text-decoration-none " href="{{ route('agent.login') }}"><button class="login-btn">Login</button></a>
                        @else
                        <a class="text-decoration-none " href="{{ route('dashboard') }}"><button class="login-btn">Dashboard</button></a>
                        @endif
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <nav class="header-menubar ">
        <div class="d-flex justify-content-end   ">
            <ul class="d-flex align-items-end gap-4 header-menubar-link justify-content-end py-1 m-0">
                <li class="nav-link">
                    <a href="{{ route('about.us') }}" class="">About us</a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('cash.back') }}" class="">Cashback</a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('property.report') }}" class="">Property Report</a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('calculator') }}" class="">Calculators</a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('contact') }}" class="">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    @endif



    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex  justify-content-between w-100">
            <a class="navbar-brand" href="index.php">
                <img src="{{ asset('template/assets/img/header-logo.png') }}" class="img-fluid offcanvas-logo" alt="logo">
            </a>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
            <i class="fa-solid fa-xmark text-white d-flex mt-2 align-items-end justify-content-end fs-2" data-bs-dismiss="offcanvas" aria-label="Close"></i>
        </div>
        <div class="offcanvas-body">
            <ul class="d-flex flex-column align-items-start gap-4 justify-content-start p-0 m-0">
                <li class="nav-link">
                    <a href="{{ route('about.us') }}" class="fw-semibold">About us</a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('cash.back') }}" class="fw-semibold">Cashback</a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('property.report') }}" class="fw-semibold">Property Report</a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('calculator') }}" class="fw-semibold">Calculators</a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('contact') }}" class="fw-semibold">Contact Us</a>
                </li>
                <div class="d-flex flex-column align-items-start gap-4 justify-content-start">
                    <a class="text-decoration-none" href="tel:130044148">
                        <button class="d-flex align-items-center gap-2 header-phone-button px-2 py-1">
                            <i class="fa-solid  fa-phone header-phone-icon"></i>
                            <h3 class="header-phone-text pe-3 mb-0 p-0 fw-bold">1300 344 148</h3>
                        </button>
                    </a>
                    <a class="text-decoration-none" href="agentportal.php">
                        <button class="header-agent-btn fw-semibold">Agent Portal</button>
                    </a>
                    @if (!session('agent_id'))
                    <a class="text-decoration-none " href=""><button class="login-btn">Login</button></a>
                    @else
                    <a class="text-decoration-none " href=""><button class="login-btn">Dashboard</button></a>
                    @endif
                </div>

            </ul>
        </div>
    </div>
    <div data-key="MqmWmiFc9YVTMbC9hnERmQ" id="chat_js_lib"></div>
    <script type="text/javascript" src="https://widgetinstall.com/plugin/chat.js" data-key="MqmWmiFc9YVTMbC9hnERmQ" id="chat_js_lib"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
