@extends('layouts.dashboard')

@section('content')
<div class="page-content">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Subscribed Users</h4>
            </div>
            <div class="card-body">

                @if($users->count())

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-centered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subscripton</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($users as $user)

                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->subscription()->name }}</td>
                                        <td>$10</td>
                                        <td>{{ $user->subscription()->stripe_status }}</td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-center">No subscribed users found</p>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection