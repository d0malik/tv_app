@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="title">
            <h1>Edit Quotes</h1>
            <a href="/quotes/create" class="btn btn-success">Create</a>
        </div>
        <br>
        <div class="content">
            @if (count($quotes) > 0)
                @foreach ($quotes as $quote)
                    <div class="card text-center" style="width: 50%;">
                        <div class="card-body">
                            <h2 class="card-title">Season {{$quote->season}} - Episode {{$quote->episode}}</h2>
                            <h5 class="card-text">{{$quote->quote}}</h5>
                        </div>
                        <div class="card-footer text-muted">
                            Submitted on {{$quote->created_at}}
                        </div>
                        <a href="quotes/{{$quote->id}}" class="btn btn-outline-info">Edit</a>
                    </div>
                @endforeach
                <ul class="pagination justify-content-center">{{$quotes->links()}}</ul>
            @else
                <div class="card text-center" style="width: 50%;">
                        <div class="card-body">
                            <h2 class="card-title">No Quotes Found!</h2>
                            <h5 class="card-text">:(</h5>
                            <small></small>
                        </div>
                    </div>
            @endif
        </div>
    </div>
@endsection