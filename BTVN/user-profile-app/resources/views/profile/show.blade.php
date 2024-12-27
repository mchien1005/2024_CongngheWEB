@extends('layouts.app')
@section('content')
@php
$user = is_object($user) ? $user : json_decode($user);
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name }}'s Profile</div>
                <div class="card-body">
                    @if($user->avatar)
                    <img src="{{ Storage::url($user->avatar) }}" alt="Avatar"
                        style="width: 150px; height: 150px; border-radius: 50%;">
                    @else
                    <p>No avatar set.</p>
                    @endif
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Bio:</strong> {{ $user->bio }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection