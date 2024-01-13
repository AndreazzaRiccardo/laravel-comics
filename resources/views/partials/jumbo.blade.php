@extends('layouts.app')

@section('content')
    <main>
        <div class="comics">
            <img class="jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
            <div class="container">
                <div class="tag">CURRENT SERIES</div>
                @yield('jumbotron')
            </div>
        </div>
    </main>
@endsection
