@foreach ($errors->all() as $error)
{{ $error }}
@endforeach

@if(session('status'))
{{session('status')}}
@endif