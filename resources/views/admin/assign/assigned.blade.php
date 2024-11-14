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
                                Assigned Leads: <span class="text-primary">{{ $list->count() }}</span>
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
                                            <th>Agent Info</th>
                                            <th>User</th>
                                            <th>Bedroom</th>
                                            <th>Purpose</th>
                                            <th>Type</th>
                                            <th>Duration</th>
                                            <th>Address</th>
                                            <th>Document</th>
                                            <th>Assign Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list as $key => $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <a href="{{ route('admin.lead.details', ['id' => $item->id]) }}" target="_blank" rel="noopener noreferrer">
                                                    {{ $item->code }}
                                                </a>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{ route('admin.agent.profile', ['id' => $item->assignInfo->agent_id]) }}" target="_blank" class="avatar avatar-sm me-2">
                                                        <img class="avatar-img rounded-circle" src="{{ $item->assignInfo->agentInfo->profile_picture == null ? asset('common/logo.png'):asset('template/assets/Profiles/Profile-Pictures/'.$item->assignInfo->agentInfo->profile_picture) }}" alt="User Image">
                                                    </a>
                                                    <a href="{{ route('admin.agent.profile', ['id' => $item->assignInfo->agent_id]) }}" target="_blank">
                                                        {{ $item->assignInfo->agentInfo->first_name ?? "First Name" }} {{ $item->assignInfo->agentInfo->last_name ?? "Last Name" }}
                                                    </a>
                                                </h2>
                                            </td>
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
                                            <td>{{ \Illuminate\Support\Str::limit($item->address, 50, $end = '...') }}
                                            </td>
                                            <td>
                                                @if ($item->assignInfo->agreement)
                                                <a href="{{ asset("leadDocs/".$item->assignInfo->agreement) }}" download class="fw-bold text-dark btn btn-rounded btn-primary">
                                                    <i class="fa-solid fa-download"></i> Download </a>
                                                @else
                                                <p class="text-center fw-bold text-dark">-</p>
                                                @endif

                                            </td>
                                            <td>
                                                {{ $item->created_at->format('d M Y') }}
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-rounded btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                    Remove Assigning
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
                                                                    Are you sure you want to remove this lead?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-rounded btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('admin.remove.assign', ['id' => $item->assignInfo->id]) }}" class="btn btn-danger btn-rounded">
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
