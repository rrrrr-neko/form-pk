<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Стили -->
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}" />
    <!--script type="text/javascript" src="{{ asset('/js/script.js') }}"></script-->
</head>
<body>
    <header class="header">
        <img src="/css/pk_icon.png" alt="Иконка МЭИ" class="img_header">
        <nav>
            <a class="link_nav" href="https://pk.mpei.ru/extra/priem2024/priem2024.html#about">O нас</a>
            <!--<a class="link_nav">Почему выбирают нас?</a>-->
            <a class="link_nav" href="#item1" style="color:black;">Контакты</a>
        </nav>
    </header>  


    <main class="container">
        @yield('content')
    </main>
    <footer  class="basement" id="item1">
        <div class="basement-title"  style="text-align:center; color:white; font-weight: 600;font-size: 35px;">Контакты</div><br><br>
        
        <div class="basement-title"  style="text-align:center; color:white;font-size: 22px;  font-weight: 300;" >
            Приёмная комиссия:<br><br>
            +7 (495) 362-77-77;<br><br>
            PK@mpei.ru<br><br>
            Наш сайт:<br>
            <a target='_blank' href='http://pk.mpei.ru/' style="text-decoration: none; color:#ff8562; font-weight: 500;">pk.mpei.ru</a><br></div>
        
        <br><br>
        <div class="anchor" id="bottom-counters">
            <a target="_blank" title="Мы во ВКонтакте" href="https://vk.com/pkmpeiofficial"><img border="0" alt=""  style="width: 44px; height: 44px;" src="/css/vk-logo.svg" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a target="_blank" title="Наш Телеграм канал" href="https://web.telegram.org/k/#@mpeienergy"><img border="0" alt="" style="width: 44px; height: 44px;" src="/css/telegram-logo.svg" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a target="_blank" title="Наш YouTube канал" href="https://rutube.ru/channel/24149423/videos/"><img border="0" alt="" src="/css/yt_icon_rgb.png" /></a>
        </div>
    </footer>
       
    
<script>
    
const smoothLinks = document.querySelectorAll('a[href^="#"]');

for (let smoothLink of smoothLinks) {
    smoothLink.addEventListener('click', function (e) {
        e.preventDefault();
        const id = smoothLink.getAttribute('href');

        document.querySelector(id).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
};
</script>
</body>
</html>