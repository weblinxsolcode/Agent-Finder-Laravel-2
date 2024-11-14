@extends('template.layout.main')

@php
    $agentDetails = App\Models\Agents::find(session('agent_id'));
@endphp


@section('section')
<div class="d-flex flex-column flex-lg-row ">
    @include('template.layout.sidebar')
    <div class="dashboardbg">
        <div class="dashboard">
            <h1 class="dashboard-h1">Dashboard</h1>
            <div class="dashboardsec1">
                <div class="d-flex align-items-center gap-4 flex-column flex-md-row">
                    <div>
                        <h1 class="dashboard-h1 border-0 p-0" style="color : #8EC2BA">Welcome To Your Portal</h1>
                        <!-- <p>Your portal allows you to track your performance and build your brand with ease! Take
                            advantage of brand new features and gain more insight into what homeowners thinks.</p> -->
                        <p>Your portal makes it easy to monitor your performance and strengthen your brand! Make the
                            most of this Elite Agents Platform, which connects you with motivated homeowners ready to
                            sell.</p>
                    </div>
                    <div>
                        <a href="tel:1300 344 148">
                            <button class="callbtn"><img src="{{ asset('template/assets/img/tele.png') }}" alt=""
                            class="me-2 mb-1" style="width : 13px"><span class="">Call Agent Choice</span></button>
                        </a>
                    </div>
                </div>
                <div class="d-flex row justify-content-between gap-5 mt-5 mx-0 p-0">
                    <!-- First column -->
                    <div class="salesbox col-md-6 mb-4 mb-md-0">
                        <h2 class="sidebar-h1">Your Referral <br> Summary</h2>
                        <div>
                            <canvas id="myChart" width="400" height="130"></canvas>
                        </div>
                    </div>

                    <!-- Second column -->
                    <div class="salesbox col-md-5 px-5 position-relative">
                        <div class="d-flex align-items-center justify-content-center">
                            @if ($agentDetails->profile_picture != null)
                                <img style="max-height: 8rem;left : 50%" id="imagePreview1"
                                    src="{{ asset('template/assets/Profiles/Profile-Pictures/' . $agentDetails->profile_picture) }}"
                                    class="img-fluid rounded-circle saleboximg editprofileimg " alt="Image Preview" />
                            @else
                                <img style="max-height: 8rem;" id="imagePreview1" src="{{ asset('common/camera.png') }}"
                                    class="img-fluid rounded-circle saleboximg" alt="Image Preview" />
                            @endif

                        </div>
                        <div style="margin : 60px 0px 0px 0px">
                            <h1 class="sidebar-h1 ">{{ ucfirst($agentDetails->first_name) }}
                                {{ ucfirst($agentDetails->last_name) }}
                            </h1>
                            <ul class="p-0">
                                <li class="nav-item mb-2">
                                    <a href="tel:1036548933" class="m-0 p-0">
                                        <i class="fa-solid fa-phone me-2"></i>{{ $agentDetails->phone_number }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="mailto:agent@localtheagentfinder.com" class="m-0 p-0 d-flex">
                                        <i class="fa-solid fa-envelope me-2 mt-2"></i>{{ $agentDetails->email }}
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('profile') }}">
                                <button
                                    class="callbtn d-flex align-items-center justify-content-center w-100 mt-4">Update
                                    Profile</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Choose to connect', 'Listings you won'],
                datasets: [{
                    label: '# of Referrals',
                    data: [1, 3],
                    backgroundColor: [
                        '#8EC2BA', '#2e353c'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,

            }
        });
    });
</script>


<!-- Use only one CDN for Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection