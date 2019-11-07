<?php
  unlink('data/'.basename($_POST['id']));  //basename을 넣으므으로써 id값이 파일명만 들어갈 수 있도록 나머지 정보는 쳐내는 보안방법
  header('Location: /index.php');  //홈으로 보내버리기
 ?>
