@extends('backend.layout')

@section('content')
    <div class="add__categorypost">
        <h2>Create Category Post</h2>

        @if(Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
        @endif

        <form action="/add-category-post" method="post" class="form__add__categorypost">
            @csrf
            <label for="Id">
                <div class="nameRow">Id:</div>
                <input type="text" name="category_id" value="{{ old('category_id') }}"><br>
                <span style="color:red;">@error('category_id'){{ $message }} @enderror</span>
            </label><br><br>
            <label for="Name">
                <div class="nameRow">Name:</div>
                <input type="text" name="category_name" value="{{ old('category_name') }}"><br>
                <span style="color:red;">@error('category_name'){{ $message }} @enderror</span>
            </label><br><br>
            <button type="submit">Add</button>
        </form>

        <br>

        <table class="table__hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Post</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                <tr>
                    <td>{{ $item -> category_id}}</td>
                    <td>{{ $item -> category_name}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="/edit-category-post/{{ $item->category_id }}" class="btn-edit">Edit</a>
                            <a href="/delete-category-post/{{ $item->category_id }}" class="btn-delete">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection