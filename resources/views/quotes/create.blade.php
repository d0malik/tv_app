@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="title">
            <h1>Create Quote</h1>
        </div>
        <div class="content">
            <div class="card text-center" style="width: 50%;">
                <div class="card-body">
                    <!-- <h2 class="card-title">Season x - Episode y</h2>
                    <h5 class="card-text">z</h5> -->
                    {!! Form::open(['action' => 'QuotesController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('season', 'Season')}}
                            {{Form::number('season', '', ['class' => 'form-control', 'required', 'placeholder' => 'Season'])}}
                            <br>
                            {{Form::label('episode', 'Episode')}}
                            {{Form::number('episode', '', ['class' => 'form-control', 'required', 'placeholder' => 'Episode'])}}
                            <br>
                            {{Form::label('quote', 'Quote')}}
                            {{Form::text('quote', '', ['class' => 'form-control', 'required', 'placeholder' => 'Quote'])}}
                        </div>
                        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection