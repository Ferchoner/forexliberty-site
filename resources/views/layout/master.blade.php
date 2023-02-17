<!DOCTYPE html>
<html>
<head>
    <title>Forex Liberty | @yield('page_title', 'Principal')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
    <meta charset="UTF-8"/>
    <meta name="description" content="Auto Trading">
    <meta name="keywords" content="trading">
    <meta name="author" content="Anzuelo Team">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="{{ asset('css/master.css') }}?v=1.0" media="screen" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}?v=1.0" media="screen" rel="stylesheet">
    @stack('styles')
    <!-- Global site tag (gtag.js) - Google Analytics
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-230006720-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-230006720-1');
    </script>
    Global site tag (gtag.js) - Google Analytics -->
</head>
<body>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId            : '603463138215994',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v16.0'
            });
        };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    @include('layout.header')
    <main role="main">
        @yield('content')
    </main>
    @include('layout.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="{{ asset('js/master.js') }}?v1"></script>
    @stack('scripts')
</body>
</html>
