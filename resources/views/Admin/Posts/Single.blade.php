@extends('layouts.app')

@section('content')

<?php 

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$Post->title}}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
					@endif
					
					<h3>{{$Post->title}}</a> <span class="badge badge-primary">{{$Post->category->name}}</span></h3>	
						<p>{{$Post->content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection