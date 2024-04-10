<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя страница</title>

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
    <div class="container"> 
        <div>
        <h1>Форма ДОД</h1>
        <ul>
            <li><a href="{{ route('view_form_dod') }}">Просмотр формы</a></li>
            <li><a href="{{ route('edit_question_dod') }}">Редактирование вопросов</a></li>
            <li><a href="{{ route('view_answer_dod') }}">Просмотр ответов</a></li>
        <ul>
        </div> 
        <div>
        <h1>Форма Экскурсии</h1>
        <ul>
            <li><a href="{{ route('view_form_excursion') }}">Просмотр формы</a></li>
            <li><a href="{{ route('edit_question_excursion') }}">Редактирование вопросов</a></li>
            <li><a href="{{ route('view_answer_excursion') }}">Просмотр ответов</a></li>
        <ul>
        </br>
        <a href="{{ route('logActivity') }}">Журнал активности</a>
        </br>
        <a>Зарегестрировать пользователя</a>
        </br>
        </div> 
    </div>

</body>
</html>