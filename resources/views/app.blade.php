<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/all.css">
</head>
<body>

@include('partials.nav')

<div class="container">
    @yield('content')
</div>

@yield('footer')
</body>
</html>