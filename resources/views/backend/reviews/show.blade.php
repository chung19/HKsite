@extends('backend.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div class="pull-left">
            <h2> Show review</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-danger" href="{{ route('reviews.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="wrapper row">
    <div class="preview col-md-3">
        <img src="/image/{{ $review->image }}" class="img-fluid" alt="Responsive image">
    </div>
    <div class="details col-md-9">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $review->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Star:</strong>
                    @for($i=1; $i<=$review->star; $i++)
                        <span><i class="fa fa-star"></i></span>
                        @endfor
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    {{ $review->content }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Position:</strong>
                    {{ $review->position }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <a class="btn btn-primary" href="{{ route('reviews.edit',$review->id) }}">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection