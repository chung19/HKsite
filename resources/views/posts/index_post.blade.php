@extends('backend.layout')

@section('content')
<div class="add__post">
    <h2>Post</h2>
    <a href="{{ url('add-post') }}" class="btn btn-primary float-end">Add Post</a>
    <br>
    <table class="table__hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Category name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $item)
            <tr>
                <td>{{ $item -> id}}</td>
                <td>{{ $item -> post_title}}</td>
                <td>{{ $item -> post_content}}</td>
                <td>
                    <img src="{{asset('backend/images/'.$item->post_image) }}" alt="Image">
                </td>
                <td>
                    <?php
                    $change = DB::table('categories')
                        ->where('category_id', $item->category_id)
                        ->first();
                    echo $change->category_name
                    ?>
                </td>
                <td>
                    <a href="{{ url('edit-post/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    {{-- <a href="{{ url('delete-post/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                    <form action="{{ url('delete-post/'.$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection