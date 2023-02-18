
  <head>
    <meta charset="utf-8">
    <title>Аренда цифрового магазина в телеграм для автоматизации бизнеса, боты автопродаж - iSKiLLBOT.RU</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Создай бот-магазин за 5 минут с помощью нашего сервиса iskillbot.ru">
    <meta name="keywords" content="skill,bot,bot,айскиллбот,создать бота,бот-магазин,бот магазин,телеграм,шоп,автопродаж,бот">
    <link href="img/favicon.png?2" rel="shortcut icon" type="image/x-icon" />
    <link href="img/favicon.png?2" rel="icon" type="image/x-icon" />
    <!-- Font-Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}

      #buy:hover {
    color: #fff;
    background-color: #000;
    border-color: #000;
      }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.8/lottie.min.js"></script>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link href="web/assets/css/theme-desktop-app.min.css?9" rel="stylesheet" type="text/css" media="all" />
    <script src="web/platform.js?5" defer></script>

  </head>

  <body>
  	<div class="elfsight-app-chat"></div>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    <div class="navbar-container" style="background: #10151F;">
      <nav class="navbar navbar-expand-lg" style="background: #10151F;" data-sticky="top">
        <div class="container">
          <a class="navbar-brand fade-page" href="/">
            <img width="30%" src="img/telelogo.png?1" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <img class="icon navbar-toggler-open" src="web/assets/img/icons/interface/menu.svg" alt="menu interface icon" data-inject-svg />
            <img class="icon navbar-toggler-close" src="web/assets/img/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <div class="py-2 py-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a href="#tarifi" class="nav-link dropdown-toggle text-white" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Тарифы</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#prem" class="nav-link dropdown-toggle text-white" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Преимущества</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#interfeis" class="nav-link dropdown-toggle text-white" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Интерфейс</a>
                </li>
              </ul>
            </div><a href="#tarifi" class="btn btn-primary ml-lg-3">Создать магазин</a>

          </div>
        </div>
      </nav>
    </div>

    <section class="bg-primary-3 text-light text-center has-divider header-desktop-app" style="background: #10151F;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8 col-md-9">
            <h1 class="display-3">Автоматизация Вашего Бизнеса </h1><h2>боты автопродаж моменталки!</h2>
            <p class="lead">Мы предоставляем аренду цифрового магазина в телеграм для автоматизации бизнеса. Хватит тратить свое время на поиск готовых скриптов с тоннами ошибок, выбирай нас!</p>
            <small>
        <?php
        $url = file_get_contents("https://mamba.iskillbot.shop/api/public");
        $json = json_decode($url, true);
        
        $datele = $json['total_orders'];
        $preturile = $json['total_price'];
        
        echo "🤖 Через наших ботов было продано <b>$datele</b> товаров, на сумму <b>$preturile</b> долларов США в 2023 году.</br>
