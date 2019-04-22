@foreach ($errors->all() as $error)
{{ $error }}
@endforeach

@if(session('Status'))
<div class="alert alert-success">{{session('Status')}}</div>
@endif