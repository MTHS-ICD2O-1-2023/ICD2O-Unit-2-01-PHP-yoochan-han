<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <meta name="description" content="My first webpage, with js" />
 <meta name="keywords" content="mths, ics2o" />
 <meta name="author" content="Yoochan Han" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="./css/style.css" />
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
 <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
 <link rel="manifest" href="site.webmanifest" />
 <title>My first webpage, with JavaScript</title>
</head>
<body>
<?php
echo '<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>';
echo '<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">';
echo '<header class="mdl-layout__header">';
echo '<div class="mdl-layout__header-row">';
echo '<span class="mdl-layout-title">My first webpage, with JavaScript</span>';
echo '</div>';
echo '</header>';
echo '<main class="mdl-layout__content">';
echo '<div class="right-image">';
echo '<img src="./images/notebook-animation.svg" alt="laptop image" class="myimg" />';
echo '</div>';
echo '<br />';
echo '<script>function myButtonClicked() {';
echo 'document.getElementById("hello-world").innerHTML = "<p>Hello, World!</p>"; }';
echo '</script>';
echo '<!-- Accent-colored raised button with ripple -->';
echo '<div id="mybutton">';
echo '<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"';
echo 'onclick="myButtonClicked()">';
echo 'Say Hello, World!';
echo '</button>';
echo '</div>';
echo '<br />';
echo '<br />';
echo '<div id="page-content-answer">';
echo '<div id="hello-world"></div>';
echo '</div>';
echo '</main>';
echo '</div>';
?>
</body>
</html>  
