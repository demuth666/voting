<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href={{asset('css/login.css');}}>
</head>
<body>
    <div class="auth">
        @yield('content')
    </div>
    <script src={{asset('js/login.js');}}></script>
</body>
</html>