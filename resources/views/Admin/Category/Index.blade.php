@section('Title', 'Categories')
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">

					@if ($Categories->isEmpty())
						<p>There are no Categories</p>

					@else

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
							</tr>
						</thead>

						@foreach ($Categories as $Category)
							<tr>
								<th>{{$Category->id}}</th>
								<th>{{$Category->name}}</th>
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
