@extends('backend.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div class="pull-left">
            <h2> Show Gallery</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-danger" href="{{ route('gallerys.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="wrapper row">
    <div class="preview col-md-3">
        <img src="/image/{{ $gallery->image }}" class="img-fluid" alt="Responsive image">
    </div>
    <div class="details col-md-9">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <a class="btn btn-primary" href="{{ route('gallerys.edit',$gallery->id) }}">Edit</a>
        </div>
        </div>
    </div>
</div>
@endsection