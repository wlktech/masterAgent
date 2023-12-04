@extends('layouts.master')


@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between mb-4">
        <h5>User Register Form</h5>
    </div>
    <form action="{{ route('user_create') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control">
                    @error('name')
                    <span class="d-block text-danger">*{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control">
                    @error('email')
                    <span class="d-block text-danger">*{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control">
                    @error('password')
                    <span class="d-block text-danger">*{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" id="cpassword" name="password_confirmation" placeholder="Enter Confirm Password" class="form-control">
                    @error('password')
                    <span class="d-block text-danger">*{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-outline-dark mr-2" type="reset">Reset</button>
            <button class="btn btn-dark" type="submit">Register</button>
        </div>
    </form>
</div>
@endsection
