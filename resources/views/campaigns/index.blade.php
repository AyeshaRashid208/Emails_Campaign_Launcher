@extends('layouts.dashboard')

@section('content')
<div class="main-content">
    <div class="add-user mb-2 ml-2">
        <div class="user-title">
            <h4>Campaign</h4>
        </div>
        <div class="user-btn">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new campaign</button>
        </div>

    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="card o-hidden mb-4">

                <div class="card-header d-flex align-items-center border-0">
                    <h3 class="w-50 float-left card-title m-0">Campaigns</h3>
                    <div class="dropdown dropleft text-right w-50 float-right">
                        <button class="btn bg-gray-100" id="dropdownMenuButton1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1"></div>
                    </div>
                </div>

                <div>
                    <div class="table-responsive">
                        <table class="table text-center" id="user_table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($info as $key => $user)
                                <tr>
                                    <th>{{ $user->id}}</th>
                                    <td>{{ $user->name }} </td>
                                    <td>({{$user->created_at->format('d-m-Y')}})</td>

                                    <td>
                                        
                                            <button class="btn bg-gray-100" id="dropdownMenuButton1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href={{"leads/".$user['id']}}>Leads</a>
                                                <a class="dropdown-item" href={{"seq/".$user['id']}}>Sequences</a>
                                                <a class="dropdown-item" href={{"schedule/".$user['id']}}>Schedule</a>
                                                <a class="dropdown-item" href={{"options/".$user['id']}}>Options</a>
                                            </div>
                                        

                                        <a class="text-danger mr-2" href={{"delete/".$user['id']}}><i class="nav-icon i-Close-Window font-weight-bold"></i></a>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Campaign</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('campaign.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




</div>
</div>
@endsection