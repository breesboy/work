<?php
include 'connect.php';
 $a=$_POST['id'];
 $b=$_POST['name'];
 $c=$_POST['PASSWORD'];
 $d=$_POST['location'];

 $sql="INSERT INTO  user VALUES('$a','$b','$c','$d')";
 
 $a=mysqli_query($conn,$sql);
 header("location:studentform.php")
?>