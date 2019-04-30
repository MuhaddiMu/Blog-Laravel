@extends('layouts.app')

@section('content')

<?php 

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
					@endif
					
					@foreach ($Posts as $Post)
						<h3>{{$Post->title}} <span class="badge badge-primary">{{ CatView($Post->id) }}</span></h3>	
						<p>{{str_limit($Post->content, 300)}}</p>
						<hr>
					@endforeach
					
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection