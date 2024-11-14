@extends('admin.layouts.main')

@section('section')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

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
                            <a href="{{ route('admin.lead.management') }}">
                                Lead Management
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ $title ?? '' }}
                        </li>
                    </ul>
                </div>
                <a href="{{ route('admin.lead.management') }}" class="btn btn-primary btn-lg btn-rounded">
                    <i class="fa-solid fa-circle-arrow-left"></i>
                    Back
                </a>
            </div>
        </div>

        <!-- Invoice Container -->
        <div class="invoice-container customShadow">
            <div class="row">
                <div class="col-sm-6 m-b-20">
                    <img alt="Logo" class="inv-logo img-fluid" src="{{ asset('common/logo.png') }}" />
                </div>
                <div class="col-sm-6 m-b-20">
                    <div class="invoice-details">
                        <h3 class="text-uppercase">
                            Lead: {{ $item->code ?? 'Lead ID' }}
                        </h3>
                        <ul class="list-unstyled mb-0">
                            <li>Lead Date: <span>{{ $item->created_at->format('d-M-Y') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h6>User Info.</h6>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <h5 class="mb-0">
                                <strong>
                                    {{ $item->first_name ?? 'First Name' }} {{ $item->last_name ?? 'last Name' }}
                                </strong>
                            </h5>
                        </li>
                        <li>United States</li>
                        <li>{{ $item->phone }}</li>
                        <li>
                            <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 ">
                    <h6>Lead Info.</h6>
                    <ul class="list-unstyled mb-0">
                        <li>
                            Type:
                            <strong>
                                {{ ucfirst($item->type ?? 'Property Type') }}
                            </strong>
                        </li>
                        <li>
                            Purpose:
                            <strong>
                                {{ ucfirst($item->purpose ?? 'Property Type') }}
                            </strong>
                        </li>
                        <li>
                            Duration:
                            <strong>
                                {{ ucfirst($item->duration ?? 'Duration') }}
                            </strong>
                        </li>
                        <li>
                            Address:
                            <strong>
                                {{ ucfirst($item->address ?? 'Address') }}
                            </strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Invoice Container -->
    </div>
</div>
<!-- /Page Wrapper -->
@endsection
