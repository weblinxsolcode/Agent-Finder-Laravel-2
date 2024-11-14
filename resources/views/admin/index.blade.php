@extends('admin.layouts.main')

@section('section')
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome Admin!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card customShadow">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-primary border-primary">
                                    <i class="fa-solid fa-user-secret"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $agents->count() }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Agents</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card customShadow">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-success">
                                    <i class="fa-solid fa-list"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $leads->count() }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Leads</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card customShadow">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-danger border-danger">
                                    <i class="fa-solid fa-circle-check"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $leads->where("assignInfo", '!=', null)->count() }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Assigned Leads</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card customShadow">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-warning border-warning">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $leads->where("assignInfo", '==', null)->count() }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Unassigned Leads</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12 col-lg-6">

                    <!-- Sales Chart -->
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Revenue</h4>
                        </div>
                        <div class="card-body">
                            <div id="morrisArea"></div>
                        </div>
                    </div>
                    <!-- /Sales Chart -->

                </div>
                <div class="col-md-12 col-lg-6">

                    <!-- Invoice Chart -->
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Status</h4>
                        </div>
                        <div class="card-body">
                            <div id="morrisLine"></div>
                        </div>
                    </div>
                    <!-- /Invoice Chart -->

                </div>
            </div> --}}
        </div>
    </div>
@endsection
