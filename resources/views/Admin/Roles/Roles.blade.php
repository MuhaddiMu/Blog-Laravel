@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Roles</div>

                <div class="card-body">

					@if ($Roles->isEmpty())
						<p>There are no Users</p>

					@else

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
							</tr>
						</thead>

						@foreach ($Roles as $Role)
							<tr>
								<th>{{$Role->id}}</th>
								<th>{{$Role->name}}</th>
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
