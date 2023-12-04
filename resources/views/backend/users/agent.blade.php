@extends('layouts.master')


@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between mb-4">
        <h5>Agent List</h5>
        <div>
            <a href="{{ route('agent_create') }}" class="btn btn-sm btn-primary">Create</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=>$user)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone ?? "-" }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->user->name }}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
