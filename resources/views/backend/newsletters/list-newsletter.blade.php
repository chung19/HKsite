@extends('backend.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Newsletter List </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('newsletters.create') }}"> Create New Newsletter </a>
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
            <th>ID</th>
            <th>Email</th>
            <th width="280px">Action</th>

        </tr>
        @foreach ($newsletters as $newsletter)
        <tr>
            <td>{{ $newsletter->id }}</td>
            <td>{{ $newsletter->email}}</td>
            <td>
                <form action="{{ route('newsletters.destroy',$newsletter->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('newsletters.edit',$newsletter->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure deteted this Newsletter  ID:{{$newsletter->email  }} Email : {{ $newsletter->email }}?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>



    {{ $newsletters->links() }}
    

@endsection
