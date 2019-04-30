@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Post</div>

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

					
					<form action="" method="POST" class=""> 

						@csrf
						
						<div class="form-group">
							<label for="Title">Post Title:</label>
							<input type="text" name="Title" id="Title" placeholder="What's on your mind?" class="form-control">
						</div>
						
						<div class="form-group">
							<label for="Content">Post Content:</label>
							<textarea name="Content" id="Content" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        
                        <select name="Category" class="form-control">
                            <option selected disabled>Select Category</option>                                
                            @foreach ($Categories as $Category)
                               <option value="{{$Category->id}}">{{$Category->name}}</option>                                
                            @endforeach

                        </select>

						<button type="submit" class="mt-3 btn btn-primary">Post</button>
						
					</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection