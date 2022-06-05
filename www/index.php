<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Geek Universe Referral Statistics Page</title>
  </head>
  <body>
    <?php 
     if (!(isset($_GET["ref"])))
     {
      header("Location: welcome.html");
      exit();
     }
     $ref = $_GET["ref"];
     require ('ref.php');
    ?>
    <nav class="navbar navbar-light bg-light"> <span class="navbar-brand mb-0 h1">Geek Universe Referral Statistics Page</span> </nav>
    <br>
    <div class = "container">
    <p class = "container">
        <b>Referral ID: </b><?php print ($ref); ?>
    </p>
<br>
    <p class = "container">
        <b>Referral Count: </b><?php print ($score); ?>
    </p>
<br>
    <p class = "container">
        <b>Amount Earned: </b>US$<?php print ($income); ?>
    </p>
    <br>
    <p class = "container">
        <b> This page gets updated within 24 hours after referral is made. </b>
    </p>
  </div>
  </body>
</html>
    