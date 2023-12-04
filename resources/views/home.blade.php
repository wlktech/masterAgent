@extends('user_layouts.master')

@section('content')
<div class="container py-5 bg-dark text-white text-center">
    <h2 class="mb-5">Welcome To Master Agent</h2>
    <a href="{{ route('login') }}" class="btn btn-outline-light">LOGIN</a>
</div>
@endsection
