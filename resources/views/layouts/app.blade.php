<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Стили -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    <!--script type="text/javascript" src="{{ asset('/js/script.js') }}"></script-->
</head>
<body>
    <header class="header">
        <img src="{{ asset('/css/image/pk_icon.png') }}" alt="Иконка МЭИ" class="img_header">
        <nav>
            <a class="link_nav">O нас</a>
            <a class="link_nav">Почему выбирают нас?</a>
            <a class="link_nav">Контакты</a>
        </nav>
    </header>  


    <main class="container">
        @yield('content')
    </main>
</body>
</html>