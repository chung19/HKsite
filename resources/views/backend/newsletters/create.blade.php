@extends('backend.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Newsletter</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('newsletters.index') }}"> Back</a>
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
     
<form action="{{ route('newsletters.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
     
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          
                <button type="submit" class="btn btn-primary">Subscribe</button>
        </div>
    </div>
     
</form>
@endsection