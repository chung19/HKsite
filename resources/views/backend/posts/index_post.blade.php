@extends('backend.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 mt-2">
        <div class="pull-left">
            <h2>Post List</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('add-post') }}"> Create New Post</a>
        </div>
    </div>
</div>
@if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
        <th>Date</th>
        <th>Category name</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($post as $item)
    <tr>
        <td>{{ $item -> id}}</td>
            <td>{{ $item -> post_title}}</td>
            <td>{{ $item -> post_content}}</td>
            <td>
                <img src="{{asset('backend/images/'.$item->post_image) }}" alt="Image" style="width: 150px; height: auto;">
            </td>
            <td>{{ $item -> post_date}}</td>
            <td>
                <?php
                    $change = DB::table('categories')
                    ->where('id',$item -> category_id)
                    ->first();
                    echo $change -> category_name
                ?>
                
            </td>
        <td>
            <div style="display:flex;">
                <a href="/edit-post/{{ $item->id }}" class="btn btn-primary">Edit</a>
                <form action="{{ url('delete-post/'.$item->id) }}" method="POST" style="margin-bottom:0px;">
                    @csrf
                    @method('DELETE')
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete_{{ $item->id }}">Delete</button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalDelete_{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span>Are yot sure you want to delete post?</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Sure</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </td>
    </tr>
    @endforeach
</table>
<div>{{$post->onEachSide(1)->links()}}</div>


@endsection

