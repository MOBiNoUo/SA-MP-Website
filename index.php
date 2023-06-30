<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عنوان سرور سمپ شما</title>
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="./font/font.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <script src="./js/loading.js"></script>
</head>
<body>
<div id="preloader">
  <div id="spinner"></div>
</div>

    <div class="bg-image">
     <?php include("header.php"); ?>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1><?php include("title.php"); ?></h1>
              <p><?php include("description.php"); ?></p>
              <hr>
              <?php include("socialmedia.php"); ?>
            </div>
          </div>
        </div>
      </div>
      
      <button class="floating-button mb-2">
        <a href="samp://<?php include("config.php"); echo "$ip" . ":" . "$port"; ?>"><span><?php include("querysamp.php"); ?> / 100</span></a>
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
       </button>
    
       <button id="sampcopy" class="floating-button-l mb-2">
        <p id="ip" class="d-none"><?php include("config.php"); echo "$hostname" . ":" . "$port"; ?></p>
  <span id="serverhost"><?php include("config.php"); echo "$hostname" . ":" . "$port"; ?></span>
  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M272 0H396.1c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9V336c0 26.5-21.5 48-48 48H272c-26.5 0-48-21.5-48-48V48c0-26.5 21.5-48 48-48zM48 128H192v64H64V448H256V416h64v48c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48z"/></svg>
 </button>
<div class="fixed-bottom bg-mobin text-center">
<?php include("copyright.php"); ?>
</div>
    
   <script src="./js/index.js"></script>
    <script src="./js/loading.js"></script>
</body>
</html>