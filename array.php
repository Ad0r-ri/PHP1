<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $coworkers = array('egoing', 'leezche', 'duru', 'taeho');  // 4개의 문자열을 갖고 있는 배열의 형식
    echo $coworkers[1].'<br>';
    echo $coworkers[3].'<br>';
    var_dump(count($coworkers));
    array_push($coworkers, 'graphittie');
    var_dump($coworkers);
    ?>
  </body>
</html>
