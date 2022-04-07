@extends('backend.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit review</h2>
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

    <form action="{{ route('reviews.update',$review->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $review->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="star">Star:</strong>
                    <div class="rate">
                        @for($i=5; $i>=1; $i--)
                            <?php $star = $i; $starName = 'star'.(string)$i;?>
                            <input type="radio" {{$star == 1 ? "id='star1' value=1" : ($star == 2 ? "id='star2' value=2" : ($star == 3 ? "id='star3' value=3" : ($star == 4 ? "id='star4' value=4" : "id='star5' value=5")))}} class="rate" name="star" {{$star==$review->star ? 'checked' : ''}}/>
                            <label {{$star == 1 ? "for='star1'" : ($star == 2 ? "for='star2'" : ($star == 3 ? "for='star3'" : ($star == 4 ? "for='star4'" : "for='star5'")))}} title="text">{$star} star</label>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    <textarea class="form-control" style="height:150px" name="content" placeholder="Content">{{ $review->content }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Position:</strong>
                    <textarea class="form-control" style="height:150px" name="position" placeholder="Position">{{ $review->position }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/image/{{ $review->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
