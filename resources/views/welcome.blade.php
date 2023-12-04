@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        @if (Auth::user()->role == "Master")
        <div class="col-md-3">
            <div class="p-3 border border-1 border-primary rounded-lg text-center">
                <i class="fas fa-users"></i>
                <p class="text-primary my-0">Agents</p>
                <span class="text-primary">{{ $agents->count() }}</span>
            </div>
        </div>
        @elseif(Auth::user()->role == "Agent")
        <div class="col-md-3">
            <div class="p-3 border border-1 border-primary rounded-lg text-center">
                <i class="fas fa-users"></i>
                <p class="text-primary my-0">Users</p>
                <span class="text-primary">{{ $users->count() }}</span>
            </div>
        </div>
        @else
        <div class="col-md-3">
            <div class="p-3 border border-1 border-primary rounded-lg text-center">
                <i class="fas fa-users"></i>
                <p class="text-primary my-0">Admins</p>
                <span class="text-primary">{{ $admins->count() }}</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 border border-1 border-primary rounded-lg text-center">
                <i class="fas fa-users"></i>
                <p class="text-primary my-0">Masters</p>
                <span class="text-primary">{{ $masters->count() }}</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 border border-1 border-primary rounded-lg text-center">
                <i class="fas fa-users"></i>
                <p class="text-primary my-0">Agents</p>
                <span class="text-primary">{{ $agents->count() }}</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 border border-1 border-primary rounded-lg text-center">
                <i class="fas fa-users"></i>
                <p class="text-primary my-0">Users</p>
                <span class="text-primary">{{ $users->count() }}</span>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