<b>Это статистика действительно реальная и работает в режиме реального времени.</b>";
        
        ?></small><center><div id="sticker"></div></center><style>#sticker {
  width: 200px;
  height: 200px;
}</style><script>
  lottie.loadAnimation({
    container: document.getElementById('sticker'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'chpic.tgs'
  });
</script>
            <div class="d-flex flex-column flex-sm-row justify-content-center mt-4">
<a class="btn btn-lg btn-primary mx-2 mb-2 mb-sm-0" href="#tarifi">Создать магазин</a>
              <a href="#interfeis" class="btn btn-lg btn-outline-primary mx-2">
                <span>Посмотреть демо</span>
              </a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-6" data-aos="fade-up" data-delay="100">
          <div class="col-lg-10">
            <img src="img/glavnaia.png" alt="Image" class="rounded shadow-lg">
          </div>
        </div>
      </div>
      <div class="divider">
        <img src="web/assets/img/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
      </div>
    </section>
    <section>
      <div class="container" id="prem">
        <center><h3>Преимущества ботов в Telegram</h3></center>
        <div class="row mb-4 text-center">
        </div>
        <div class="row text-center">
          <div class="col-md-4 my-3" data-aos="fade-up" data-aos-delay="100">

            <center><div id="sticker1"></div></center><style>#sticker1 {
  width: 85;
  height: 85;
}</style><script>
  lottie.loadAnimation({
    container: document.getElementById('sticker1'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'auto.tgs'
  });
</script>
            <h6>Автоматизация</h6>
            <p>Большое количество аспектов автоматизировано! Все методы оплаты - полностью автоматические и не требуют вмешательства операторов, это позволит вашему покупателю получить более положительный опыт взаимодействия с ботом или сайтом.</p>
          </div>
          <div class="col-md-4 my-3" data-aos="fade-up" data-aos-delay="200">

            <center><div id="sticker2"></div></center><style>#sticker2 {
  width: 85;
  height: 85;
}</style><script>
  lottie.loadAnimation({
    container: document.getElementById('sticker2'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'ban.tgs'
  });
</script>
            <h6>Уникальная антибан система</h6>
            <p>Ваши покупатели будут пользоваться ботами с удобными кнопками и клавиатурой. Всё благодаря системе индивидуальных ботов - чтобы понять, как это работает - посмотрите демонстрацию.</p>
          </div>
          <div class="col-md-4 my-3" data-aos="fade-up" data-aos-delay="300">

            <center><div id="sticker3"></div></center><style>#sticker3 {
  width: 85;
  height: 85;
}</style><script>
  lottie.loadAnimation({
    container: document.getElementById('sticker3'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'sec.tgs'
  });
</script>
            <h6>Безопасность</h6>
            <p>Одной из важных особенностей ведения безопасного бизнеса является наличие необходимых инструментов для его обеспечения, коими обладает данное решение. Ваша админ панель будет доступная через .onion домен.</p>
          </div>

             <div class="col-md-4 my-3" data-aos="fade-up" data-aos-delay="100">

             <center><div id="sticker4"></div></center><style>#sticker4 {
  width: 85;
  height: 85;
}</style><script>
  lottie.loadAnimation({
    container: document.getElementById('sticker4'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'help.tgs'
  });
</script>
             <h6>Сопровождение и поддержка</h6>
             <p>Нашим клиентам мы предоставляем бесплатную онлайн-поддержку. Вы получите ответы на свои вопросы в короткий срок, мы также расскажем вам как работать с админ-панелью и при необходимости, поможем наполнить её.</p>
           </div>
            <div class="col-md-4 my-3" data-aos="fade-up" data-aos-delay="200">

              <center><div id="sticker5"></div></center><style>#sticker5 {
  width: 85;
  height: 85;
}</style><script>
  lottie.loadAnimation({
    container: document.getElementById('sticker5'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'doc.tgs'
  });
</script>
              <h6>Очень просто</h6>
              <p>Вам не нужно оформлять документы, получать аттестаты и уметь программировать. Весь функционал очень прост и понятен. Начать зарабатывать можно уже сразу после создания сайта и/или бота.</p>
            </div>
             <div class="col-md-4 my-3" data-aos="fade-up" data-aos-delay="300">

               <center><div id="sticker6"></div></center><style>#sticker6 {
  width: 85;
  height: 85;
}</style><script>
  lottie.loadAnimation({
    container: document.getElementById('sticker6'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'shops.tgs'
  });
</script>
               <h6>Надежно</h6>
               <p>На нашей платформе создано более 700 магазинов. Каждый из них работает уже продолжительное время, ежедневно делая обороты на миллионы рублей.</p>
             </div>
              <div class="col-md-4 my-3" data-aos="fade-up" data-aos-delay="100">

                <center><div id="sticker7"></div></center><style>#sticker7 {
  width: 85;
  height: 85;
}</style><script>
  lottie.loadAnimation({
    container: document.getElementById('sticker7'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'bot.tgs'
  });
</script>
                <h6>Кастомизация</h6>
                <p>Настройте ваш магазин так, как считаете нужным. Мы предоставляем практически безграничные возможности кастомизации магазина.</p>
              </div>
               <div class="col-md-4 my-4" data-aos="fade-up" data-aos-delay="200">

                 <center><div id="sticker8"></div></center><style>#sticker8 {
  width: 85;
  height: 85;
}</style><script>
  lottie.loadAnimation({
    container: document.getElementById('sticker8'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'money.tgs'
  });
</script>
                 <h6>Широкий выбор методов оплат</h6>
                 <p>Наше решение позволяет покупателям платить при помощи банковских карт, QIWI, пополнение через терминалы , BitObmen, а также Bitcoin и Litecoin. Мы постоянно развиваемся, поэтому - это не предел.</p>
               </div>
                <div class="col-md-4 my-3" data-aos="fade-up" data-aos-delay="300">

                  <center><div id="sticker9"></div></center><style>#sticker9 {
  width: 85;
  height: 85;
}</style><script>
  lottie.loadAnimation({
    container: document.getElementById('sticker9'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'obmen.tgs'
  });
</script>
                  <h6>Встроенные обменники</h6>
                  <p>Благодаря встроенной системе приема платежей, вам больше не придется беспокоится о вечных блокировках ваших кошельков, терять средства и драгоценной время. За небольшую комиссию с покупателя, магазин сможет использовать наши кошельки, лишая вас излишней заботы.</p>
                </div>
                 <div class="col-md-4 my-3" data-aos="fade-up" data-aos-delay="300">
          </div>
        </div>
      </div>
    </section>
    <section class="has-divider bg-primary-2-alt" id="interfeis">
      <div class="divider flip-y">
        <img src="web/assets/img/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
      </div>
      <div class="container pt-3 pb-0">
        <div class="row justify-content-center text-center mb-6">
          <div class="col-xl-8 col-lg-9">
            <h2 class="display-4 mx-xl-6">Интерфейс панели</h2>
            <h4>Ссылка на демонстрационного бота : <b><a target="_blank" href="https://t.me/demoskillbot">@demoskillbot</a></b></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
            <ul class="nav flex-column" role="tablist">
              <li class="nav-item">
                <a class="nav-link btn btn-light p-2 text-left active" href="#app-tab-1" data-toggle="tab" aria-controls="app-tab-1" aria-selected="true" role="tab">
                  📈 Статистика
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-light p-2 text-left" href="#app-tab-2" data-toggle="tab" aria-controls="app-tab-1" aria-selected="true" role="tab">
                  ⚙️ Конструктор
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-light p-2 text-left" href="#app-tab-3" data-toggle="tab" aria-controls="app-tab-2" aria-selected="false" role="tab">
                  💸 Настройки оплаты
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-light p-2 text-left" href="#app-tab-4" data-toggle="tab" aria-controls="app-tab-3" aria-selected="false" role="tab">
                  📋 Заказы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-light p-2 text-left" href="#app-tab-5" data-toggle="tab" aria-controls="app-tab-3" aria-selected="false" role="tab">
                  📡 Рассылки</a>
              </li>

            </ul>
          </div>
          <div class="col mb-lg-n7 layer-2">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="app-tab-1" role="tabpanel" aria-labelledby="app-tab-1">
                <div class="popover-image">
                  <img src="img/stat.png" alt="Image" class="rounded shadow-lg">
                </div>
              </div>
              <div class="tab-pane fade" id="app-tab-2" role="tabpanel" aria-labelledby="app-tab-2">
                <p class="btn btn-primary">Бот или сайт автоматических продаж будет находится сразу в двух доменных зонах, на нашем под домене либо на вашем домене и так же в сети Onion. Так же присутствует гибкая настройка и кастомизация сайта или бота.</p>
                <div class="popover-image">
                  <img src="img/dev.png" alt="Image" class="rounded shadow-lg">
                </div>
              </div>
              <div class="tab-pane fade" id="app-tab-3" role="tabpanel" aria-labelledby="app-tab-3">
                  <p class="btn btn-primary">В боте поддерживаются такие платежные системы как: - Bitcoin, Litecoin, Qiwi, Qiwi (терминал).Валюта бота - RUB / UA / USD / KZT (можно добавить любую по запросу)</p>
                <div class="popover-image">
                  <img src="img/pay.png" alt="Image" class="rounded shadow-lg">
                </div>
              </div>
             <div class="tab-pane fade" id="app-tab-4" role="tabpanel" aria-labelledby="app-tab-3">
                <p class="btn btn-primary">В этом блоке находится множество различных инструментов, которые помогут вам вести статистику, сверять вашу прибыль, смотреть статистику продаж, общаться с клиентами и одобрять их отзывы. Так же здесь Вы сможете просмотреть самих клиентов и их покупки в вашем магазине.</p>
                <div class="popover-image">
                  <img src="img/sell.png" alt="Image" class="rounded shadow-lg">
                </div>
              </div>
             <div class="tab-pane fade" id="app-tab-5" role="tabpanel" aria-labelledby="app-tab-3">
                <p class="btn btn-primary">У вас есть что срочно, нужно сообщить вашим клиентам? С помощью инструмента рассылки вы можете запланировать через некоторое время когда запустить рассылку сообщении по всем клиентам вашего магазина.</p>
                <div class="popover-image">
                  <img src="img/send.png" alt="Image" class="rounded shadow-lg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="divider flip-x">
        <img src="web/assets/img/dividers/divider-3.svg" alt="graphical divider" data-inject-svg />
      </div>
    </section>

    <section>
      <div class="container" id="tarifi">
        <div class="row justify-content-center text-center mb-6">
          <div class="col-xl-8 col-lg-9">
            <h2 class="display-4 mx-xl-6">Тарифы</h2>
          </div>
        </div>
        <div class="row justify-content-center mb-3">
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card card-body align-items-center ">
              <div class="py-md-2">
                <h4>Месячный</h4></p>
              </div>
              <div class="d-flex align-items-start pb-md-2">
                <span class="h3">$</span>
                <span class="display-4 mb-0">100</span>
              </div>
              <ul class="text-center list-unstyled mb-2 mt-md-2 mb-md-4">
              	<li class="py-1">
                  <span>24 часа бесплатно</span>
                </li>
                <li class="py-1">
                  <span>Отключение рекламы в боте</span>
                </li>
                <li class="py-1">
                  <span>Полный функционал</span>
                </li>
                <li class="py-1">
                  <span>Поддержка 24/7</span>
                </li>
              </ul>
              <a href="panel/?tarif=100" class="btn btn-primary" id="buy">Выбрать тариф</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card card-body align-items-center ">
              <div class="py-md-2">
                <h4>3+1 месяца</h4>
              </div>
              <div class="d-flex align-items-start pb-md-2">
                <span class="h3">$</span>
                <span class="display-4 mb-0">300</span>
              </div>
              <ul class="text-center list-unstyled mb-2 mt-md-2 mb-md-4">
              	<li class="py-1">
                  <span>1 месяц бесплатно</span>
                </li>
                <li class="py-1">
                  <span>Отключение рекламы в боте</span>
                </li>
                <li class="py-1">
                  <span>Полный функционал</span>
                </li>
                <li class="py-1">
                  <span>Поддержка 24/7</span>
                </li>
              </ul>
              <a href="panel/?tarif=300" class="btn btn-primary" id="buy">Выбрать тариф</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card card-body align-items-center ">
               <div class="py-md-2">
                <h4>6+2 месяца</h4>
              </div>
              <div class="d-flex align-items-start pb-md-2">
                <span class="h3">$</span>
                <span class="display-4 mb-0">600</span>
              </div>
              <ul class="text-center list-unstyled mb-2 mt-md-2 mb-md-4">
                <li class="py-1">
                  <span>2 месяца бесплатно</span>
                </li>
                <li class="py-1">
                  <span>Отключение рекламы в боте</span>
                </li>
                <li class="py-1">
                  <span>Полный функционал</span>
                </li>
                <li class="py-1">
                  <span>Поддержка 24/7</span>
                </li>
              </ul>
              <a href="panel/?tarif=600" class="btn btn-primary" id="buy">Выбрать тариф</a>
            </div>
          </div>
        </div>
      </div>
      <center><h4>Бесплатное тестирование</h4><h6>Для потенциальных клиентов мы готовы предоставить бесплатно 24 часа</br> тестирования нашей платформы. Это удобно, если вы хотите </br>воспользоватся, перед тем как принять решение о покупке.</h6>
        <form id="form-contact" method="POST" class="contact-form" autocomplete="off" enctype="multipart/form-data">
          <div class="preloader"></div>
          <p class="contact-form__message"></p>
          <div class="contact-form__input-wrapper contact-form__input-wrapper_name">

            <input style="width: auto;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;" name="name" type="text" class="contact-form__input contact-form__input_name"
                   placeholder="Ваш Telegram">
          </div>
          <input name="theme" type="hidden" class="contact-form__input contact-form__input_theme"
                 value="Хочу тестировать 24 часа ваш бот">
          </br><button type="submit" class="btn btn-primary">Тестировать 24 часа</button>

        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/telegramform/js/telegramform.js"></script>
    </section>

    <footer class="pb-4 text-light pt-2" style="background-color:#0d1117" id="footer">
      <div class="container">
        <div class="row m-5 mt-0">
          <div class="col-6">
            <h5>Ссылки</h5>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#interfeis" class="nav-link">Демо-магазин</a>
              </li>
              <li class="nav-item">
                <a href="#prem" class="nav-link">Преимущества ботов</a>
              </li>
              <li class="nav-item">
                <a href="#tarifi" class="nav-link">Личный кабинет</a>
              </li>
              <li class="nav-item">
                <a href="#tarifi" class="nav-link">Тарифы</a>
              </li>
              <li class="nav-item">
                <a href="tg://resolve?domain=iskillbot_news" class="nav-link">Новости</a>
              </li>
              <li class="nav-item">
                <a href="tg://resolve?domain=i_skill" class="nav-link">Разработчик проекта</a>
              </li>
            </ul>
          </div>
          <div class="col-6">
            <h5>Связаться</h5>
            <ul class="list-unstyled">
              <li class="mb-3 d-flex">
                <div class="ml-1">
                  Почта: <a href="mailto:support@iskillbot.ru" style="color: #85888a;">support@iskillbot.ru</a></br>
                  Telegram: <a target="_blank" href="https://t.me/iskillbot" style="color: #85888a;">@iskillbot</a>
                </div>
              </li>
            </ul>
            <h5>Наши партёры</h5>
            <ul class="list-unstyled">
              <li class="mb-3 d-flex">
                <div class="ml-1"><svg width="150" height="50" viewBox="0 0 578.77 112.4" xmlns="http://www.w3.org/2000/svg">
  <path fill="#ffffff" d="m110.2 0-41.4 52.3h-68.8l41.4-52.3zm-20.2 10h-43.7l-26.3 33h43.7z"/>
  <path fill="#ffffff" d="m68.8 60 41.4 52.4h-68.8l-41.4-52.4zm-5.1 10h-43.7l26.3 33h43.7z"/>
  <path fill="#ffffff" d="m119.3 8 38.4 47.8-38.3 48-6.9-8.8 27.3-34h-54.7l-4.1-5.2 4.1-4.9h55.8l-28.7-33.9z"/>
  <path fill="#ffffff" d="m243 36.8a6.53 6.53 0 0 1 0 1.4 6.6 6.6 0 0 1 -.1 1.4l-3.8 47.5h-13.6l-1.6-5.4a39.15 39.15 0 0 1 -7.9 4.6 21.3 21.3 0 0 1 -8.8 2.1h-3.3a18.33 18.33 0 0 1 -4.1-.6 17.26 17.26 0 0 1 -4.9-2.1 13.68 13.68 0 0 1 -4.2-4.4 16.53 16.53 0 0 1 -2.2-7.2 7.39 7.39 0 0 1 0-2.1c0-.8.1-1.7.2-2.9l.3-3.8a41.64 41.64 0 0 1 .8-5.2 13.22 13.22 0 0 1 2.7-5.6 16.45 16.45 0 0 1 6.1-4.5q4.05-1.8 11.1-1.8h14.8l.3-3.1a4.87 4.87 0 0 0 .1-1.2v-.9a1.77 1.77 0 0 0 -.9-1.6 2.82 2.82 0 0 0 -1.5-.4h-23.1l1.1-14.6h30.3c4.2 0 7.2 1 9.1 3a11.56 11.56 0 0 1 3.1 7.4zm-34.6 23.5a2.52 2.52 0 0 0 -1.7.6 2.61 2.61 0 0 0 -.9 1.8l-.6 5.2a18.48 18.48 0 0 0 -.1 2.3 5.71 5.71 0 0 0 1 2.5c.6.9 1.7 1.3 3.4 1.3a28.83 28.83 0 0 0 6.7-.9 28.36 28.36 0 0 0 6.6-2.3l.7-10.4zm101.5-18.5a46.85 46.85 0 0 1 0 5.3l-1.5 19.4c-.5 6.3-2.4 11.3-5.8 15.1s-8.2 5.7-14.5 5.7h-20.9l-1.4 17h-17.9l6.2-77.9h14.6l1.7 4.5c1.4-.6 3.1-1.2 5-1.9s3.9-1.3 6-1.9 4.2-1 6.3-1.4a32.1 32.1 0 0 1 6-.6 15.41 15.41 0 0 1 6.5 1.3 16.39 16.39 0 0 1 5 3.6 16.94 16.94 0 0 1 3.3 5.3 26.79 26.79 0 0 1 1.4 6.5zm-17.8 5.1a5.74 5.74 0 0 0 -1.3-3.5c-.8-.9-2.2-1.3-4.2-1.3a23.86 23.86 0 0 0 -3.1.3l-4.4.6c-1.5.3-3.1.5-4.6.8s-2.8.6-3.8.8l-2.2 26.8h19.4a2.24 2.24 0 0 0 2.5-2.4l1.5-19.2a6.62 6.62 0 0 0 .1-1.5 8.17 8.17 0 0 0 .1-1.4zm42.7 40.3h-18.4l4.9-60.9h18.4zm6-68.1h-19.4l.9-11.1h19.4zm44.1 23.1h-2.3a35.72 35.72 0 0 0 -8.7 1c-2.8.7-5.2 1.3-7.1 2l-3.4 42h-18.5l4.9-60.9h15.1l1.6 5a45.88 45.88 0 0 1 4.4-2.1c1.6-.7 3.3-1.4 5.1-2a53.39 53.39 0 0 1 5.3-1.6 23.4 23.4 0 0 1 5-.6zm63.8 24.3c-.4 6.1-2.3 11.1-5.6 15s-8.1 5.8-14.5 5.8h-24.5c-4.3 0-7.7-1.2-10.1-3.6s-3.8-5.7-4.2-10a7.38 7.38 0 0 1 0-2.1c0-.6.1-1.8.2-3.5l1.5-21a27.19 27.19 0 0 1 1.7-8.2 18.07 18.07 0 0 1 3.9-6.6 17.65 17.65 0 0 1 6.3-4.3 23.43 23.43 0 0 1 8.8-1.6h24.4c4.2 0 7.5 1.4 9.8 4.2a19.23 19.23 0 0 1 4 10.6c0 .6.1 1.3.1 2a13.42 13.42 0 0 1 -.1 2.1zm-16-20.4a3.31 3.31 0 0 0 -1.4-2.7 4.86 4.86 0 0 0 -3-.9h-16.6q-2.25 0-2.4 2.4l-1.4 19a6.15 6.15 0 0 0 -.1 1.4v1.3a3.76 3.76 0 0 0 1.2 2.6 4.4 4.4 0 0 0 3.2 1h16.4a2.24 2.24 0 0 0 2.5-2.4l1.5-19.7a4.87 4.87 0 0 0 .1-1.2zm84.8-5.9c.1 1 .1 2.1.1 3.2s-.1 2.4-.1 3.7l-3.1 40.1h-18l2.8-36.2a22.23 22.23 0 0 0 .1-3.5c-.3-3.6-2-5.4-5.2-5.4a48 48 0 0 0 -7.6.8c-3 .5-5.7 1.1-8 1.7l-3.6 42.6h-17.9l4.9-60.9h14.6l1.7 4.5c1.8-.8 3.7-1.5 5.7-2.2a63.21 63.21 0 0 1 6.2-1.8c2.1-.5 4.1-.9 6-1.3a36.1 36.1 0 0 1 5.3-.5 29.65 29.65 0 0 1 5 .4 13.74 13.74 0 0 1 5.1 1.9 12 12 0 0 1 4.1 4.5 22.66 22.66 0 0 1 1.9 8.4zm61.2.1a7.39 7.39 0 0 1 0 2.1c0 .7-.1 1.3-.1 1.8l-.5 4.9a11.84 11.84 0 0 1 -4.7 8.5 22.64 22.64 0 0 1 -10.1 4.3 22.3 22.3 0 0 1 -4.5.6c-1.9.2-3.8.3-5.9.4s-4 .2-5.7.3-3.1.1-3.9.1l-.2 2.6a5.63 5.63 0 0 0 0 1.3l.1.8a5.09 5.09 0 0 0 1.3 3.1c.8.9 2.2 1.4 4.2 1.4s4.4-.1 7-.3 5.2-.5 7.9-.8 5.2-.6 7.6-1.1a63.11 63.11 0 0 0 6.4-1.4l-1.1 13.5a50.67 50.67 0 0 1 -6.3 2.2c-2.5.7-5.1 1.3-7.8 1.9s-5.5 1-8.3 1.3a72.41 72.41 0 0 1 -7.6.5 48.51 48.51 0 0 1 -6-.4 19.14 19.14 0 0 1 -6.8-2.1 15.89 15.89 0 0 1 -5.7-5c-1.6-2.2-2.6-5.2-2.9-9.2a21.75 21.75 0 0 1 -.1-2.6c0-.9.1-1.8.2-2.8l1.5-19.4a29.18 29.18 0 0 1 1.6-7.9 19.89 19.89 0 0 1 3.9-6.6 17.83 17.83 0 0 1 6.4-4.6 23.41 23.41 0 0 1 9.3-1.7h12.9a22.81 22.81 0 0 1 9 1.5 15.42 15.42 0 0 1 5.3 3.6 11.77 11.77 0 0 1 2.7 4.5 31 31 0 0 1 .9 4.7zm-28.4.7a6.79 6.79 0 0 0 -3.4 1.1 4.7 4.7 0 0 0 -2.1 3.8l-.7 6.7c.5 0 1.4 0 2.8-.1a36.39 36.39 0 0 0 4.5-.3c1.6-.1 3.1-.3 4.5-.4a30.68 30.68 0 0 0 3.1-.4 6.31 6.31 0 0 0 3.3-1.5 5.82 5.82 0 0 0 1.1-1.8 9.59 9.59 0 0 0 .3-1.5 10.36 10.36 0 0 0 .1-1.6 4.34 4.34 0 0 0 -1.3-2.9 4.17 4.17 0 0 0 -3.2-1.1z"/>
</svg></br> The service provides rental of automatic sales bots for the Telegram mobile application. The service supports accepting payments to the apirone cryptocurrency exchange, and does not dispose of payment information to third parties. A solution for the crypto processing platform provided by btc2wire OÜ
                </div>
              </li>
            </ul>
          </div>
        </div><center><h5>Поддержать проект</h5>
        Bitcoin : <code>1GMG9bf4UndJArNu3XgZh7C9erGh4Edn2z</code></br>
        Litecoin : <code>LYEBGWhHzEezvP5VRPhZJxh33QjsCvxdcB</code></br>
        Ethereum :  <code>0x967795529cd101dc89d6c2d0d5503167ae7b2e88</code></center>
        </br>


        <div class="row justify-content-center">
          <div class="col col-md-auto text-center">
            <small class="text-muted">&copy; 2020-2023 ISKILLBOT - ВСЕ ПРАВА ЗАЩИЩЕНЫ!<br><a href="docs/soglpolz.pdf">Пользовательское соглашение</a>
            </small>
          </div>
        </div>
      </div>
    </footer>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="web/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="web/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="web/assets/js/bootstrap.js"></script>

    <!--
             This appears in the demo only.  This script ensures our demo countdowns are always showing a date in the future
             by altering the date before the countdown is initialized
        -->

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="web/assets/js/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="web/assets/js/clipboard.min.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="web/assets/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="web/assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="web/assets/js/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="web/assets/js/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="web/assets/js/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="web/assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="web/assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="web/assets/js/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="web/assets/js/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="web/assets/js/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="web/assets/js/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="web/assets/js/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="web/assets/js/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="web/assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="web/assets/js/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="web/assets/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="web/assets/js/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="web/assets/js/theme.js"></script>

    <script type="text/javascript">
      // This script appears only in the demo - it disables forms with no action attribute to prevent
      // navigating away from the page.
      jQuery("form:not([action])").on('submit', function(){return false;});
    </script>

    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54610333, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54610333" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

  </body>
  </html>
