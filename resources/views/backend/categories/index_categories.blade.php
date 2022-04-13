@extends('backend.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-2">
        <div class="pull-left">
            <h2>Category List</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('add-category') }}"> Create New Category</a>
        </div>
    </div>
</div>
@if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Category Name</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($category as $item)
    <tr>
        <td>{{ $item -> id}}</td>
        <td>{{ $item -> category_name}}</td>
        <td>
            <div style="display:flex;">
                <a href="/edit-category/{{ $item->id }}" class="btn btn-primary">Edit</a>
                <form action="{{ url('delete-category/'.$item->id) }}" method="POST" style="margin-bottom:0px;">
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
                                    <span>Are yot sure you want to delete category?</span>
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
@endsection
</button>