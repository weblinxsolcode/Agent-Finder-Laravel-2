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
                <div class="col-sm-12">
                    <div class="card customShadow">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">
                                    Agent Count: <span class="text-primary">{{ $list->count() }}</span>
                                </h3>
                                <a href="{{ route('admin.add.agent') }}" class="btn btn-primary btn-rounded">
                                    <i class="fa-solid fa-circle-plus"></i>
                                    Add Agent
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Agency</th>
                                                <th>Reg. Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="{{ route('admin.agent.profile', ['id' => $item->id]) }}"
                                                                class="avatar avatar-sm me-2">
                                                                <img class="avatar-img rounded-circle"
                                                                    src="{{ $item->profile_picture == null ? asset('template/assets/img/agencylogo.png') : asset('template/assets/Profiles/Profile-Pictures/' . $item->profile_picture) }}"
                                                                    alt="User Image">
                                                            </a>
                                                            <a
                                                                href="{{ route('admin.agent.profile', ['id' => $item->id]) }}">
                                                                {{ ucfirst($item->first_name) . ' ' . ucfirst($item->last_name) }}
                                                            </a>
                                                        </h2>

                                                    </td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->phone_number }}</td>
                                                    <td>{{ ucfirst($item->agency_name) }}</td>
                                                    <td>{{ $item->created_at->format('d M Y ') }}</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-{{ $item->status == 3 ? 'danger' : ($item->status == false ? 'warning' : 'success') }}">
                                                            {{ $item->status == 3 ? 'Blocked' : ($item->status == false ? 'Pending' : 'Approved') }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.template.profile', ['id' => $item->id]) }}"
                                                            class="btn btn-sm btn-rounded btn-primary" target="_blank">
                                                            <i class="fa-regular fa-eye"></i>
                                                            View Profile
                                                        </a>
                                                        <a href="{{ route('admin.view.agreement', ['id' => $item->id]) }}" class="btn btn-info btn-sm btn-rounded text-white">
                                                            <i class="fa-solid fa-file-contract"></i>
                                                            Agreement
                                                        </a>
                                                        <a href="{{ route('admin.agent.profile', ['id' => $item->id]) }}"
                                                            class="btn btn-sm btn-rounded btn-primary">
                                                            <i class="fa-solid fa-circle-user"></i>
                                                            Profile
                                                        </a>
                                                        <a href="{{ route('admin.edit.agent', ['id' => $item->id]) }}" class="btn btn-sm btn-rounded btn-success">
                                                            <i class="fa-solid fa-pen"></i>
                                                            Edit
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-info btn-sm btn-rounded text-white"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#updateStatus{{ $item->id }}">
                                                            <i class="fa-solid fa-toggle-on"></i>
                                                            Update Status
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-rounded btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete{{ $item->id }}">
                                                            <i class="fa-regular fa-trash-can"></i>
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>

                                                {{-- This modal is working for deletion of agent --}}
                                                <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-danger">
                                                                <h1 class="modal-title fs-5 text-white"
                                                                    id="exampleModalLabel">
                                                                    {{ ucfirst($item->first_name) . ' ' . ucfirst($item->last_name) }}
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
                                                                            Are you sure you want to delete this agent?
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary btn-rounded"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <a href="{{ route('admin.delete.agent', ['id' => $item->id]) }}"
                                                                    class="btn btn-danger btn-rounded">
                                                                    Yes, Delete
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- End Modal --}}

                                                {{-- This modal is working for updating the status of agent --}}
                                                <div class="modal fade" id="updateStatus{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                                <h1 class="modal-title text-white fs-5"
                                                                    id="exampleModalLabel">
                                                                    {{ $item->first_name ?? 'First Name' }}
                                                                    {{ $item->last_name ?? 'Last Name' }}
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form
                                                                action="{{ route('admin.update.status.agent', ['id' => $item->id]) }}"
                                                                method="post">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="">Select Status</label>
                                                                        <select name="status" id=""
                                                                            class="form-control" required>
                                                                            <option value="1">Approved</option>
                                                                            <option value="2">Pending</option>
                                                                            <option value="3">Blocked</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Yes, Update
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
