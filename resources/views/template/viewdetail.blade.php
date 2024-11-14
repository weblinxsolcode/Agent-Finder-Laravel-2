@extends('template.layout.main')

@section('section')
<div class="d-flex flex-column flex-lg-row  justify-content-center">
    @include('template.layout.sidebar')
    <div class="dashboardbg w-100">
        <div class="dashboard">
            <h1 class="dashboard-h1">Opportunities</h1>
            <h1 class="dashboard-h1 border-0 p-0 mt-5" style="color : #8EC2BA">
                Homeowner Details
                {{ $info->code ?? 'Property ID' }}
            </h1>


            <!--box 1-->
            <div class="opporbox1 mt-4" style="border-radius : 15px">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <h1 class="sidebar-h1">{{ $info->first_name ?? 'First Name' }}
                            {{ $info->last_name ?? 'Last Name' }}</h1>
                        <ul class="p-0">
                            <li class="nav-item mb-1">
                                <a href="tel:{{ $info->phone }}" class="m-0 p-0 fw-semibold">
                                    <i class="fa-solid fa-phone me-2"></i>{{ $info->phone }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="mailto:{{ $info->email }}" class="m-0 p-0 d-flex fw-semibold">
                                    <i class="fa-solid fa-envelope me-2 mt-1"></i>{{ $info->email ?? 'Lead Email' }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="tel:{{ $info->phone }}" class="m-0 p-0 fw-semibold">
                            <button class="callbtn" ><img src="{{ asset('template/assets/img/tele.png') }}" alt="" class="me-2 mb-0" style="width : 13px"><span>Make a call</span></button>
                        </a>
                        <p class="mb-0 text-center mt-1">{{ $info->assignInfo->created_at->format('') }}</p>
                    </div>
                    <div>
                        <img src="{{ $info->assignInfo->agentInfo->profile_picture == null ? asset('common/camera.png') : asset('template/assets/Profiles/Profile-Pictures/' . $info->assignInfo->agentInfo->profile_picture) }}" class="img-fluid rounded-circle" />
                    </div>
                </div>
            </div>
            <div class="d-flex flex-md-row flex-column align-items-center gap-4 mt-4">
                <div class="opporbox3 " style="border-radius : 15px">
                    <p class="mb-0">Customer wants to Sell and Buy? </p>
                    <h1 class="sidebar-h1" style="font-size: 20px !important;">{{ $info->purpose ?? 'Purpose' }}</h1>
                </div>
                <div class="opporbox3" style="border-radius : 15px">
                    <p class="mb-0">Type of property </p>
                    <h1 class="sidebar-h1" style="font-size: 20px !important;">{{ $info->type ?? 'Type' }}</h1>
                </div>
            </div>
            <div class="d-flex flex-md-row flex-column align-items-center gap-4 mt-4">
                <div class="opporbox3" style="border-radius : 15px">
                    <!--<p class="mb-0"> How soon customer want to sell </p>-->
                    <p class="mb-0"> Listing timeframe </p>
                    <h1 class="sidebar-h1" style="font-size: 20px !important;">
                        {{ ucfirst($info->duration ?? "Duration") }}
                    </h1>
                </div>
                <div class="opporbox3 " style="border-radius : 15px">
                    <!--<p class="mb-0"> Unit address for sell</p>-->
                    <p class="mb-0">Property address for sale</p>
                    <h1 class="sidebar-h1" style="font-size: 20px !important;">
                        {{ $info->address ?? 'Address' }}
                    </h1>

                </div>
            </div>

            <form action="{{ route('upload.user.agreement', ['id' => $info->assignInfo->id]) }}" id="formSubmit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-md-3 gap-1 mt-5">
                    <button type="button" class="cashbackbtn px-4" style="background-color: #2E353C; color: #8EC2BA;" id="uploadBtn">Upload Agency Agreement</button>
                    <p id="fileInfo"></p>
                    <img id="previewImage" style=" display: none;" alt="Preview" />
                    @if ($info->assignInfo->agreement != null)
                    <a href="{{ asset('leadDocs/'.$info->assignInfo->agreement) }}" target="_blank">
                        <button type="button" class="cashbackbtn px-4">Download Agency Agreement</button>
                    </a>
                    @endif
                </div>
                <input type="file" name="file" id="fileInput" style="display: none;" accept="application/pdf, application/docx" />
            </form>


            <!--<div class="d-flex justify-content-center align-items-center gap-3 mt-3">-->
            <!--    <a href="{{ asset('leadDocs/'.$info->assignInfo->agreement) }}" download="">-->
            <!--        <button type="button" class="updatedocbtn fw-bold ">Download Agency Agreement</button>-->
            <!--    </a>-->
            <!--</div>-->

        </div>
    </div>
</div>

<script>
    document.getElementById('uploadBtn').addEventListener('click', function() {
        document.getElementById('fileInput').click();
    });

    var form = $("#formSubmit");

    document.getElementById('fileInput').addEventListener('change', function() {
        const file = this.files[0];
        const fileInfo = document.getElementById('fileInfo');
        const previewImage = document.getElementById('previewImage');

        if (!file) {
            fileInfo.textContent = 'No file selected.';
            previewImage.style.display = 'none';
            return;
        }

        form[0].submit();
    });

</script>
@endsection
