@extends('backend.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-3">
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
        <td>@for($i=1; $i<=$review->star; $i++)
                <span><i class="fa fa-star"></i></span>
                @endfor
        </td>
        <td>{{ $review->content }}</td>
        <td>{{ $review->position }}</td>
        <td>
            <form action="{{ route('reviews.destroy',$review->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('reviews.show',$review->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('reviews.edit',$review->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">Delete</button>

                <!-- Modal -->
                <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <span>Are you sure you want to change?</span>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $reviews->links() !!}

@endsection