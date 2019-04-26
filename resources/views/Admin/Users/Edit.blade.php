@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User</div>

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

					<form action="" method="post">
						@csrf
						<div class="form-group">
							<input type="text" value="{{$User->name}}" name="Name" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
								<input type="email" value="{{$User->email}}" name="Email" class="form-control" placeholder="Email">
							</div>
						<div class="form-group">
							<select name="Role[]" class="form-control">
								@foreach ($Roles as $Role)
								<option value="{{ $Role->name }}" @if(in_array($Role->name, $SelectedRoles)) selected @endif >{{ $Role->name }}</option>							
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
						<div class="form-group">
								<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
						</div>
						
						<button type="submit" class="btn btn-primary">Submit</button>

					</form>

					

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
