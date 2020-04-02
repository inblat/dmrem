<nav class="navbar navbar-fixed-top" style="z-index: 0;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <h2>DMREM</h2>
                <!--<img src="img/logo.svg" width="201" height="55" alt="Разработка и производство электроники"/>-->
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav" data-offset-top="50" data-spy="affix">
                <li class="dropdown">
                    <a href="/" >Компания<span class="indicator fa fa-plus"></span></a>
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#profile" data-target="#profile">Специализация</a></li>--}}
                    {{--</ul>--}}
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Услуги <!--Services--> <span class="indicator fa fa-plus"></span></a>
                    <ul id="menu-services"class="dropdown-menu">
                        <li><a href="#hardware" data-target="#hardware">Электроника</a></li>
                        <li><a href="#software" data-target="#software">Софт</a></li>
                        <li><a href="#qualification" data-target="#qualification">Испытания</a></li>
                        <li><a href="#emv" data-target="#emv">EMC</a></li>
                        <li><a href="#prototypes" data-target="#prototypes">Призводство прототипов</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Статьи<span class="indicator fa fa-plus"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach(\App\Page::all() as $page)
                            <li><a href="/post/{{$page->slug}}">{{$page->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="/contacts">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>