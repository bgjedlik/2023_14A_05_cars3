<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel layout demo</title>

    @include('layouts.styles')

</head>

<body>

    @include('layouts.header')
    @include('layouts.nav')
    <main>
        @yield('content')
    </main>

    @include('layouts.footer')


    @include('layouts.scripts')
</body>

</html>
