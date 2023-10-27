<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        @include('layouts.meta')
        @yield('meta')
        <style>
                .ck-content img {
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                }



                .image img {
                        text-align: center;
                        margin-left: auto;
                        margin-right: auto;
                        display: block;
                        max-height: 600px;
                        width: auto;
                        margin-bottom: 50px;
                }

                .card-body {
                        display: block;
                }

                .ck-content img {
                        max-height: 400px;
                }

                .my-textarea {
                        min-height: 300px !important;
                        height: 300px !important;
                }

                @media (max-width: 680px) {
                        .image img {
                                text-align: center;
                                margin-left: auto;
                                margin-right: auto;
                                display: block;
                                max-height: auto;
                                width: 100% !important;
                                margin-bottom: 50px !important;
                        }
                }
        </style>
</head>

<body>
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')

</body>

</html>