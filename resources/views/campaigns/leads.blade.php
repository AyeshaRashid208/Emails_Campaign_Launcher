@extends('layouts.dashboard')

@section('content')
<div class="main-content">
    <div class="add-user mb-2 ml-2">
        <div class="user-title">
            <h4>Leads</h4>
        </div>
        <div class="user-btn">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Import CSV</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Add Emails Manually</button>
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
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </div>
            @endif
            <div class="card o-hidden mb-4">
                <div class="card-header d-flex align-items-center border-0">
                    <h3 class="w-50 float-left card-title m-0">Add Lead</h3>
                    <div class="dropdown dropleft text-right w-50 float-right">
                        <button class="btn bg-gray-100" id="dropdownMenuButton1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                            <form action="/file-export" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ request()->route('id') }}" name="campaign_id">

                                <input class="dropdown-item" type="submit" value="Export Leads">
                            </form>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="table-responsive">
                        <table class="table text-center" id="user_table">
                            <thead>
                                <tr>

                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($info as $key => $user)
                                <tr>
                                    <td>{{ $user->name }} </td>
                                    <td>{{ $user->email }} </td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE','route' => ['campaigns.destroy', $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
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
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">


                    <h5 class="modal-title" id="exampleModalLabel">Add Email</h5>
                </div>
                <div class="modal-body">
                    <form action="/addmail" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </div>
                        @endif
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <div class="form-group">
                            <strong><label for="formGroupExampleInput">Name</label></strong>
                            <br>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="name">
                        </div>
                        <br>
                        <div class="form-group">
                            <strong><label for="formGroupExampleInput">Email</label></strong>
                            <br>
                            <input type="email" class="form-control" id="formGroupExampleInput" name="email">

                        </div>
                        <input type="hidden" value="{{ request()->route('id') }}" name="campaign_id">
                        <br>

                        <button class="btn btn-primary" type="submit">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">


                    <h5 class="modal-title" id="exampleModalLabel">CSV should have <strong>email</strong> column with valid emails</h5>
                </div>
                <div class="modal-body">
                    <form action="/file-import" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ request()->route('id') }}" name="campaign_id">

                        <div class="input-group mb-3">

                            <input type="file" name="file">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




</div>
@endsection