@extends('admin.layouts.main')

@section('section')

<style>
    .modal-body {
        height: 400px !important;
        overflow-y: scroll !important;
    }

</style>

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">{{ $title ?? '' }}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ $title ?? '' }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">

            <div class="col-lg-12">
                <div class="card customShadow">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">
                                Lead Count: <span class="text-primary">{{ $list->count() }}</span>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Lead ID</th>
                                            <th>User</th>
                                            <th>Bedroom</th>
                                            <th>Purpose</th>
                                            <th>Type</th>
                                            <th>Duration</th>
                                            <th>Address</th>
                                            <th>Date & Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list as $key => $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->code }}</td>
                                            <td>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        {{ $item->first_name ?? 'First Name' }}
                                                        {{ $item->last_name ?? 'Last Name' }}
                                                    </li>
                                                    <li>
                                                        {{ $item->email }}
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>{{ ucfirst($item->bedroom ?? "-") }}</td>
                                            <td>{{ ucfirst($item->purpose) }}</td>
                                            <td>{{ ucfirst($item->type) }}</td>
                                            <td>
                                                {{ $item->duration ?? "Duration" }}
                                            </td>
                                            <td>{{ \Illuminate\Support\Str::limit($item->address, 30, $end = '...') }}
                                            </td>
                                            <td>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <span class="fw-bold">{{ $item->created_at->format("g:i A") }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-bold">{{ $item->created_at->format("M d, Y") }}</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-rounded btn-sm text-white" data-bs-toggle="modal" data-bs-target="#assignLead{{ $item->id }}">
                                                    <i class="fa-regular fa-square-check"></i>
                                                    Assing Lead
                                                </button>
                                            </td>
                                        </tr>

                                        {{-- Modal For Deletion Of Lead --}}
                                        <div class="modal fade" id="assignLead{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-info">
                                                        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                                                            {{ $item->code }}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('admin.assign.agent.lead', ['id' => $item->id]) }}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            @foreach ($agents as $agent)
                                                            <div class="profile-header customShadow my-2" for="flexRadioDefault1">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto profile-image">
                                                                        <a href="#">
                                                                            <img class="rounded-circle" alt="User Image" style="width: 100px !important;" src="{{ $agent->profile_picture == null ? asset('common/logo.png') : asset('template/assets/Profiles/Profile-Pictures/' . $agent->profile_picture) }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col ml-md-n2 profile-user-info" for="flexRadioDefault1">
                                                                        <h4 class="user-name mb-0">
                                                                            {{ $agent->first_name ?? 'First Name' }}
                                                                            {{ $agent->last_name ?? 'Last Name' }}
                                                                        </h4>
                                                                        <h6 class="text-muted">
                                                                            {{ $agent->email ?? 'Email Address' }}
                                                                        </h6>
                                                                        <div class="user-Location">
                                                                            <i class="fa-solid fa-location-dot"></i>
                                                                            {{ $agent->phone_number ?? 'Phone Number' }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto profile-btn">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="agent_id" id="flexRadioDefault1" value="{{ $agent->id }}" {{ $loop->iteration == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-rounded btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-info btn-rounded">
                                                                Yes, Assign
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End Modal --}}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->
@endsection
