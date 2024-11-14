@php
    $agentDetails = App\Models\Agents::find($id);
@endphp


<div class="d-flex flex-column">
    <div id="header" >
        <div  class="d-flex align-items-center p-3">
            <i class="fas fa-bars header-icon" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample" id="sidebarCollapse"></i>
            <h5 class="ms-2 mb-0">Agent Finder</h5>
        </div>
    </div>
    <nav id="sidebar " class="d-none d-lg-block">
        <div class="sidebar-header pt-5">
            <a class="navbar-brand p-0 m" href="javascript:void(0)">
                <img src="{{ asset('common/sidebarlogo.png') }}" class="img-fluid sidebar-logo d-flex mx-auto"
                    alt="logo">
            </a>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center mt-4">
            <a href="javascript:void(0)" class="d-flex align-items-center justify-content-center flex-column">
                @if ($agentDetails->profile_picture != null)
                    <img style="width : 130px;height : 130px" id="imagePreview1"
                        src="{{ asset('template/assets/Profiles/Profile-Pictures/' . $agentDetails->profile_picture) }}"
                        class="img-fluid rounded-circle" alt="Image Preview" />
                @else
                    <img style="max-height: 8rem;" id="imagePreview1"
                        src="{{ asset('common/camera.png') }}" class="img-fluid rounded-circle"
                        alt="Image Preview" />
                @endif
                <h1 class="sidebar-h1 text-center">{{ ucfirst($agentDetails->first_name) }} {{ ucfirst($agentDetails->last_name) }}
                </h1>
            </a>
            <!--<a href="javascript:void(0)" class="signoutbtn">Sign out</a>-->
        </div>
        <ul class="list-unstyled components">
            <!--<li class="d-flex align-items-center "><img class="img-fluid sidebaricon"-->
            <!--        src="{{ asset('template/assets/img/sidebaricon1.png') }}" /><a-->
            <!--        href="javascript:void(0)"></a></li>-->
            <!--<li class="d-flex align-items-center "><img class="img-fluid sidebaricon"-->
            <!--        src="{{ asset('template/assets/img/sidebaricon2.png') }}" /><a-->
            <!--        href="javascript:void(0)"></a></li>-->
            <!--<li class="d-flex align-items-center "><img class="img-fluid sidebaricon"-->
            <!--        src="{{ asset('template/assets/img/sidebaricon3.png') }}" /><a href="javascriptL:void(0)"></a></li>-->
            <li class="d-flex align-items-center" style="border: unset !important;">
                <!--<img class="img-fluid sidebaricon" src="{{ asset('template/assets/img/referalimg.png') }}" />-->
                <a href="javascript:void(0)" class="" style="color: white !important;" id="show-pdf-link">Agent Referral Agreement </a>
            </li>

        </ul>
    </nav>
</div>


<div class="offcanvas offcanvas-start bg-white" tabindex="-1" id="offcanvasExample1" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
      <a class="navbar-brand p-0 m" href="javascript:void(0)">
                <img src="{{ asset('common/sidebarlogo.png') }}" style="width : 160px" class="img-fluid sidebar-logo d-flex mx-auto"
                    alt="logo">
            </a>
    <button type="button" class="btn-close closethebtn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="d-flex flex-column align-items-center justify-content-center mt-4">
            <a href="javascript:void(0)" class="d-flex align-items-center justify-content-center flex-column">
                @if ($agentDetails->profile_picture != null)
                    <img style="max-height: 8rem;" id="imagePreview1"
                        src="{{ asset('template/assets/Profiles/Profile-Pictures/' . $agentDetails->profile_picture) }}"
                        class="img-fluid rounded-circle" alt="Image Preview" />
                @else
                    <img style="max-height: 8rem;" id="imagePreview1"
                        src="{{ asset('template/assets/img/sidebarimg.png') }}" class="img-fluid rounded-circle"
                        alt="Image Preview" />
                @endif
                <h1 class="sidebar-h1">{{ ucfirst($agentDetails->first_name) }} {{ ucfirst($agentDetails->last_name) }}
                </h1>
            </a>
            <a href="javascript:void(0)" class="signoutbtn">Sign out</a>
        </div>
        <ul class="list-unstyled components">
            <li class="d-flex align-items-center "><img class="img-fluid sidebaricon"
                    src="{{ asset('template/assets/img/sidebaricon1.png') }}" /><a
                    href="javascript:void(0)">Dashboard</a></li>
            <li class="d-flex align-items-center "><img class="img-fluid sidebaricon"
                    src="{{ asset('template/assets/img/sidebaricon2.png') }}" /><a
                    href="javascript:void(0)">Referral Leads</a></li>
            <li class="d-flex align-items-center "><img class="img-fluid sidebaricon"
                    src="{{ asset('template/assets/img/sidebaricon3.png') }}" /><a href="javascript:void(0)">My
                    Profile</a></li>
            <li class="d-flex align-items-center">
                <img class="img-fluid sidebaricon" src="{{ asset('template/assets/img/referalimg.png') }}" />
                <a href="javascript:void(0)" id="show-pdf-link">Agent Referral Agreement </a>
            </li>

        </ul>
  </div>
</div>



<!--<script>-->
<!--    document.addEventListener("DOMContentLoaded", () => {-->
<!--        let sidebar = document.querySelector("#sidebar");-->
<!--        let sidebarBtn = document.querySelector(".fa-bars");-->

<!--        sidebarBtn.addEventListener("click", () => {-->
<!--            console.log("worked")-->
<!--            sidebar.classList.toggle("active");-->
<!--        });-->
<!--    });-->


<!--</script>-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
