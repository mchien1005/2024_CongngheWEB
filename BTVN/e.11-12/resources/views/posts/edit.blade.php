     @extends('layouts.app')

     @section('title', 'Create Post')

     @section('content')
     <div class="container h-100 mt-5">
         <div class="row h-100 justify-content-center align-items-center">
             <div class="col-10 col-md-8 col-lg-6">
                 <h3>Update Post</h3>
                 <form action="{{ route('posts.update', $post->id) }}" method="post">
                     @csrf
                     @method('PUT')
                     <div class="form-group">
                         <label for="title">Title</label><input type="text" class="form-control" id="title" name="title"
                             value="{{ $post->title }}" required>
                     </div>
                     <div class="form-group">
                         <label for="content">Body</label>
                         <textarea class="form-control" id="content" name="content" rows="3"
                             required>{{ $post->content }}</textarea>
                     </div>
                     <button type="submit" class="btn mt-3 btn-primary">Update
                         Post</button>
                 </form>
             </div>
         </div>
     </div>
     @endsection