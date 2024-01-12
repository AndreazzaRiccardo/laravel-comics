@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
<main>
    <div class="comics">
      <img class="jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
      <div class="container">
        <div class="tag">CURRENT SERIES</div>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col">
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="Poster of {{ $comic['series'] }}">
                    <h3>{{ $comic['series'] }}</h3>
                </div>
              </div>
            @endforeach
        </div>
        <button class="btn btn-primary">LOAD MORE</button>
      </div>
    </div>
  </main>
@endsection