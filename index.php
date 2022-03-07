<?php 
$u = $_GET["u"] ; 
$utm_source = $_GET["utm_source"] ;
$previous = $_SERVER['HTTP_REFERER'];

/* if ($previous == "https://l.instagram.com/" && ( $utm_source == "ig_bio" || $utm_source == "insider" ) ){

}else{
  header('Location: ./404.html');
  die();
} */

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@<?php echo $u?> IG Link Redirection Services</title>
  <link rel="stylesheet" href="./oui-css/oui.css">
  <link rel="stylesheet" href="./oui-css/style.css">
</head>

<body>

  <div class="containerone">

    <h1 class="center lang bold" key="linkretit">Instagram Bio Link Redirection Services</h1>

    <br>
    <div>
      <div class="oui-bubble">
        <img alt="icon image" id="imgprocess" src="./photo.webp"
          class="oui-image-cover" alt="this is the icon image of this website" />

        <br>

        <h2 class="center bold list-font">@<?php echo $u?></h2>

      </div>

    </div>

      <br>

      <div class="oui-bubble list-font ">

          <p class="oui-overlay-bubble-item bold left lang" key="language">Language</p>
          <br>

          <ul>
            <li class="oui-bubble-item"><p class="translate left" id="en"><blue class="blue bold">1</blue>&nbsp;&nbsp;English (Hong Kong)<tick class="tick lang" key="entick"> ✓</tick></p></li>
            <hr>
            <li class="oui-bubble-item"><p class="translate left" id="zh-Hant"><blue class="blue bold">2</blue>&nbsp;&nbsp;繁體中文 (香港)<tick class="tick lang" key="zhtick"> </tick></p></li>
            <hr>
          </ul>

      </div>

    <br>

    <div class="oui-bubble list-font ">
      <p class="oui-overlay-bubble-item bold left lang" key="links">Links</p>
      <ul class="link-list uppdown">
        <?php include 'data.php' ;?>
      </ul>
    </div>

    <br>

    <div class="oui-bubble other">
      <h1 class="oui-overlay-bubble-item bold left list-font lang" key="other">Other</h1>
      <div class="center font-120">
        <a href="https://github.com/ricehung29/" class="btn oui-button oui-button--active " key="">Github</a>
        <a href="https://twitter.com/ricehunghk?s=09" class="btn oui-button oui-button--active " key="">Twitter</a>
      </div>
      <br>
    </div>

      <br>

      <div class="oui-bubble center little-bold ">
        <p class="oui-overlay-bubble-item small-text">
          This website was developed using <a href="https://oneuiweb.dev/#/">One UI Web</a> CSS framework<br> To learn more about One UI , please check the following link 
          <br> <a href="https://github.com/SamsungInternet/OneUI-Web">One UI Web Github</a> &nbsp;&nbsp; <a href="https://www.samsung.com/hk/apps/one-ui/">One UI offical website</a>
          <br>Visit the <a href="https://github.com/ricehung29/oneuiweb_linkinbio">Github Repository</a> for more open sourced details <br> 
        </p>
      </div>

    <br>

    <div class="oui-bubble center little-bold">
      <p class="oui-overlay-bubble-item lang" key="developer">This page was developed and hosted by @<?php echo $u ?> </p>
      
      <p>© Copyright 2016-
        <script>document.write(new Date().getFullYear());</script> @<?php echo $u?> 
        All rights reserved <br>
      </p>
    </div>

    <br>

  </div>



</body>

<script src="./oui-css/scripts/oui.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="./lang.js"></script>

</html>