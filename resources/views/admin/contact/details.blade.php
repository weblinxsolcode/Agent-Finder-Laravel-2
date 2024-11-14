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
                                <a href="{{ route('admin.contact.management') }}">
                                    Contact Management
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                {{ $title ?? '' }}
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('admin.contact.management') }}" class="btn btn-primary btn-lg btn-rounded">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                        Back
                    </a>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">

                <div class="col-lg-12">
                    <div class="card customShadow">
                        <div class="card-header" style="background-color: #8EC2BA;">
                            <div class="d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled d-flex flex-wrap gap-4 text-white">
                                    <li class="me-4">Name: <span class="fw-bold">{{ $item->name }}</span></li>
                                    <li class="me-4">Email: <span class="fw-bold">{{ $item->email }}</span></li>
                                    <li class="me-4">Phone: <span class="fw-bold">{{ $item->phone }}</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body">
                            {{ $item->description }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
