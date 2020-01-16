<?php
        if (!isset($_SERVER['HTTP_ACCEPT_ENCODING'])) {
            ob_start();            
        }
        elseif (strpos(' ' . $_SERVER['HTTP_ACCEPT_ENCODING'], 'x-gzip') == false) {
            if (strpos(' ' . $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') == false) {
                ob_start();
            }
            elseif(!ob_start("ob_gzhandler")) {
                ob_start();
            }   
        }
        elseif(!ob_start("ob_gzhandler")) {
            ob_start();
        }
    ?>

<html>

<head>
    <meta charset="utf-8">
    <meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="https://dgivdslhqe3qo.cloudfront.net/sites/35357/favicon_1557844851.ico">
    <title>
        Vacature Kraamverzorgende | Kraamzorg Mama
    </title>
    <meta content="Mogelijkheden voor verschillende contractvormen. Je kiest gewoon het contract dat het beste bij jou past." name="description">
    <meta content="Mogelijkheden voor verschillende contractvormen. Je kiest gewoon het contract dat het beste bij jou past." itemprop="description">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="Vacature Kraamverzorgende | Kraamzorg Mama " property="og:title">
    <meta content="Mogelijkheden voor verschillende contractvormen. Je kiest gewoon het contract dat het beste bij jou past." property="og:description">
    <meta content="1200" property="og:image:width">
    <meta content="630" property="og:image:height">
    <meta content="https://werkenbijmama.nl/" property="og:url">
    <meta content="Kraamzorg Mama" property="og:site_name">
    <meta content="website" property="og:type">
    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="Zsq/UCPLldnF8Lu1tHWCSpnIcw9IEMRY5hJ+N33FPCAzTuTH6l2iIAt8uh5BbjjswH9ZVl7fAkXxY+H0OsOm5A==">
    <link href="https://werkenbijmama.nl/" rel="canonical">

    <script src="https://connect.facebook.net/signals/plugins/inferredEvents.js?v=2.9.2" async=""></script>
    <script src="https://connect.facebook.net/signals/config/108038273094860?v=2.9.2&amp;r=stable" async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>

    <script>
        ! function(f, b, e, v, n, t, s)

        {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '108038273094860');
        fbq('track', 'PageView');

    </script>

    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=108038273094860&ev=PageView
            &noscript=1" />
    </noscript>
    
</head>
<link href="css/style.css" rel="stylesheet">
<link href="css/styles4.css" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/a10a5c5b1e.js"></script>


<body data-__gyazo-extension-added-paste-support="true" id="top">
    
    <style>
        body 
        {
            font-family: 'Open Sans',sans-serif !important;
            font-size: 14px !important;
            line-height: 1.42857143;
        }
    </style>


    <!--HEAD SECTIE EINDE-->
    <?php 
    $page = 'index'; include("header.html") ?>
    <!--HEAD SECTIE EINDE-->

    
    <?php
        if (!isset($_SERVER['HTTP_ACCEPT_ENCODING'])) {
            ob_start();            
        }
        elseif (strpos(' ' . $_SERVER['HTTP_ACCEPT_ENCODING'], 'x-gzip') == false) {
            if (strpos(' ' . $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') == false) {
                ob_start();
            }
            elseif(!ob_start("ob_gzhandler")) {
                ob_start();
            }   
        }
        elseif(!ob_start("ob_gzhandler")) {
            ob_start();
        }
    ?>
    
    <!-- VIDEO SECTIE -->
    <div class="container-fluid" id="videowrapper">
            <div id="text" style="width:70%;">
                <div class="text row">
                    <div class="body col-md-6">
                        <h3 style="margin-bottom:-10px;" class="section-title">Werken bij mama</h3>
                        <br>
                        <p>
                             Bij Kraamzorg Mama zijn we hier allemaal gelijk zijn. We luisteren naar onze mensen en zijn rechtvaardig in alles wat we doen. Bij ons kun je gewoon jezelf zijn en het belangrijkste: je wordt gewaardeerd voor alles wat je doet.
                        </p>
                    </div>
                </div>
            </div>
    
            <div id="video">
                <video style="width:100%;" poster="img/poster.png" controls="">
                    <source src="vid/video.mp4" type="video/mp4">
                </video>
            </div>

            <style>
                @media (min-width:500px){#line{display:none}}@media (max-width:500px){#line{color:#000;margin-top:35rem;margin-bottom:35rem;}}
            </style>
        </div>
    <!-- VIDEO SECTIE EINDE -->



    <!-- VACATURES SECTIE -->
    <div id="vacatures" class="text-component component" style="background-color:#de0a5f;clear:both;opacity:0.9;margin-top:40px; ">
        <div class="container" id="vacatureContainer">

            <script type="text/javascript" src="https://d10zminp1cyta8.cloudfront.net/widget.js"></script>
            <script type="text/javascript">
                var widget = new RTWidget({
                    "companies": [
                        35237
                    ],
                    "detailsMode": "popup",
                    "language": "nl",
                    "departmentsFilter": [],
                    "themeVars": {
                        "primary": "#de0a5f",
                        "secondary": "blue",
                        "text": "#080808",
                        "textDark": "#de0a5f;",
                        "fontFamily": "\"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif;",
                        "baseFontSize": "16px"
                    },
                    "flags": {
                        "showLocation": false,
                        "showCountry": false,
                        "showCity": false,
                        "groupByLocation": false,
                        "groupByDepartment": false,
                        "groupByCompany": false
                    }
                });
            </script>

            <div class="body col-md-6">
                <h3 class="section-title" style="color:white;"> Vacatures</h3>
                <div class="grid">
                    <style>
                        @media (max-width:800px)
                        {
                            .card
                            {
                                width:100% !important;
                            }
                        }

                        .card
                        {
                            margin-bottom:20px;
                        }
                        
                        @media (max-width:800px)
                        {
                            .card h4
                            {
                                font-size: 19px;
                            }
                        }
                    </style>
                    <div class="column">
                        <a href="#job-306031">
                            <div class="card" style="width:210%; color:black;">
                                <h4 style="font-size: none; margin-bottom:10px; color:black;"> 
                                <b>Rooster Kraamverzorgende</b> </h4>
                                <p style="margin-bottom:0px !important; color:black;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Je werkdagen zijn voorspelbaar
                                </p>
                                <p style="margin-bottom:0px !important; color:black; margin-top:5px;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Je vrije dagen zijn voorspelbaar
                                </p>
                                <p style="margin-bottom:10px !important; color:black; margin-top:5px;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Je werkt op een vast rooster
                                </p>
                                <a href="#job-306032" style="color: #0090e3;"> <i class="fas fa-chevron-right"></i>  Solliciteer direct </a>
                            </div>
                        </a>
                        <a href="#job-305128">
                            <div class="card" style="width:210%; color:black;">
                                <h4 style="font-size: none; margin-bottom:10px; color:black;"> 
                                <b>Kraamverzorgende Flex </b></h4>
                                <p style="margin-bottom:0px !important; color:black;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Je kan veel uren maken
                                </p>
                                <p style="margin-bottom:0px !important; color:black; margin-top:5px;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Je staat weinig op wacht
                                </p>
                                <p style="margin-bottom:10px !important; color:black; margin-top:5px;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Je rond je eigen zorg af
                                </p>
                                <a href="#job-306032" style="color: #0090e3;"> <i class="fas fa-chevron-right"></i>  Solliciteer direct </a>
                            </div>
                        </a>
                        <a href="#job-306032">
                            <div class="card" style="width:210%; color:black; margin-top:10px;">
                                <h4 style="font-size: none; margin-bottom:10px; color:black;"> <b style="">Oproep Kraamverzorgende </b></h4>
                                <p style="margin-bottom:0px !important; color:black;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Bepaal zelf waar je werkt
                                </p>
                                <p style="margin-bottom:0px !important; color:black; margin-top:5px;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Bepaal zelf wanneer je werkt
                                </p>
                                <p style="margin-bottom:10px !important; color:black; margin-top:5px;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Bepaal zelf hoelang je werkt
                                </p>
                                <a href="#job-306032" style="color: #0090e3;"> <i class="fas fa-chevron-right"></i>  Solliciteer direct </a>
                            </div>
                        </a>
                        <a href="#job-305226">
                            <div class="card" style="width:210%; color:black;">
                                <h4 style="font-size: none; margin-bottom:10px; color:black;"> 
                                <b>Leerling Kraamverzorgende </b></h4>
                                <p style="margin-bottom:0px !important; color:black;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Baangarantie na diplomering
                                </p>
                                <p style="margin-bottom:0px !important; color:black; margin-top:5px;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Erkend leerbedrijf
                                </p>
                                <p style="margin-bottom:10px !important; color:black; margin-top:5px;">
                                    <img src="img/checkmark.png" style="width:15px; height:15px; margin-right:9px;"/>
                                    Persoonlijke  begeleiding
                                </p>
                                <a href="#job-306032" style="color: #0090e3;"> <i class="fas fa-chevron-right"></i>  Solliciteer direct </a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- VACATURES SECTIE EINDE -->
    
    <style>
        @media (max-width:950px)
        {
            .text row
            {
                width:100% !important;
            }
            
            #teaserBody
            {
                width:100% !important;
                margin-right: 0px !important;
            }
            
            #artikel2
            {
                margin-left:0px !important;
            }

            .c-teaser__cite
            {
                margin-right:0px !important;
            }
        }
        
    </style>

    <!--ARTIKEL 1 TEKST SECTIE-->
    <blockquote id="artikel1" class="c-teaser__quote reverse">
        <div id="teaserBody" class="c-teaser__body">
                <div class="text row">
                <div class="body col-md-6" style="">
            <h3 class="section-title">" Ieder gezin is anders. "</h3>
            <p>"Ik vind het heel leuk om mensen te helpen en voor ze te zorgen, in de mooiste tijd van hun leven: de eerste week dat ze de baby hebben. Vlak na de bevalling, dat vind ik eigenlijk het allermooiste wat er is. Ik houd van het verzorgende karakter van mijn werk. En natuurlijk van het werken met baby’s en gelukkige ouders. Het is vaak een rollercoaster van emoties wat de ouders ervaren. Ik vind het leuk om er dan in zo’n belangrijke levensperiode voor die ouders te zijn, ze te helpen en te leren hoe ze voor de baby moeten zorgen."</p>
            </div>
            </div>
        </div>
        <footer class="c-teaser__cite" style="margin-right:40px;" >
            <img class="c-teaser__img u-blur-lazyimage" style="border-radius: 50%; height: 150;" src="img/foto2.png">
            <div class="author">
                <cite>Daniëlle van Baalen</cite>Kraamverzorgende Flex
            </div>
        </footer>
    </blockquote>
    <!--ARTIKEL 1 TEKST SECTIE EINDE-->
    
    
    <!--ARTIKEL 2 TEKST SECTIE-->
    <blockquote id="artikel2" class="c-teaser__quote reverse">
            <div id="teaserBody" class="c-teaser__body">
                <div class="text row">
                    <div class="body col-md-6">
                        <h3 class="section-title">" Ik ben daar echt Annemiek. "</h3>
                        <p>"Ze denken ontzettend met je mee, ze zoeken een passende functie bij je. Dat is mogelijk dankzij de meerdere werkprofielen die ze hebben. Je kan op ‘Rooster’ werken, je kan ‘Flex’ werken, je kan meer uren werken, je kan minder uren werken. Zij passen zich eigenlijk aan, aan jouw wensen. Je bent een persoon. Ik ben daar echt Annemiek."</p>
                    </div>
                </div>
            </div>
            <footer id="fotoCont" class="c-teaser__cite">
                <img class="c-teaser__img u-blur-lazyimage" src="img/foto1.png">
                <div class="author">
                    <cite>Annemiek Castien</cite>Kraamverzorgende Senior
                </div>
            </footer>
    </blockquote>
    
        <style>
            
            .body col-md-6
            {
                margin-right:30px;
            }
            
            #artikel1
            {
                margin-left:57px;
            }
            
            #artikel2
            {
                margin-left:0px !important;
            }
            
            .c-teaser__quote
            {
                margin-bottom:40px;
                margin-top: 40;
            }
    
            #fotoCont
            {
                order:0 !important;
                margin-right:40px;
            }
    
            #artikel2 img
                {
                    border-radius: 50%; 
                    height: 150;
                }
    
            @media (min-width:500px)
            {
            }
    
            @media (max-width:950px)
            {
                .body col-md-6
                {
                    margin-right:0px !important;
                }
                
                #fotoCont
                {
                   order:-1 !important;
                }
                
                #artikel1
                {
                    margin-left:0px !important;
                }
            }
        </style>
    <!--ARTIKEL 2 TEKST SECTIE EINDE-->


    <!-- ARTIKEL TEKST SECTIE -->
    <div style="clear:both;">
        <section class="o-layer o-layer--flat t-bg--dark  t-color--dark">
            <img class="lazyload foto floatleft" src="gallery/foto6.png">
            
            <div class="o-retain">
                <div class="o-layout__cell  u-fraction--6of12@desk tekstdiv">
                    <div id="text">
                            <h3 id="kennismaken" class="section-title">Vrijblijvend kennismaken</h3>
                            <p style="margin-bottom:0px !important;">
                                We begrijpen heel goed dat het best spannend kan zijn om een andere werkgever te zoeken. Zeker als je al een lange tijd bij dezelfde werkgever in dienst bent. Laten we daarom voordat je officieel solliciteert vrijblijvend kennismaken. We vertellen je graag wat je van Kraamzorg Mama kunt verwachten en op welke zekerheden je bij ons kunt rekenen. Natuurlijk zijn we erg benieuwd wat jij van ons verwacht en wat wij kunnen doen om aan jouw wensen te voldoen. Uiteraard behandelen we sollicitaties en kennismakingsgesprekken 100% vertrouwelijk.
                            </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- ARTIKEL TEKST SECTIE EINDE -->


    <!--ARTIKELEN SECTIE-->
    <section style="padding-top: 52px;padding-bottom: 22px;" class="o-layer o-layer--large">
            <div class="o-retain">
                <div class="o-layout  o-layout--gutter  o-layout--equalheight">
                    <div id="sfeerimpressie" class="o-layout__cell u-fraction--1of1  u-fraction--6of12@lap">
                        <a href="sfeerimpressie" class="c-card-button  c-card-button--has-wave  o-tile  u-mb c-card-button--water" data-gtm="trackClickCtaCard">
                            <span class="c-card-button__top">
                                <span class="c-card-button__image-wrap">
                                    <img src="gallery/foto4.jpg" >
                                </span>
                            </span>
                            <span class="c-card-button__bottom">
                                <span class="c-card-button__link">
                                    <span class="c-card-button__wrap-wave">
                                        <svg role="presentation" aria-hidden="true" class="c-card-button__wave">
                                            <use xlink:href="/static/dunea.icons.svg#wave-flat"></use>
                                        </svg>
                                    </span>
                                    <span class="o-layout  o-layout--gutter-tiny  o-layout--align-bottom">
                                        <span class="c-card-button__link__text  o-layout__cell  o-layout__cell--fill"><i style="margin-right:8px;" class="fas fa-chevron-right"></i>Sfeerimpressie</span>
                                        <span class="o-layout__cell  o-layout__cell--fit">
                                            <svg class="c-icon  c-icon--inline" role="presentation" aria-hidden="true">
                                                <use xlink:href="/static/dunea.icons.svg#icon-arrow-right"></use>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                <div id="sollicitatie" class="o-layout__cell u-fraction--1of1  u-fraction--6of12@lap">
                    <a href="sollicitatie" class="c-card-button  c-card-button--has-wave  o-tile  u-mb c-card-button--water" data-gtm="trackClickCtaCard">
                        <span class="c-card-button__top">
                            <span class="c-card-button__image-wrap">
                                <img style="height:116%;" src="gallery/foto13.png">
                            </span>
                        </span>
                        <span class="c-card-button__bottom">
                            <span class="c-card-button__link">
                                    <span class="c-card-button__wrap-wave">
                                        <svg role="presentation" aria-hidden="true" class="c-card-button__wave">
                                            <use xlink:href="/static/dunea.icons.svg#wave-flat"></use>
                                        </svg>
                                    </span>
                                <span class="o-layout  o-layout--gutter-tiny  o-layout--align-bottom">
                                    <span class="c-card-button__link__text  o-layout__cell  o-layout__cell--fill"><i style="margin-right:8px;" class="fas fa-chevron-right"></i>Veelgestelde vragen</span>
                                    <span class="o-layout__cell  o-layout__cell--fit">
                                        <svg class="c-icon  c-icon--inline" role="presentation" aria-hidden="true">
                                            <use xlink:href="/static/dunea.icons.svg#icon-arrow-right"></use>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </span>
                     </a>
                </div>
            </div>
        </div>
    </section>
    <!--ARTIKELEN SECTIE EINDE-->


    <style>
            #vragenContainer p,.accordion,h4{font-weight:0!important}#vragenContainer{padding-left:15px;padding-right:15px}@media (min-width:768px){#vragenContainer{width:850px!important}}
    </style>
    <!-- VRAGEN SECTIE EINDE -->


    <!-- FOOTER SECTIE-->
    <?php include("footer.html") ?>
    <!-- FOOTER SECTIE EINDE -->


    <script>
        const observer = lozad();
        observer.observe();

    </script>

   


    <svg xmlns="http://www.w3.org/2000/svg" id="recruitee-careers-svg-container" style="opacity: 0; position: absolute; z-index: -100; left: -100%; top: -100%;">
        <symbol id="recruitee-careers-loader" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
            <circle cx="50" cy="50" r="45" stroke-dasharray="212.05750411731105 70.68583470577033" stroke="red" fill="none" stroke-width="10" transform="rotate(339.222 50 50)">
                <animateTransform attributeName="transform" type="rotate" values="0 50 50;180 50 50;360 50 50;" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite" begin="0s"></animateTransform>
            </circle>
        </symbol>
    </svg>
</body>

</html>
