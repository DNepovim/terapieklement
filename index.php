<?php include "head.html"; ?>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-81864233-1', 'auto');
	    ga('send', 'pageview');
</script>
<div class="nav-box">
    <div class="nav-box__content">
        <span class="nav-box__title nav"><a href="#tit" class="button">Martin Klement</a></span>
        <span class="nav-box__ham"><span></span><span></span><span></span></span>
        <ul class="nav-box__nav nav">
            <li class="first"><a class="button" href="#tit">Úvod</a></li>
            <li><a class="button" href="#terapeut">Terapeut</a></li>
            <li><a class="button" href="#ome">O&thinsp;mě</a></li>
            <li><a class="button" href="#jakpracuji">Jak pracuji</a></li>
            <li><a class="button" href="#podminky">Podmínky</a></li>
            <li><a class="button" href="#kontakt">Kontakt</a></li>
        </ul>
    </div>
</div>
<div id="tit"></div>
<div class="bg-1" id="null">
    <img src="img/background5.JPG">
</div>
<div class="ct-1">
    <div class="ct-1__img">
        <img src="img/martin_ret_crop_rect.jpg" class="title-img">
    </div>
    <h1>Martin Klement</h1>

    <h2>terapeut</h2>

    <span class="quote">&bdquo;Správně vidíme jen srdcem.<br> Co je důležité, je očím neviditelné.&ldquo;<br>
    <span class="quote__autor">Antoine de Saint-Exupéry</span></span>
</div>
<div class="bg-2 bg" id="terapeut">
    <span class="ct-2 ct">
        <?php include "pages/uvod.html" ?>
    </span>
</div>
<div class="bg-3__container" id="ome">

    <div class="bg-3 bg">
    <span class="ct-3 ct">
        <img src="img/Martin_LS.jpg">
        <?php include "pages/ome.html" ?>
    </span>
    </div>
</div>
<div class="ct-4__img">
    <img src="img/office.jpg">
</div>
<div class="bg-4 bg" id="jakpracuji">
    <span class="ct-4 ct">
        <?php include "pages/jakpracuji.html"; ?>
    </span>
</div>
<div class="bg-5 bg" id="podminky">
    <span class="ct-5 ct">
        <?php include "pages/podminky.php"; ?>
    </span>
</div>
<div class="bg-6 bg " id="kontakt">
    <?php include 'pages/kontakt.php'; ?>
    <div class="bg-6__grey"></div>
    <iframe class="bg-6--grey"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.118372369343!2d14.400645415677964!3d50.07837382198562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b94fc049b459b%3A0xf4a87c2ec46a57cb!2s31%2C+2+patro%2C+Hole%C4%8Dkova+332%2F5%2C+150+00+Praha-Sm%C3%ADchov!5e1!3m2!1scs!2scz!4v1538504717593"
            frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
