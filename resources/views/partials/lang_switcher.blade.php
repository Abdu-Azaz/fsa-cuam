{{-- <div class="nav-item d-flex justify-content-center pt-4 pt-md-0 ms-2">
    @foreach ($available_locales as $locale_name => $available_locale)
        @if ($available_locale === $current_locale)
            <span class="py-0 rounded my-auto bg-secondary text-white px-2">
                @if ($available_locale === 'en')
                    <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/gb.webp" style="width:20px">
                @elseif($available_locale === 'fr')
                    <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/fr.png" style="width:20px">
                @endif
            </span>
        @else
            <span class="my-auto">
                @if ($available_locale === 'en')
                    <a class="mx-2 text-primary my-auto" href="{{ url('/lang', $available_locale) }}">
                        <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/gb.webp" style="width:20px">
                    </a>
                @elseif($available_locale === 'fr')
                    <a class="mx-2 text-primary my-auto" href="{{ url('/lang', $available_locale) }}">
                        <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/fr.png" style="width:20px">
                    </a>
                @endif
            </span>

        @endif
    @endforeach
</div> --}}
 
<div class="pt-md-0 ms-2">
    <div class="dropdoswn-start bxstn-group">
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            @if ($current_locale === 'en') 
                🇬🇧
            @else 
                🇫🇷
            @endif
        </button>
        <ul class="dropdown-menu dropdown-menu-end"  aria-labelledby="dropdownMenuButton">
            @foreach ($available_locales as $locale_name => $available_locale)
                <li>
                    <a  class="dropdown-item {{ $available_locale === $current_locale ? 'active' : '' }}" href="{{ url('/lang', $available_locale) }}">
                        @if ($available_locale === 'en') 
                            🇬🇧 English
                        @else 
                            🇫🇷 Francais
                        @endif
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    
    
</div>

{{-- <div class="nav-item dropdown">    
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('Lang') }}</a>
    <div class="dropdown-menu m-0">
        @foreach ($available_locales as $locale_name => $available_locale)
            @if ($available_locale === $current_locale)
                @if ($available_locale === 'en')
                    <a class="mx-2 text-primary" href="{{ url('/lang', $available_locale) }}">
                        <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/gb.webp" style="width:20px">
                    </a>
                @elseif($available_locale === 'fr')
                    <a class="mx-2 text-primary" href="{{ url('/lang', $available_locale) }}">
                        <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/fr.png" style="width:20px">
                    </a>
                @endif
        @else
            @if ($available_locale === 'en')
                <a class="mx-2 text-primary" href="{{ url('/lang', $available_locale) }}">
                    <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/gb.webp" style="width:20px">
                </a>
            @elseif($available_locale === 'fr')
                <a class="mx-2 text-primary" href="{{ url('/lang', $available_locale) }}">
                    <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/fr.png" style="width:20px">
                </a>
            @endif
        @endif
        @endforeach
    </div>
</div> --}}


{{-- <div class="dropdown d-flex align-items-center justify-content-center ms-1">
    <button class="btn dropdown-toggle bg-secondary text-white" type="button" id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        @switch($current_locale)
            @case('en')
                <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/gb.webp" style="width:20px">
                @break
            @case('fr')
                <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/fr.png" style="width:20px">
                @break
        @endswitch
    </button>
    <div class="dropdown-menu position-absolute " aria-labelledby="langDropdown" style="top:100%; max-width:100% width:auto;!important">
        @foreach ($available_locales as $locale_name => $locale_code)
            <a class="dropdown-item" href="{{ url('/lang', $locale_code) }}" >
                @switch($locale_code)
                    @case('en')
                        <img  class="img-fluid" src="https://flagpedia.net/data/flags/w580/gb.webp" style="width:20px">
                        @break
                    @case('fr')
                        <img class="img-fluid" src="https://flagpedia.net/data/flags/w580/fr.png" style="width:20px">
                        @break
                @endswitch
            </a>
        @endforeach
    </div>
</div> --}}


@section('js')
    <script>
        const changeLang = (lang) => {
            const currentPath = window.location.pathname;
            const newPath = currentPath.startsWith('/lang') ?
                `/lang/${lang}${currentPath.substr(10)}` :
                `/lang/${lang}${currentPath}`;
            window.location.href = newPath;
        }
    </script>
@stop
