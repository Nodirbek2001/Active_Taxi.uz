<!-- resources/views/layouts/app.blade.php -->

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">

    <title>{{ ' Eleksan ' }}</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


<style>
                .ck-content img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

          .form-group textarea img {
    max-height: 200px;
    width: auto;
}
.ck-content img {
    max-height: 400px;
}
img{
    max-width: 100%;
}
    .image img {
        text-align: center ;
        margin-left: auto;
margin-right: auto;
display: block;
        max-height: 400px;
    }
.card-body{
    display: block;
}.ck-content img {
    max-height: 400px;
}
.my-textarea{
    min-height: 300px !important;
    height: 300px !important;
}
</style>



</head>

<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Eleksan
                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news.index') }}">{{ __('Новости') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Авторизоваться') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
ClassicEditor
    .create(document.querySelector('#description_en'), {
        ckfinder: {
            uploadUrl: '{{route("ckeditor.upload").'?_token='.csrf_token()}}'
        },
        image: {
            styles: [
                'full',
               
            ],
            toolbar: ['imageTextAlternative', '|', 'imageStyle:full']
        },
        on: {
            instanceReady: function (event) {
                this.dataProcessor.htmlFilter.addRules({
                    elements: {
                        img: function (el) {
                            el.attributes.style = 'max-height:400px; display: block; margin-left: auto; margin-right: auto;';
                        }
                    }
                });
            }
        }
    })
    .catch(error => {
        console.error(error);
    });

ClassicEditor
    .create(document.querySelector('#description_ru'), {
        ckfinder: {
            uploadUrl: '{{route("ckeditor.upload").'?_token='.csrf_token()}}'
        },
        image: {
            styles: [
                'full',
                
            ],
            toolbar: ['imageTextAlternative', '|', 'imageStyle:full']
        },
        on: {
            instanceReady: function (event) {
                this.dataProcessor.htmlFilter.addRules({
                    elements: {
                        img: function (el) {
                            el.attributes.style = 'max-height:400px; display: block; margin-left: auto; margin-right: auto;';
                        }
                    }
                });
            }
        }
    })
    .catch(error => {
        console.error(error);
    });

</script>
</body>

</html>
