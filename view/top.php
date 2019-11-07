<?php
  require_once('lib/print.php');  //밑에 print_title();가 lib/print.php에서 왔다라는 것을 알려줌
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
       ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
    <?php
    print_list();
      ?>
    </ol>
