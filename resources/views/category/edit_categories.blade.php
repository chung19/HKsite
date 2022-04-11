@extends('backend.layout')
@section('content')

<div class="add__categorypost">
        <h2>{{$Title}} | Category</h2>

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

        <form action="{{route('update-category-post')}}" method="post" class="form__add__categorypost">
            <input type="hidden" name="id" value= "{{ $Info ->category_id }}">
            @csrf
            <label for="Id">
                Id:
                <!-- <div>{{ $Info ->category_id }}</div> -->
                <input type="text" name="category_id" value="{{ $Info ->category_id }}"><br>
                <span style="color:red;">@error('category_id'){{ $message }} @enderror</span>
            </label><br><br>
            <label for="Name">
                <div class="nameRow">Name:</div>
                <input type="text" name="category_name" value="{{ $Info ->category_name }}"><br>
                <span style="color:red;">@error('category_name'){{ $message }} @enderror</span>
            </label><br><br>
            <button type="submit">Update</button>
        </form>

        <br>

    </div>

@endsection


