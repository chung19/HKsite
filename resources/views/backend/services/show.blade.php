

@extends('backend.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show service</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reviews.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="inforService">
        <div class="inforService__content">
            <h1 class="inforService__title">{{ $service->title }}</h1>
            <img class="inforService__banner" src="/image/{{ $service->image }}">
            <p class="inforService__text">{{ $service->content }}
            </p>
            <h2 class="inforService__featuresTitle">Key features</h2>
            <div class="inforService__features">
                <img src="../frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Custom Installation Process</div>
            </div>
            <div class="inforService__features">
                <img src="../frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Customizable Interface</div>
            </div>
            <div class="inforService__features">
                <img src="../frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Improved All Performance</div>
            </div>
            <div class="inforService__features">
                <img src="../frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">High Usablility</div>
            </div>
        </div>
    </div>
    @endsection

