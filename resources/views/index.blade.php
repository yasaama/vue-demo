<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <script src="https://kit.fontawesome.com/39a77c4ae9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
    <div id="app">
        <site-header></site-header>
        <router-view></router-view>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
