<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @component('components.headers')@endcomponent
</head>
<body>
    <div id="app">
            <div class="container text-center">
                <h3><a class="banner" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a></h3>
            </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
