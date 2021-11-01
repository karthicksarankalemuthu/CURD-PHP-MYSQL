<?php
require("config.php");
 $id=$_GET["q"];

 $sql="DELETE FROM student WHERE id=$id";
$res=mysqli_query($con,$sql);
if($res){
   header("location:index.php");
   //echo "record delete successfully";
}
?>