<!DOCTYPE html>
<?php include "../db.php";?>

<html lang="kr" dir="ltr">
<head>
  <meta charset="utf-8" />
    <title>게시판글쓰기</title>

  </head>
  <body>
    <div id="board_write">
      <h1><a href="main.php">메인페이지</a></h1>
      <h4>글을 작성하는 공간입니다.</h4>
      <div id="write_area">
        <form action="../member/write_ok.php" method="post">
          <div id="in_title">
            <textarea name="title" id="utitle" row="1" cols="55" placeholder="제목" naxlength="100" required></textarea>
          </div>
          <div class="wi_line"></div>
          <div di="in_content">
            <textarea name="content" id="ucontent" placeholder="내용" row="1" cols="55" placeholder="제목" naxlength="100" required></textarea>
          </div>
          <div id="in_pw">
            <input type="password" name="pw" id="upw" placeholder="비밀번호" required>
          </div>
          <div class="bt_se">
            <button type="submit">글 작성</button>
          </div>
        </form>
      </div>
    </div>
  </body>
  </html>
