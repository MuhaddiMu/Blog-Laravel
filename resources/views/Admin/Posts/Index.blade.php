@section('Title', 'Blog Posts')
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
                    <h3><a href="/Blog/{{$Post->slug}}">{{$Post->title}}</a> <span class="badge badge-primary">{{$Post->category->name}}</span></h3>
                    <a href="/admin/Posts/{{$Post->slug}}/edit"><h5>Edit Post</h5></a>
						<p class="PostContent">{!! str_limit($Post->content, 300) !!}</p>
						<hr>
					@endforeach
					
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var PostContent = $(".PostContent").html();
    PostContent = PostContent.replace(/\n/g,"<br>");
    $(".PostContent").html(PostContent);
</script>


@endsection