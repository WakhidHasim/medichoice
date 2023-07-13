<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>MediChoice - {{ $title }}</title>

    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: [`{{ asset('css/fonts.min.css') }}`]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    @include('layouts.style')

</head>

<body>
    <div class="wrapper">
        @include('layouts.navbar')

        @include('layouts.sidebar')

        <div class="main-panel">
            @yield('content')

            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.script')

</body>

</html>
