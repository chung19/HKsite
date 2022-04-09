

@extends('backend.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-3">
            <div class="pull-left">
                <h2> Show service</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="{{ route('services.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="wrapper row">
    <div class="preview col-md-3">
        <img src="/image/{{ $service->image }}" class="img-fluid" alt="Responsive image">
    </div>
    <div class="details col-md-9">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    {{ $service->title }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {!! $service->content !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <a class="btn btn-primary" href="{{ route('services.edit',$service->id) }}">Edit</a>
        </div>
        </div>
    </div>
</div>
    @endsection

