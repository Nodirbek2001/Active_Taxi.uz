<!-- <nav id="navbar">
    <div class="menu">
        <input type="checkbox" id="check">
        <div class="logo">
                <a href="#">
                    <img src="{{ asset('images/static_img/logo.jpg') }}" alt="" class="logo_img">
              </a>
            </div>
        <ul>
        <label class="btn cancel"><i class="fa fa-close"></i></label>
            <li><a href="{{ route('home',[app()->getLocale()]) }}" class="lang" key="home" for="check">{{ __('app.home') }}</a></li>
            <li><a href="{{ route('home',[app()->getLocale()]) }}#about" class="lang" key="about">{{ __('app.about') }}</a></li>
            <li><a href="#contact" class="lang btn cancel" for="check" key="contact">{{ __('app.contact') }}</a></li>
            <div class="language_container">
                @foreach (config('app.available_locales') as $index => $locale)
                @if ($locale === app()->getLocale())
                <a class="lang-button active_lang" onclick="switchLocale('{{ $locale }}')" style="{{ $index === 0 ? 'border-right: 1px solid black;' : '' }}">{{ strtoupper($locale) }}</a>
                @else
                <a class="lang-button" onclick="switchLocale('{{ $locale }}')" style="{{ $index === 0 ? 'border-right: 1px solid black;' : '' }}">{{ strtoupper($locale) }}</a>
                @endif
                @endforeach
            </div>
        </ul>
        <label for="check" class="btn bars"><i class="fa fa-bars"></i></label>
    </div>
</nav> -->


<nav id="navbar">
        <div class="menu">
            <input type="checkbox" id="check">
            <div class="logo">
                <a href="{{ route('home',[app()->getLocale()]) }}">
                    <img src="{{ asset('images/static_img/Лого таксопарк.png') }}" alt="" class="logo_img">
                    <h5>+998992710555</h5>
                </a>
            </div>
            <ul>
                <label class="btn cancel">
                    <i class="fa fa-close"></i>
                </label>
                <li>
                    <a href="{{ route('home',[app()->getLocale()]) }}" class="lang" key="home" for="check">{{ __('app.home') }}</a>
                </li>
                <li>
                    <a href="{{ route('home',[app()->getLocale()]) }}#about" class="lang" key="about_big">{{ __('app.about') }}</a>
                </li>
                <!-- <li>
                    <a href="#projects" class="lang" key="projects">Projects</a>
                </li> -->
                <li>
                    <a href="{{ route('home',[app()->getLocale()]) }}#tarif" class="lang" key="tarif">{{ __('app.tarif_1') }}</a>
                </li>
                <li>
                    <a href="{{ route('home',[app()->getLocale()]) }}#referens" class="lang" key="referens">{{ __('app.gas_neft') }}</a>
                </li>
                <li>
                    <a href="{{ route('home',[app()->getLocale()]) }}#news" class="lang" key="news">{{ __('app.news') }}</a>
                </li>
                <li>
                    <a href="{{ route('home',[app()->getLocale()]) }}#contacts" class="lang" key="contacts">{{ __('app.contacts') }}</a>
                </li>
                <li>
                    <a href="{{ route('home',[app()->getLocale()]) }}#registration" class="lang  nav_registation " key="registration">{{ __('app.registration') }}</a>
                </li>
                <div class="language_container">
                @foreach (config('app.available_locales') as $index => $locale)
                @if ($locale === app()->getLocale())
                <a class="lang-button active_lang" onclick="switchLocale('{{ $locale }}')" style="{{ $index === 0 ? 'border-right: 1px solid black;' : '' }}">{{ strtoupper($locale) }}</a>
                @else
                <a class="lang-button" onclick="switchLocale('{{ $locale }}')" style="{{ $index === 0 ? 'border-right: 1px solid black;' : '' }}">{{ strtoupper($locale) }}</a>
                @endif
                @endforeach
            </div>
            </ul>
            <label for="check" class="btn bars">
                <i class="fa fa-bars"></i>
            </label>
        </div>
        </div>
    </nav>

