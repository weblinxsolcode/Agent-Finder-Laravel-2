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
                                Import Leads
                            </h3>
                            <a href="{{ asset('common/import-leads.xlsx') }}" class="btn btn-primary btn-rounded" download>
                                <i class="fa-solid fa-file-import"></i>
                                Download Template
                            </a>
                        </div>
                    </div>
                    <form action="{{ route('admin.import.lead') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Import File (Only Excel Template)</label>
                                <input type="file" name="file" accept=".xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" id="file" class="form-control" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-rounded">
                                    <i class="fa-solid fa-file-import"></i>
                                    Import
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card customShadow">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">
                                Lead Count: <span class="text-primary">{{ $list->count() }}</span>
                            </h3>
                            <a href="{{ route('admin.add.lead') }}" class="btn btn-primary btn-rounded">
                                <i class="fa-solid fa-circle-plus"></i>
                                Add Lead
                            </a>
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
                                            <td>
                                                {{ \Illuminate\Support\Str::limit($item->address, 30, $end = '...') }}
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
                                                <a href="{{ route('admin.lead.details', ['id' => $item->id]) }}" class="btn btn-primary btn-rounded btn-sm">
                                                    <i class="fa-solid fa-eye"></i>
                                                    View
                                                </a>
                                                <a href="{{ route('admin.edit.lead', ['id' => $item->id]) }}" class="btn btn-success btn-rounded btn-sm">
                                                    <i class="fa-solid fa-pen"></i>
                                                    Edit
                                                </a>
                                                <button type="button" class="btn btn-danger btn-rounded btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>

                                        {{-- Modal For Deletion Of Lead --}}
                                        <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                                                            {{ $item->code }}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="text-center">
                                                            <i class="fa-solid fa-circle-exclamation text-danger my-3" style="font-size: 50px;"></i>
                                                            <div class="text-center">
                                                                <p class="text-danger">
                                                                    Are you sure you want to delete this lead?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-rounded btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('admin.delete.lead', ['id' => $item->id]) }}" class="btn btn-danger btn-rounded">
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
