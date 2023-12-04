@extends('user_layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 offset-lg-4 offset-md-3 offset-md-2">
            <h3 class="text-center">LOGIN</h3>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    @error('email')
                    <span class="d-block text-danger">*{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    @error('password')
                    <span class="d-block text-danger">*{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button class="btn btn-dark" type="reset">Reset</button>
                    <button class="btn btn-outline-dark" type="submit">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
