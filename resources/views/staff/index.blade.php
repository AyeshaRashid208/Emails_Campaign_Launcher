@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Staff</h4>
                <a href="{{ route('staff.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="card-body">
                @if ($message = session()->get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                @if($staff->count())

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-centered">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($staff as $member)

                                    <tr>
                                        <td>{{ $member->first_name }}</td>
                                        <td>{{ $member->last_name }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td class="text-end">
                                            <div class="dropdown d-inline-block">
                                                <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                    <a class="dropdown-item" href="{{ route('staff.edit', $member) }}">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault();$(this).siblings('form').submit();">Delete</a>
                                                    <form action="{{ route('staff.destroy', $member->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-center">No staff found</p>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection