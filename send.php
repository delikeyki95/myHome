<?php
  header("Content-Type: text/html; charset=UTF-8");
  $conn = mysqli_connect('localhost','delikeyki','ahdtlf95!');
  mysqli_select_db($conn,'delikeyki');

  $sql = "INSERT INTO ASK(name,email,title,description) VALUES('".$_POST['ip_name']."','".$_POST['ip_email']."','".$_POST['ip_title']."','".$_POST['ip_message']."')";
  //echo $sql;
  $result = mysqli_query($conn, $sql);
  // DB 행 추가

  header('Location:http://delikeyki.dothome.co.kr/index.php');  // Redirection 기능
?>
