@extends('layouts.app')

@section('content')
<div class="card-body">
    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{session('status')}}
    </div>
    @endif
{{__('You are logged in!')}}
<table class="table table-responsive">
    <tr><th>>Username</th><th>:</th><td>{}</td></tr>
    <tr><th>>Name</th><th>:</th><td>{}</td></tr>
    <tr><th>>Email</th><th>:</th><td>{}</td></tr>
    <tr><th>>Created At</th><th>:</th><td>{}</td></tr>
</table>
</div>
@endsection