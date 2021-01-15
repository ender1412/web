<?php
  include "../db.php";

  //각 변수에 write.php에서 input name값들을 저장한다
  $username = $_SESSION['username'];
  $userpw= password_hash($_POST['pw'],PASSWORD_DEFAULT);
  $title = $_POST['title'];
  $content = $_POST['content'];
  $date = date('Y-m=d');
  if($username&&$userpw&&$title&&$content){
    $sql = mq("insert into notice_board(name,pw,title,content,date) values('".$username."','".$userpw."','".$title."','".$content."','".$date."')");
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='../page/writepost.php';</script>";
  }else{
    echo"<script>
    alert('글쓰기에 실패했습니다.');
    hisory.back();</script>";
  }
