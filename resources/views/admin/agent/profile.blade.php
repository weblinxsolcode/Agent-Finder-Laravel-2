@extends('admin.layouts.main')

@section('section')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="">
                    <h3 class="page-title">{{ $title ?? '' }}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.agent.management') }}">
                                Agent Management
                            </a>
                        </li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ul>
                </div>
                <a href="{{ route('admin.agent.management') }}" class="btn btn-lg btn-primary btn-rounded">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back
                </a>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-lg-12">
                <div class="profile-header customShadow">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circle" alt="User Image" src="{{ $info->profile_picture == null ?asset('template/assets/img/agencylogo.png') : asset('template/assets/Profiles/Profile-Pictures/' . $info->profile_picture) }}">
                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">
                                    {{ ucfirst($info->first_name) }} {{ $info->last_name }}
                                </h4>
                                <h6 class="text-muted">{{ $info->email ?? 'Email Address' }}</h6>
                                <div class="user-Location">
                                    Phone Number:
                                    <strong>
                                        {{ $info->phone_number ?? 'Phone Number' }}
                                    </strong>
                                </div>
                                <div class="user-Location">
                                    Focused On:
                                    <strong>
                                        {{ $info->focused ?? 'Focused On' }}
                                    </strong>
                                </div>
                                <div class="user-Location">
                                    Registration Date:
                                    <strong>
                                        {{ $info->created_at->format('d M Y') ?? 'Focused On' }}
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circle" alt="User Image" src="{{ $info->agency_logo == null ? asset('template/assets/img/agencylogo.png') : asset('template/assets/Agencies/Agency-logo/' . $info->agency_logo) }}">
                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">
                                    Agency Info.
                                </h4>
                                <div class="user-Location">
                                    Name:
                                    <strong>
                                        {{ $info->agency_name ?? 'Agency Name' }}
                                    </strong>
                                </div>
                                <div class="user-Location">
                                    Address:
                                    <strong>
                                        {{ $info->agenct_address ?? 'Agency Address' }}
                                    </strong>
                                </div>
                                <div class="user-Location">
                                    Code:
                                    <strong>
                                        {{ $info->agenct_code ?? 'Agency Code' }}
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 my-2">
                <div class="card customShadow">
                    <div class="card-header">
                        <h3 class="card-title">
                            Fees & Marketing
                        </h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-around">
                            <li>
                                Comission:
                                <span class="fw-bold">{{ $info->agency_commission ?? "Agency Comission" }}</span>
                            </li>
                            <li>
                                Marketing Budget
                                <span class="fw-bold">
                                    {{ $info->marketting_budget ?? "Agency Marketing Budget" }}
                                </span>
                            </li>
                            <li>
                                Total Sales in 12 months
                                <span class="fw-bold">
                                    {{ $info->sold_in_area ?? "Agency Total Sales in 12 months" }}
                                </span>
                            </li>
                            <li>
                                <div class="">
                                    @php
                                        $explode = json_decode($info->average_sale_price)
                                    @endphp
                                    @if (count($explode) > 0)
                                    @foreach ($explode as $item)
                                    <button class="btn btn-primary btn-sm btn-rounded">
                                        {{ $item }}
                                    </button>
                                    @endforeach
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-3">
                <div class="card customShadow">
                    <div class="card-header">
                        <h3 class="card-title">
                            Assigned Leads: {{ $info->assignedLeads->count() }}
                        </h3>
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
                                            <th>Purpose</th>
                                            <th>Type</th>
                                            <th>Duration</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($info->assignedLeads as $key => $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->leadInfo->code }}</td>
                                            <td>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        {{ $item->leadInfo->first_name ?? 'First Name' }}
                                                        {{ $item->leadInfo->last_name ?? 'Last Name' }}
                                                    </li>
                                                    <li>
                                                        {{ $item->leadInfo->email }}
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>{{ ucfirst($item->leadInfo->purpose) }}</td>
                                            <td>{{ ucfirst($item->leadInfo->type) }}</td>
                                            <td>
                                                {{ ucfirst($item->leadInfo->duration ?? "Duration") }}
                                            </td>
                                            <td>{{ \Illuminate\Support\Str::limit($item->leadInfo->address, 50, $end = '...') }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.lead.details', ['id' => $item->leadInfo->id]) }}" target="_blank" class="btn btn-primary btn-rounded btn-sm">
                                                    <i class="fa-solid fa-eye"></i>
                                                    View
                                                </a>
                                                {{-- <a href="{{ route('admin.edit.lead', ['id' => $item->leadInfo->id]) }}"
                                                class="btn btn-success btn-rounded btn-sm">
                                                <i class="fa-solid fa-pen"></i>
                                                Edit
                                                </a>
                                                <button type="button" class="btn btn-danger btn-rounded btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $item->leadInfo->id }}">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                    Delete
                                                </button> --}}
                                            </td>
                                        </tr>
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
