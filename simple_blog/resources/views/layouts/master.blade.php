<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('head.title', 'Simple Blog')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    @include('partials.navbar')
    @yield('body.content')


    <script src="/js/jquery-1.11.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>