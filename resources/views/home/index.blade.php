@extends('partials.jumbo')

@section('title')
    Home
@endsection


@section('jumbotron')
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="Poster of {{ $comic['series'] }}">
                    <h3>{{ $comic['series'] }}</h3>
                </div>
            </div>
        @endforeach
    </div>
    <button class="btn btn-primary">LOAD MORE</button>
@endsection
