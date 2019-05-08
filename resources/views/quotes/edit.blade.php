@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="title">
            <h1>Edit Quote</h1>
            {!! Form::open(['action' => ['QuotesController@destroy', $quote->id], 'method' => 'POST']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
            <br>
        </div>
        <div class="content">
            <div class="card text-center" style="width: 50%;">
                {!! Form::open(['action' => ['QuotesController@update', $quote->id], 'method' => 'POST']) !!}
                <div class="card-body">
                        <div class="form-group">
                            {{Form::label('season', 'Season')}}
                            {{Form::number('season', $quote->season, ['class' => 'form-control', 'required', 'placeholder' => 'Season'])}}
                            <br>
                            {{Form::label('episode', 'Episode')}}
                            {{Form::number('episode', $quote->episode, ['class' => 'form-control', 'required', 'placeholder' => 'Episode'])}}
                            <br>
                            {{Form::label('quote', 'Quote')}}
                            {{Form::text('quote', $quote->quote, ['class' => 'form-control', 'required', 'placeholder' => 'Quote'])}}
                        </div>
                </div>
                <div class="card-footer text-muted">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection