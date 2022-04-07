@extends('backend.layout')

@section('content')
<div class="row
">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New review</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('reviews.index') }}"> Back</a>
        </div>
    </div>
</div>

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

<form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="star">Star:</strong>
            <div class="rate">
                <input type="radio" id="star5" class="rate" name="star" value="5"/>
                <label for="star5" title="text">5 stars</label>
                <input type="radio" checked id="star4" class="rate" name="star" value="4"/>
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" class="rate" name="star" value="3"/>
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" class="rate" name="star" value="2">
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" class="rate" name="star" value="1"/>
                <label for="star1" title="text">1 star</label>
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                <textarea class="form-control" style="height:150px" name="content" placeholder="Content"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Position:</strong>
                <textarea class="form-control" style="height:150px" name="position" placeholder="Position"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
