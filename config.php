<?php
$con=mysqli_connect("localhost","root","","curd");
if($con){
    echo"database connected succssesfully";
}
else{
    echo"error";
}

?>