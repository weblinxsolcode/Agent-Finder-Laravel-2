@extends('admin.layouts.main')

@section('section')
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
                                    Contact Leads: <span class="text-primary">{{ $list->count() }}</span>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list as $key => $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>
                                                        <a href="mailto:{{ $item->email }}">
                                                            {{ $item->email }}
                                                        </a>
                                                    </td>
                                                    <td>{{ \Illuminate\Support\Str::limit($item->description, 50, $end='...') }}</td>
                                                    <td>
                                                        {{ $item->created_at->format('d M Y') }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.contact.details', ['id' => $item->id]) }}"
                                                            class="btn btn-primary btn-rounded btn-sm">
                                                            <i class="fa-solid fa-eye"></i>
                                                            View
                                                        </a>
                                                        <button type="button" class="btn btn-danger btn-rounded btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete{{ $item->id }}">
                                                            <i class="fa-regular fa-trash-can"></i>
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>

                                                {{-- Modal For Deletion Of Lead --}}
                                                <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-danger">
                                                                <h1 class="modal-title fs-5 text-white"
                                                                    id="exampleModalLabel">
                                                                    Delete Lead
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    <i class="fa-solid fa-circle-exclamation text-danger my-3"
                                                                        style="font-size: 50px;"></i>
                                                                    <div class="text-center">
                                                                        <p class="text-danger">
                                                                            Are you sure you want to remove this lead?
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-rounded btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <a href="{{ route('admin.delete.contact', ['id' => $item->id]) }}"
                                                                    class="btn btn-danger btn-rounded">
                                                                    Yes, Delete
                                                                </a>
                                                            </div>
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
