@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="title">
            <h1>View Quotes</h1>
        </div>
        <div class="content">
            @if (count($quotes) > 0)
                @foreach ($quotes as $quote)
                    <div class="card text-center" style="width: 50%;">
                        <small>&nbsp;</small>
                        <img class="mx-auto card-img-top" style="width: 15%;" src="https://picsum.photos/id/{{rand(1020,1029)}}/400/400" alt=" ">
                        <div class="card-body">
                            <h2 class="card-title">Season {{$quote->season}} - Episode {{$quote->episode}}</h2>
                            <h5 class="card-text">{{$quote->quote}}</h5>
                        </div>
                        <div class="card-footer text-muted">
                            Submitted on {{$quote->created_at}}
                        </div>
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