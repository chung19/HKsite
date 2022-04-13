@extends('backend.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div class="pull-left">
            <h2>Services</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('services.create') }}"> Create New service</a>
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
        <th>Title</th>
        <th>Content</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($services as $service)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img src="/image/{{ $service->image }}" width="100px"></td>
        <td>{{ $service->title }}</td>
        <td>{!! $service->content !!}</td>
        <td>
            <form action="{{ route('services.destroy',$service->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('services.show',$service->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('services.edit',$service->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete_{{ $service->id}}">Delete</button>

                <!-- Modal -->
                <div class="modal fade" id="modalDelete_{{ $service->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <span>Are you sure you want to delete {{ $service->title }} ?</span>
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

{!! $services->links() !!}

@endsection