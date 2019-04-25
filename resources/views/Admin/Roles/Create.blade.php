@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User Role</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<form action="" method="post">
						@csrf
						<div class="form-group">
							<input id="Name" type="text" name="Name" class="form-control" placeholder="Name">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>

					</form>

					

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
