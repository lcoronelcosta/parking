<?php
 if (isset($_SESSION['mySesion'])){
    echo "<p> Bienvenido:(".$_SESSION['mySesion'].")";
  }
  else{
    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../login.php'>";
  } 
?>