<header>
    <div class="container">
        <nav>
            <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}"
                    alt="Logo DC comics"></a>

            <ul>
                @foreach ($nav_links as $link)
                    <li>
                        <a href="{{ route($link) }}">{{ strtoupper($link) }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
