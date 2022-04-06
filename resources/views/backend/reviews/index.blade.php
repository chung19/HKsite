@extends('backend/reviews.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Reviews</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('reviews.create') }}"> Create New review</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Star</th>
            <th>Content</th>
            <th>Position</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($reviews as $review)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $review->image }}" width="100px"></td>
            <td>{{ $review->name }}</td>
            <td>{{ $review->star }}</td>
            <td>{{ $review->content }}</td>
            <td>{{ $review->position }}</td>
            <td>
                <form action="{{ route('reviews.destroy',$review->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('reviews.show',$review->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('reviews.edit',$review->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $reviews->links() !!}

@endsection
