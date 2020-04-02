<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Разработка и производство электроники</title>
    <meta name="keywords" content="Разработка электроники, производство электроники, автоматизация производства">
    <meta name="description" content="Наша команда готова оказать услуги для эффективного развития и автоматизации энергетической легкой и других отраслей промышленности.">
    <meta name="propeller" content="f620bfc2d1ae1bfee03c8bfb82c5b494">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    {{--<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">--}}
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="50">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(52302379, "init", {
        id:52302379,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/52302379" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div id="app" class="scroll-area">
    @include('sections.navbar')
    <!-- particles.js container -->
    @yield('content')
    @include('sections.footer')

</div>
<script src="/js/app.js"></script>
<script type="text/javascript" src="//dolohen.com/apu.php?zoneid=2502398" async data-cfasync="false"></script>
<script src="//pushanert.com/ntfc.php?p=2530573" data-cfasync="false" async></script>
</body>
</html>
