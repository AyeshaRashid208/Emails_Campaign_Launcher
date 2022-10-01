@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="breadcrumb">
        <h1>Launch Campaign</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/send_mail" method="POST" enctype="multipart/form-data">
                        <input type="hidden" value="{{ request()->route('id') }}" name="campaign_id">
                        @csrf
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </div>
                        @endif
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                        </div>
                        @endif


                        <div class="col-md-6 form-group mb-3">
                            <label for="email">Select Email to use</label>
                            <select class="form-control" name="email">
                                @if(!$data->isEmpty())
                                @foreach($data as $d)
                                <option data-id="{{ $d->id }}">{{ $d->email }}</option>
                                @endforeach
                                @else
                                <option data-id="">nothing to select....</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Launch Campaign</button>
                        </div>


                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection