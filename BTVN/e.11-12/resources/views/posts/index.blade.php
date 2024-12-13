     @extends('layouts.app')

     @section('title', 'Post')

     @section('content')
     <div class="table-responsive">
         <div class="table-wrapper">
             <div class="table-title">
                 <div class="row">
                     <div class="col-sm-6">
                         <h2>Manage <b>Posts</b></h2>
                     </div>
                     <div class="col-sm-6">
                         <a href={{route('posts.create') }} class="btn btn-success"><i
                                 class="material-icons">&#xE147;</i> <span>Add Post</span></a>
                         <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                 class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->
                     </div>
                 </div>
             </div>
             <table class="table table-striped table-hover">
                 <thead>
                     <tr>
                         <th>
                             <span class="custom-checkbox">
                                 <input type="checkbox" id="selectAll">
                                 <label for="selectAll"></label>
                             </span>
                         </th>
                         <th>Title</th>
                         <th>Content</th>
                         <th>Actions</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($posts as $post)
                     <tr>
                         <td>
                             <span class="custom-checkbox">
                                 <input type="checkbox" id="checkbox{{ $loop->index }}" name="options[]"
                                     value="{{ $post->id }}">
                                 <label for="checkbox{{ $loop->index }}"></label>
                             </span>
                         </td>
                         <td>{{ $post->title }}</td>
                         <td>{{ $post->content }}</td>
                         <td>
                             <a href=" {{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm"><i
                                     class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                             <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                                 @csrf
                                 @method('DELETE')
                                 <!-- <a type="submit" class="delete"><i class="material-icons" data-toggle="tooltip"
                                         title="Delete">&#xE872;</i></a> -->
                                 <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons"
                                         data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                             </form>
                             <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm"
                                 data-toggle="tooltip" title="Xem chi tiết">
                                 <i class="fa fa-eye"></i>
                             </a>

                         </td>
                     </tr>
                     @endforeach
                 </tbody>
             </table>
             <div class="clearfix">
                 <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                 <ul class="pagination">
                     <li class="page-item disabled"><a href="#">Previous</a></li>
                     <li class="page-item"><a href="#" class="page-link">1</a></li>
                     <li class="page-item"><a href="#" class="page-link">2</a></li>
                     <li class="page-item active"><a href="#" class="page-link">3</a></li>
                     <li class="page-item"><a href="#" class="page-link">4</a></li>
                     <li class="page-item"><a href="#" class="page-link">5</a></li>
                     <li class="page-item"><a href="#" class="page-link">Next</a></li>
                 </ul>
             </div>
         </div>
     </div>
     </div>
     @endsection