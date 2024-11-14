@extends('template.layout.main')

@section('section')
    <div class="d-flex flex-column flex-lg-row  justify-content-center">
        @include('template.layout.sidebar')
        <div class="dashboardbg w-100">
            <div class="dashboard">
                <h1 class="dashboard-h1">Opportunities</h1>
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Search...">
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                </div>

                @foreach ($list as $item)
                    <div class="{{ $loop->iteration == 1 ? '' : 'mt-4' }} property-card">
                        <!-- Added class 'property-card' -->
                        <div class="opporbox1 py-4">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <img src="{{ asset('template/assets/img/dashboardimg3black.png') }}"
                                    class="img-fluid img3" style="width : 18px"; />
                                    <p class="mb-0">Homeowner Details <span
                                            class="fw-bold code-value">{{ $item->leadInfo->code ?? 'Property ID' }}</span>
                                    </p>
                                    <p class="mb-0">{{ $item->created_at->format('M d, Y') }}({{ $item->created_at->format("g:i A") }})</p>
                                </div>
                                <div class="d-none">
                                    <p class="text-center mb-2">Status</p>
                                    <select name="" id="">
                                        <option value="" selected="">Viewed</option>
                                        <option value="">Viewed</option>
                                        <option value="">Viewed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div>
                                    <h1 class="sidebar-h1" style="font-size : 19px;">{{ $item->leadInfo->first_name ?? 'First Name' }}
                                        {{ $item->leadInfo->last_name }}</h1>
                                    <ul class="p-0 mb-0">
                                        <li class="nav-item mb-1">
                                            <a href="tel:{{ $item->leadInfo->phone_number }}" class="m-0 p-0 fw-semibold">
                                                <i
                                                    class="fa-solid fa-phone me-2"></i>{{ $item->leadInfo->phone ?? 'Phone Number' }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="mailto:{{ $item->leadInfo->email }}"
                                                class="m-0 p-0 d-flex fw-semibold">
                                                <i
                                                    class="fa-solid fa-envelope me-2 mt-1"></i>{{ $item->leadInfo->email ?? 'Lead Email' }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h1 style="font-size : 19px;" class="sidebar-h1 text-start text-md-center">
                                        {{ $item->leadInfo->address ?? 'Address' }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="opporbox2">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex flex-wrap align-items-center gap-md-5 gap-2">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('template/assets/img/dashboardimg1.png') }}"
                                            class="img-fluid img1" />
                                        <p class="m-0 text-white fw-lighter">{{ $item->leadInfo->purpose ?? 'Purpose' }}
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('template/assets/img/dashboardimg2.png') }}"
                                            class="img-fluid img2" />
                                        <p class="m-0 text-white fw-lighter">{{ $item->leadInfo->type ?? 'Type' }}</p>
                                    </div>
                                    @if ($item->leadInfo->bedroom != null)
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('template/assets/img/dashboardimg3.png') }}"
                                                class="img-fluid img3" />
                                            <!--<h4 class="text-white m-0 fw-bold">{{ $item->leadInfo->bedroom }}</h4>-->
                                            <p class="m-0 text-white fw-lighter">{{ $item->leadInfo->bedroom }}</p>
                                            <!--<p class="m-0 text-white fw-lighter">Bedrooms</p>-->
                                        </div>
                                    @endif
                                </div>
                                <div class="">
                                    <a  href="{{ route('lead.info', ['id' => $item->leadInfo->id]) }}">
                                        <button class="viewdetailsbtn mt-3 mt-md-0 ">View Details</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- This script is working for search algorithm --}}
    <script>
        $(document).ready(function() {
            // Listen to the search input field
            $('.search-input').on('input', function() {
                var searchTerm = $(this).val().toLowerCase().trim();

                // Iterate over each property card
                $('.property-card').each(function() {
                    var codeValue = $(this).find('.code-value').text().toLowerCase().trim();

                    // Check if the code contains the search term
                    if (codeValue.includes(searchTerm)) {
                        $(this).show(); // Show the card if it matches the search
                    } else {
                        $(this).hide(); // Hide the card if it doesn't match
                    }
                });
            });
        });
    </script>

    {{-- End Script --}}
@endsection
