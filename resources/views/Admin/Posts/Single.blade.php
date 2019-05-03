@extends('layouts.app')

@section('content')

<?php 

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">{{$Post->title}}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @include('layouts/errors')
                        </div>
                    @endif


					
					<h3>{{$Post->title}}</a> <span class="badge badge-primary">{{$Post->category->name}}</span></h3>	
                        <p>{{$Post->content}}</p>
                        
                        <hr>

                        <p><b>Person Says: </b> Comment</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">New Comment</div>

                <div class="card-body">
                    <form action="/Comment" method="POST">

                        @csrf

                        <input type="hidden" name="post_id" value="{{$Post->id}}">

                        <div class="form-row">
                          <div class="col-3">
                            <input type="text" class="form-control" name="Name" placeholder="Name">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" name="Comment" placeholder="Comment">
                          </div>
                          <button type="submit" class="btn btn-primary">Add Comment</button>
                        </div>


                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection