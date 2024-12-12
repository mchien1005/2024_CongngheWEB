@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Add a Post</h3>
            <form action="{{ route('posts.store') }}" method="post" id="abcabc">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fa fa-plus"></i> Create Post
                </button>
            </form>
        </div>
    </div>
</div>
@endsection