
@extends('backend.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Newsletter CRUD Form </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('newsletter.create') }}"> Create New Newsletter </a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>Email</th>
            
          
        </tr>
        @foreach ($newsletter as $newsletter)
        <tr>
            <td>{{ ++$i }}</td>

            <td>{{ $newsletter->email}}</td>
          
            <td>
                <form action="{{ route('newsletter.destroy',$newsletter->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('newsletter.show',$newsletter->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('newsletter.edit',$newsletter->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{-- {!! $products->links() !!} --}}
    {{-- {!! $newsletter->links() !!} --}}
@endsection