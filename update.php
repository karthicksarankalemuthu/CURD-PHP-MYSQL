<?php
include("config.php");


if(isset($_POST["update"]))
 {  $id=$_GET["q"];
     $up_name=$_POST["up_name"];
     $up_degree=$_POST["up_degree"];
     $up_phonenumber=$_POST["up_phone"];
     $up_email=$_POST["up_email"];
    $sql="UPDATE student SET name='$up_name',degree='$up_degree',phonenumber='$up_phonenumber',email='$up_email' WHERE id='$id'";
    $res=mysqli_query($con,$sql);
    if($res){
        header("location:index.php");
     }
}

    
  
?>
<?php
$id=$_GET["q"];
$sql="SELECT * FROM student WHERE id='$id'";
$res=$con->query($sql);
if($res->num_rows >0){
    while($row=$res->fetch_assoc()){
       $name=$row["name"];
        $degree=$row["degree"];
        $phonenumber=$row["phonenumber"];
        $email=$row["email"];
        
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <h2 class="text-danger">EDIT DATA</h2>
<div class="form col-lg-4 col-md-4 mt-10 col-sm-12" >
    <form  action=""  method="POST">
    <div class="form-group">
    <lable>NAME:</lable>
    <input type="text" class="form-control" name="up_name" autocomplete="off" required value="<?php   echo''.$name.'';?>" >
    </div>
    <div class="form-group">
    <lable>DEGREE:</lable>
    <input type="text"  class="form-control "name="up_degree" autocomplete="off" required  value="<?php   echo''.$degree.'';?>" >
    </div>
    <div class="form-group">
    <lable>PHONENUMBER:</lable>
    <input type="text"  class="form-control" name="up_phone" autocomplete="off" required value="<?php echo ''.$phonenumber.''?>"  >
    </div>
    <div class="form-group">
    <lable>EMAIL:</lable>
    <input type="email" class="form-control" name="up_email" autocomplete="off" required value="<?php echo ''.$email.''; ?>" >
    </div>
    <div class="form-group">
    <button id="btn" name="update" class=" form-control btn btn-info">UPDATE</button>
    </div>
    
    </form>
    
</div>
<div class="col-lg-8 col-md-8 col-sm-12" >
<img  class="img-responsive"  src="source/img1.png"/>
</div>
</div>
</div>
<style>
body{
   background-color:#E3EAFD;
    }
</style>
</body>
</html>

