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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    {{--<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">--}}
    <link href="css/app.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="50">
<div id="app" class="scroll-area">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Компания <!--Company--> <span class="indicator fa fa-plus"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#profile" data-target="#profile">Специализация</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Услуги <!--Services--> <span class="indicator fa fa-plus"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#hardware" data-target="#hardware">Электроника</a></li>
                            <li><a href="#software" data-target="#software">Софт</a></li>
                            <li><a href="#qualification" data-target="#qualification">Испытания</a></li>
                            <li><a href="#emv" data-target="#emv">EMC</a></li>
                            <li><a href="#prototypes" data-target="#prototypes">Призводство прототипов</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact" data-target="#contact">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- particles.js container -->
    <div id="particles-js">
        <div class="container">
            <div class="row header-container">
                <div class="inside-page-header text-left">
                    <h1>Проектирование и производство электроники и автоматики</h1>
                    <h2>- Исследование и разработка</h2>
                    <h2>- Проектирование и производство</h2>
                    <h2>- Тестирование и проверка качества</h2>
                    <h2>- Составление документации</h2>
                </div>
            </div>
        </div>

    </div>
    <a id="profile" name="profile"></a>
    <div class="parallax parallax-bg parallax-bg-profile" data-stellar-background-ratio="0.75">
        <h2>Компания</h2>
    </div>
    <div class="section">
        <div class="col-md-12 col-lg-4">
            <div class="content">
                <h3 class="width-85">Чем мы можем вам помочь?</h3>
                <hr>
                <p class="lead">Мы команда инженеров специализирующихся на разработке силовой электроники и прецизионных систем управления
                    (Системы управления электроприводом, автоматизация производственных процессов, цифровая обработка сигналов,
                    преобразователи напряжения и тока, промышленный дизайн и конструирование).</p>

            </div>
        </div>
        <div id="intro" class="col-md-12 col-lg-8">
            <div class="content">
                <div class="col-md-12 col-lg-6">
                    <p>Наши клиенты предоставляют первоначальные идеи, которые затем развиваются в гибкие решения для поддержки их инновационного
                        процесса. Мы применяем совместный подход, работая рука об руку с нашими клиентами в качестве партнеров по развитию. Наша система
                        менеджмента качества сертифицирована по стандарту ISO 9001: 2008.</p>

                    <p>Наша команда инженеров заинтересована в своевременном и высококачественном выполнении услуг проектирования, доходы от которых
                        идут, в том числе, на повышение эффективности дальнейших разработок, обновление технической базы и продвижение своих услуг. И так же,
                        как Производитель Продукта берёт на себя риски, связанные с выводом нового изделия на рынок, так и ответственность за оценку своих
                        услуг и ведение проекта в целом лежит на Контрактном Разработчике.</p>
                </div>
                <div class="col-md-12 col-lg-6">
                    <p>Таким образом, объектом контрактной разработки является продукт интеллектуальной деятельности компании-разработчика: готовое
                        электронное устройство, его составная часть, печатная плата, отдельные сервисы в области анализа различных параметров разрабатываемой
                        электроники, исходные коды программного обеспечения, услуги консультационного характера.</p>

                    И одним из принципиальных аспектов сотрудничества является то, что все результаты выполненных Контрактным Разработчиком работ
                    (например, прототип изделия или его составных частей; конструкторская документация для дальнейшего серийного производства;
                    программное обеспечение и т.д. в зависимости от условий договора) являются интеллектуальной собственностью Заказчика - Производителя Продукта.
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--<div class="parallax parallax-bg parallax-bg-reception parallax-lg" data-stellar-background-ratio="0.75">-->
    <!--</div>-->
    <!--<div class="equal-height-lg">-->
    <!--<a id="values"></a>-->
    <!--<div class="col-xs-12 col-lg-4 steel inverse">-->
    <!--<div class="content">-->
    <!--<h2 class="spaced">КОМАНДА</h2>-->
    <!--<hr>-->
    <!--<p>Наша команда мотивирована успехом наших клиентов. Мы помогаем-->
    <!--создавать инновационные продукты, вкладывая все наши усилия в разработку оптимизированных по стоимости,-->
    <!--прикладных блоков управления, электронных устройств и специализированных программных решений.-->
    <!--<br> При сотрудничестве с клиентами мы уделяем первостепенное внимание созданию партнерских отношений и доверия.-->
    <!--Это позволяет нам полностью сосредоточиться на целях клиента, основываясь на нашем-->
    <!--понимании отраслевых требований, опыта и абсолютной приверженности работе.-->
    <!--Мы не делаем никаких уступок, когда речь заходит о качестве, потому что мы твердо убеждены в том, что:</p>-->
    <!--<p>Скупой платит дважды!</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--<a id="history" name="history"></a>-->
    <!--<div class="col-xs-12 col-lg-8 steel-light inverse">-->
    <!--<div class="content">-->
    <!--<h2 class="spaced">КОМПАНИЯ</h2>-->
    <!--<hr>-->
    <!--<div class="row">-->
    <!--<div class="col-xs-12 col-lg-6">-->
    <!--<p>Вместе эта команда инженеров по электронному проектированию создала компанию, которая сегодня работает как полный комплекс услуг по аппаратным и программным решениям «все в одном». Услуги, предлагаемые компанией Wildmoser electronic, охватывают каждый этап процесса разработки, начиная от спецификации дизайна и заканчивая разработкой программных компонентов, квалификационными испытаниями, прототипом и краткосрочным производством. </p>-->
    <!--<p> Компания создала свою первую тестовую лабораторию EMC в 2003 году. В середине 2005 года была открыта производственная установка для прототипов. </p>-->
    <!--</div>-->
    <!--<div class = "col-xs-12 col-lg-6">-->
    <!--<p> У молодой компании вскоре не хватило места для расширения ее деятельности и приобрела ее нынешние помещения. Вторая полуэховая камера была добавлена ​​в 2012 году для расширения собственных квалификационных испытаний компании. </p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="clearfix"></div>-->
    <!--</div>-->
    <a id="services" name="services"></a>
    <div class="parallax parallax-bg parallax-bg-services" data-stellar-background-ratio="0.75">
        <h2>УСЛУГИ</h2>
    </div>
    <div class="equal-height-md">
        <div class="col-md-4 col-lg-6 col-bg col-bg-hardware"></div>
        <div class="col-md-8 col-lg-6 gray-light">
            <div class="content">
                <a id="hardware" name="hardware"></a>
                <h4>Мы разрабатывает оптимизированные по стоимости электронные блоки для применения в различных отраслях промышленности и сельского хозяйства.</h4>
                <h2 class="spaced">Хард</h2>
                <hr>
                <p>Разработка оптимизированных по стоимости электронных модулей и устройств - это проблема, которую мы принимаем со своих клиентов. Независимо от приложения - первоначальная идея для аппаратного компонента предоставляется клиентом. Соответствующее, эффективное решение для электронных схем поставляется нашей командой опытных инженеров, основываясь на нашем глубоком знании отраслевых требований. Наши услуги варьируются от концептуального моделирования до окончательного, полностью документированного прототипа, проходящего через все промежуточные этапы, такие как проектирование схем и совместимость с EMC, с учетом любых механических ограничений конструкции. Все схемы построены с использованием новейших поколений активных и пассивных компонентов. Мы используем все отраслевые марки микроконтроллеров, цифровых схем, аналоговых сигнальных процессоров и силовой электроники. Чтобы проверить схему и схему компоновки, мы используем инструменты автоматизации электронного проектирования (EDA) и высокоэффективные средства тестирования и измерения, а также для моделирования схем и моделирования целостности сигнала. Само собой разумеется, что мы также собираем полный набор данных и документов, которые вам понадобятся для производства новых электронных компонентов или устройств.</p>
            </div>
        </div>
    </div>
    <div class="equal-height-md">
        <div class="col-md-4 col-md-push-8 col-lg-6 col-lg-push-6 col-bg col-bg-software"></div>
        <div class="col-md-8 col-md-pull-4 col-lg-6 col-lg-pull-6">
            <div class="content">
                <a id="software" name="software"></a>
                <h4>Наша команда создает оптимизированные решения, разрабатывая аппаратно-адаптированное программное обеспечение.</h4>
                <h2 class="spaced">СОФТ <!--SOFTWARE--></h2>
                <hr>
                <p>Мы работаем рука об руку со своими клиентами на всех этапах процесса разработки, от анализа спецификаций требований и в процессе проектирования до реализации. Сначала мы начинаем подробно изучать ваши требования к продукту. Затем применяем систематические методы разработки программного обеспечения для разработки программных решений, адаптированных к продуктам, которые соответствуют этим требованиям, а также являются масштабируемыми, многоразовыми и отказоустойчивыми. Параллельно, чтобы облегчить будущие усовершенствования наших устройств управления, на начальном этапе разработки в устройство закладывается возможность добавления новых функций. Также мы разрабатываем связанные инструменты визуализации и анализа данных в виде приложений для Windows, Android или iOS. Многие клиенты выбрали нас в качестве своего долгосрочного партнера по разработке программного обеспечения, потому что мы используем самые современные технологии и обеспечиваем стабильно надежные результаты.</p>
            </div>
        </div>
    </div>
    <a id="qualification" name="qualification"></a>
    <div class="equal-height-md">
        <div class="col-md-4 col-lg-6 col-bg col-bg-qualification"></div>
        <div class="col-md-8 col-lg-6 gray-light">
            <div class="content">
                <h4>Внутренние квалификационные испытания подчеркивают эффективность наших процессов разработки.</h4>
                <h2 class="spaced">Квалификационные испытания и тестирование</h2>
                <hr>
                <p>Квалификация прототипов является одной из основных наших компетенций. Это область, имеющая центральное значение для нашей работы, потому что, проведя такие тесты внутри компании, мы можем быть уверены в том, чтобы предлагать нашим клиентам наиболее эффективный и экономичный процесс разработки. Это имеет смысл, если учесть, что более половины времени любого хорошо организованного процесса разработки состоит из тестирования. Выполняя стандартные тестовые процедуры и различные экологические симуляции в наших собственных помещениях, мы можем принимать немедленные меры в ответ на результаты испытаний, тем самым экономя драгоценное время.</p>
                <p>Чтобы соответствовать более строгим стандартам тестирования в отношении сферы охвата и доступности, наши лаборатории оснащены новейшими измерительными и измерительными приборами последнего поколения. В особых случаях мы разрабатываем и строим индивидуальное тестовое оборудование и инструменты. Это включает в себя настройку тестовой установки, проектирование необходимых тестовых цепей и кодирование необходимого программного обеспечения. Клиенты, которые хотят продолжить использование одной и той же тестовой установки, получают полную документацию, включая инструкции по эксплуатации и шаблоны тестовых протоколов.</p>
            </div>
        </div>
    </div>
    <a id="emv"></a>
    <div class="equal-height-md">
        <div class="col-md-4 col-md-push-8 col-lg-6 col-lg-push-6 col-bg col-bg-emv"></div>
        <div class="col-md-8 col-md-pull-4 col-lg-6 col-lg-pull-6 slate">
            <div class="content">
                <h4>Наша собственная лаборатория EMC гарантирует соответствие электронных устройств стандартам EMC.</h4>
                <h2 class="spaced">EMC</h2>
                <hr>
                <p>Все электронные устройства, предназначенные для потребительского рынка, должны соответствовать требованиям электромагнитной совместимости (EMC), независимо от их применения - будь то в автомобильной промышленности, промышленной автоматизации или в производстве потребительских товаров или продвинутых медицинских устройств. Поэтому мы уделяет большое внимание этому аспекту проектирования и изготовления. Компания имеет две камеры EMC, в которых она тестирует радиочастотную (RF) эмиссию и иммунитет прототипов. В лаборатории работают высококвалифицированные сотрудники с углубленными специальными знаниями, которые используют ультрасовременное испытательное оборудование EMC для проведения разнообразных тестов: проведенное эмиссию в искусственной сети, излучаемое излучение и иммунитет с антеннами, полосковая линия метод, емкостные измерения напряжения, впрыскивание объемного тока (BCI), устойчивость к переносным передатчикам с настроенными монопольными и широкополосными дипольными антеннами и устойчивость к магнитным полям с катушками Гельмгольца.</p>
                <p>Преимущество внутреннего тестового объекта EMC заключается в том, что он устраняет трудоемкий и дорогостоящий процесс координации действий с внешними поставщиками услуг. Более того, непосредственная близость лаборатории EMC к отделам квалификационного тестирования, аппаратного и программного обеспечения способствует совместной работе, что повышает эффективность работы по подавлению помех от электромагнитных помех.</p>
            </div>
        </div>
    </div>
    <!--<div class="equal-height-md">-->
    <!--<div class="col-md-4 col-lg-6 col-bg col-bg-labs"></div>-->
    <!--<div class="col-md-12 col-lg-6">-->
    <!--<div class="content">-->
    <!--<h4>Equipment in our EMC laboratory:</h4>-->

    <!--<p class="spaced">S-Line test cell (manufacturer: Rohde & Schwarz) | 2&nbsp;semi-anechoic chambers lined with hybrid absorber materials</p>-->

    <!--<p class="spaced">Antennas:<br> rod antenna | biconical antennas | trilog broadband antenna | logarithmic-periodic antennas | horn antennas | mobile communication antennas | Helmholtz coil | stripline | coupling clamps for bulk current injection (BCI) testing</p>-->

    <!--<p class="spaced">RF power amplifiers:-->
    <!--<br>frequency range 10&nbsp;kHz&ndash;100&nbsp;MHz, 150&nbsp;W | frequency range 10&nbsp;kHz&ndash;400&nbsp;MHz, 220&nbsp;W | frequency range 80&ndash;1000&nbsp;MHz, 500&nbsp;W | frequency range 80&ndash;1000&nbsp;MHz, 1200&nbsp;W | frequency range 0,8&ndash;4,2&nbsp;GHz, 50&nbsp;W | frequency range 0,8&ndash;3,2 GHz, 220&nbsp;W</p>-->

    <!--<p class="spaced">We test for compliance with the following standards and directives:-->
    <!--<br>CISPR25 | Automotive EMC Directive | ISO 11452-2, -4, -5, -8, and -9 | Proprietary standards of nearly all well-known vehicle manufacturers (e.g. BMW GS, VW TL, Mercedes-Benz MBN engineering standards…)</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <a id="prototypes" name="prototypes"></a>



    <div class="equal-height-md">
        <div class="col-md-4 col-lg-6 col-bg col-bg-prototypes"></div>
        <div class="col-md-8 col-lg-6 gray-light">
            <div class="content">
                <h4>Наша команда максимизирует эффективность, предлагая все услуги по развитию внутри компании, включая прототип и производство.</h4>
                <h2 class="spaced">ПРОТОТИПИРОВАНИЕ <!--PROTOTYPE MANUFACTURING--></h2>
                <hr>
                <!-- <p>Prototype manufacturing is another stage of development that Wildmoser electronic prefers to keep in-house. The precise functional models and prototypes we produce for development projects cover everything from the populated circuit board to the device packaging. Our laboratories are equipped with state-of-the-art automated component placement systems, mask printers, soldering stations, a 3D printer, a flying probe test system and an AOI (automated optical inspection) system. This enables us to respond rapidly and flexibly to technological progress and modified requirements, thus guaranteeing our customers a development process that is both time- and cost-efficient.</p> -->
                <p>Прототипирование, является самым важным этапом разработки. На этом этапе нами создается быстрая «черновая» реализация базовой функциональности для анализа работы системы в целом. На этапе прототипирования малыми усилиями создается работающая система (возможно неэффективно, с ошибками, и не в полной мере). Во время прототипирования видна более детальная картина устройства системы. После этапа прототипирования обязательно следуют этапы пересмотра архитектуры системы, разработки, реализации и тестирования конечного продукта.</p>
                <!--<p>On request, Wildmoser electronic will also develop and manufacture any necessary systems for functional and end-of-line testing. In addition to the services we offer for development projects, our manufacturing facility has the capacity to handle short runs of up to 10,000 units.</p> -->
                <p>Процесс создания прототипа:</p>
                <p>Определение начальных требований.</p>
                <p>Разработки первого варианта прототипа, который содержит только пользовательский интерфейс системы.</p>
                <p>Этап изучения прототипа заказчиком и конечным пользователем. Получение обратной связи о необходимых изменениях и дополнениях.</p>
                <p>Переработка прототипа с учетом полученных замечаний и предложений.</p>
            </div>
        </div>
    </div>
    <div class="equal-height-md">
        <div class="col-md-4 col-md-push-8 col-lg-6 col-lg-push-6 col-bg col-bg-serialprod-equipment"></div>
        <div class="col-md-8 col-md-pull-4 col-lg-6 col-lg-pull-6 slate">
            <div class="content">
                <h4>Современное оборудование от лучших производителей.</h4>
                <hr>
                <h2 class="spaced">Оборудование</h2>
                <ul>
                    <li>Линия по производству печатных плат</li>
                    <li>Система трафаретной печати SMD</li>
                    <li>Высокоскоростные системы оптического контроля</li>
                    <li>Паяльные системы</li>
                    <li>Внутрисхемный тестер</li>
                    <li>Тестер Flying-Probe</li>
                    <li>Осцилограф</li>
                    <li>Генератор сигналов</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="parallax parallax-bg parallax-bg-contact parallax-lg" data-stellar-background-ratio="0.75">
    </div>
    <a id="contact" name="contact"></a>
    @include('sections.contacts')

    <div class="footer">
        <div class="nav">
            <h5 class="accent-color">Структура сайта</h5>
            <ul>
                <li><a href="#profile">Компания</a></li>
                <li><a href="#services">Услуги</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </div>
        <div class="copyright text-center">&copy; 2018</div>
    </div>
</div>
<script src="js/app.js"></script>

</body>
</html>
