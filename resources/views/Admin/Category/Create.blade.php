@section('Title', 'Create New Category')
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Category</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @include('layouts/errors')
                        </div>
                    @endif
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<form action="" method="POST">
						@csrf
						<div class="form-group">
							<input id="Name" type="text" name="Name" class="form-control" placeholder="Category" >
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>

					</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
