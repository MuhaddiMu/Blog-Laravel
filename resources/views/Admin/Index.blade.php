@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<h4>Manage Users</h4>
					<a href="/admin/Users" class="btn btn-primary">All Users</a>
					<hr>

					<h4>Manage Roles</h4>
					<a href="/admin/Roles" class="btn btn-primary">All Roles</a>
					<a href="/admin/Roles/Create" class="btn btn-primary">Add New Role</a>
					<hr>

					<h4>Manage Posts</h4>
					<a href="/admin/Posts" class="btn btn-primary">All Posts</a>
					<a href="/admin/Posts/Create" class="btn btn-primary">New Post</a>
                    <hr>
                    
                    <h4>Manage Categories</h4>
					<a href="/admin/Categories" class="btn btn-primary">All Categories</a>
					<a href="/admin/Categories/create" class="btn btn-primary">New Category</a>
					<hr>
				  
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
