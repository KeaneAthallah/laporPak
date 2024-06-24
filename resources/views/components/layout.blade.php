<!DOCTYPE HTML>
<html>

<head>
    <title>Lapor Pak</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('home/assets/css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('home/assets/css/noscript.css') }}" />
    </noscript>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="index is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <x-header></x-header>

        <!-- Banner -->
        <section id="banner">

            <!--
      ".inner" is set up as an inline-block so it automatically expands
      in both directions to fit whatever's inside it. This means it won't
      automatically wrap lines, so be sure to use line breaks where
      appropriate (<br />).
     -->
            <x-inner></x-inner>

        </section>

        {{ $slot }}

        <x-footer></x-footer>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('home/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/jquery.dropotron.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/util.js') }}"></script>
    <script src="{{ asset('home/assets/js/main.js') }}"></script>

</body>

</html>
