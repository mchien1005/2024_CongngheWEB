@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2>{{ $post->title }}</h2>
        </div>
        <div class="card-body">
            <p>{{ $post->content }}</p>
        </div>
        <div class="card-footer text-muted">
            Created at: {{ $post->created_at->format('d M Y, H:i') }}
        </div>
    </div>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection