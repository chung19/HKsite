@extends('backend.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-2">
        <div class="pull-left">
            <h2>Gallery List</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('gallerys.create') }}"> Create New Gallery</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Images</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($gallerys as $gallery)
    <tr>
        <td>{{ $gallery->id }}</td>
        <td><img src="/images/{{ $gallery->images }}" width="100px"></td>
        <td>
            <form action="{{ route('gallerys.destroy',$gallery->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('gallerys.show',$gallery->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('gallerys.edit',$gallery->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure deteted this Gallery ID : {{ $gallery->id }}?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
</button>
