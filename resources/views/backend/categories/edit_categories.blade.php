@extends('backend.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 mt-3">
        <div class="pull-left">
            <h2>Edit Category</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-danger" href="{{ url('category') }}"> Back</a>
        </div>
    </div>
</div>

@if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category name:</strong>
                <input type="text" name="category_name" value="{{ $category-> category_name }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>



@endsection


