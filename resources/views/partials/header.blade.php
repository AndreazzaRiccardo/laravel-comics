@php
    $nav_links = config('nav.header_links');
@endphp

<header>
    <div class="container">
        <nav>
            <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}"
                    alt="Logo DC comics"></a>
                {{-- usiamo questa sintassi nell'src, perchè tutte le cartelle di un progetto risultano nascoste al browser per questioni di sicurezza, tranne quella public...quindi sarà il server tramite questa sintassi ad occuparsi di fare una copia dell'immagine e visualizzarla sul browser --}}
            <ul>
                @foreach ($nav_links as $link)
                    <li class="{{ Route::currentRouteName() === $link['route_name'] ? 'cur-page' : '' }}">
                        <a href="{{ route($link['route_name']) }}">{{ strtoupper($link['title']) }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
