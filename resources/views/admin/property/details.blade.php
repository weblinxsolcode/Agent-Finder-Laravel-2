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
                            <a href="{{ route('admin.property.reports') }}">
                                Property Report Management
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ $title ?? '' }}
                        </li>
                    </ul>
                </div>
                <a href="{{ route('admin.property.reports') }}" class="btn btn-primary btn-lg btn-rounded">
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
                        <ul class="list-unstyled mb-0">
                            <li>Property Report Date: <span>{{ $item->created_at->format('d-M-Y') }}</span></li>
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
                        <li>{{ $item->phone }}</li>
                        <li>
                            <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 ">
                    <h6>Report Info.</h6>
                    <ul class="list-unstyled mb-0">
                        <li>
                            Own Property:
                            <strong>
                                {{ ucfirst($item->own_property ?? 'Property Type') }}
                            </strong>
                        </li>
                        <li>
                            Selling Status:
                            <strong>
                                {{ ucfirst($item->selling_status ?? 'Property Type') }}
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
