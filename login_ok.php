<?php
    include ('sql_conn.php');
    $id = $_POST['userid'];
    $pw = $_POST['userpw'];

    if (!$id) {
        echo "
        <script>
          window.alert('enter the id!');
          history.go(-1);
        </script>";
    }
    elseif (!$pw) {
        echo "
        <script>
          window.alert('enter the password!')
          history.go(-1)
        </script>";
    }
    
    else {
        $sql = "select * from user where userid='$id'";
        $result = mysqli_query($conn,$sql);
        $num1 = mysqli_num_rows($result);
       
        $sql = "select * from user where userid='$id' and userpw='$pw'";
        $result = mysqli_query($conn,$sql);
        $num2 = mysqli_num_rows($result);
        if (!$num1) {
          echo "
          <script>
            window.alert('존재하지 않는 아이디입니다.')
            history.go(-1)
            </script>";
        }
        elseif (!$num2) {
          echo "
          <script>
            window.alert('비밀번호가 틀렸습니다.')
            history.go(-1)
            </script>";
        }
        else {
          session_start();
          $user = mysqli_fetch_array($result);
          $_SESSION['userid'] = $id;
          echo "
          <script>
            window.alert('꺄악 로그인 되었어요!')
            location.href='main.php'
          </script>";
        }
      }
      mysqli_close($conn);
?>

