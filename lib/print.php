<?php
function print_title(){
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']); //basename -> 부모디렉토리를 못보게 할 수 있는 보안방법
    echo htmlspecialchars(file_get_contents("data/".$basename));
  } else {
    echo "Hello, PHP";
    }
  }
function print_list(){
  $list = scandir('./data');  //scandir을 이용하면 원하는 디렉토리 파일 목록과
    //현재 디렉토리 .와 부모 디렉토리 ..를 배열에 담아서 return 해주는 함수
  $i = 0;
  while($i < count($list)){
    $title = htmlspecialchars($list[$i]);
    if($list[$i] != '.'){
      if($list[$i] != '..'){
    echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
    }
  }
    $i = $i + 1;
  }
}
 ?>
