<?php
session_start();//세션아이디가 이미 존재하는지를 확인하고 존재하지않으면 새로운 아이디를 만듭니다.
 $db = new mysqli("localhost","root","jowoosung123","custom");
 $db->set_charset("utf8");

 function mq($sql){//mq함수는 외부에서 선언된 $sql를 함수내에서 쓸수있게해주는함수이다
   global $db;
   return $db->query($sql);
 }
 ?>
