@extends('layouts.app')
{{app()->setLocale('en')}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <H2 class="text-center">{{ __('main.LoginMsg') }}</H2>
                    <h2><a href="/Blog">Blog Posts</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
