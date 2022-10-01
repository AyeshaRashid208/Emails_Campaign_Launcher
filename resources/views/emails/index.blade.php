@extends('layouts.dashboard')

@section('content')
<div class="main-content">

  <div class="add-user mb-2 ml-2">
    <div class="user-title">
      <h4>Email Accounts</h4>
    </div>
    <div class="user-btn">
      <a href="{{ route('emails.create') }}"> <button type="button" class="btn btn-primary">Add Email</button>
      </a>
    </div>
  </div>
  <div class="separator-breadcrumb border-top"></div>
  <div class="row">
    <div class="col-md-12">
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      <div class="card o-hidden mb-4">
        <div class="card-header d-flex align-items-center border-0">
          <h3 class="w-50 float-left card-title m-0">Emails</h3>

        </div>
        <div>
          <div class="table-responsive">
            <table class="table text-center" id="user_table">

              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $user)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['emails.destroy', $user->id],'style'=>'display:inline']) !!}
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



</div>
@endsection