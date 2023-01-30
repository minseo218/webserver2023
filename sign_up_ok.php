<?php
  include ('sql_conn.php');
  $id = $_POST['userid'];
  $pw = $_POST['userpw'];

  $sql = "insert into user(userid, userpw) values ('".$id."','".$pw."')";
  $result = mysqli_query($conn,$sql);
  
  echo "
  <script>
    window.alert('성공적으로 회원가입이 되었답니다 :)')
    location.href = 'index.php'
  </script>";
?>