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
    {{-- {{$gallerys->links() }}  --}}
@endsection
</button>