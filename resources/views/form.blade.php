@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title d-inline">Create Client Form</h4>
                <a href="https://docs.google.com/forms" class="btn btn-primary px-4 d-inline float-right" target="_blank">Create Google Form</a>
            </div>
            <div class="card-body">
                <form action="{{ route('submit.form') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" id="link" name="link" required="" value="{{ auth()->user()->google_form_link }}" placeholder="Create google form and enter link here">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-end">
                            <button type="submit" class="btn btn-primary px-4">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>

@endsection