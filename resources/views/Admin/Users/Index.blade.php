@section('Title', 'Users')
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					@if ($Users->isEmpty())
						<p>There are no Users</p>

					@else

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Joined At</th>
							</tr>
						</thead>

						@foreach ($Users as $User)
							<tr>
								<th>{{$User->id}}</th>
								<th><a href="/admin/Roles/{{$User->id }}/Edit" >{{$User->name}}</a></th>
								<th>{{$User->email}}</th>
								<th>{{$User->created_at}}</th>
							</tr>
						@endforeach

					</table>

					@endif

					

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
