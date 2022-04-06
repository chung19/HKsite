@extends('backend.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div class="pull-left">
            <h2> Show Blog</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-danger" href="{{ route('blog.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="wrapper row">
    <div class="preview col-md-3">
        <img src="/image/{{ $blog->image }}" class="img-fluid" alt="Responsive image">
    </div>
    <div class="details col-md-9">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    {{ $blog->title }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $blog->description }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category:</strong>
                    {{ $blog->category }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date:</strong>
                    {{ $blog->date }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author:</strong>
                    {{ $blog->author }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
        </div>
        </div>
    </div>
</div>
@endsection
