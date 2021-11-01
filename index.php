<?php
 include("config.php") 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CURD</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
  <h1 class="text-danger">Curd operation using Php and Mysql</h1>
<div class="form col-lg-4 col-md-4 mt-10  col-xm-12 col-sm-12" >
    <form  action=""  method="POST">
    <div class="form-group">
    <lable>NAME:</lable>
    <input type="text" class="form-control" name="name" placeholder="Enter the name"  autocomplete="off"required>
    </div>
    <div class="form-group">
    <lable>DEGREE:</lable>
    <input type="text"  class="form-control "name="degree" placeholder="Enter the degree"  autocomplete="off" required>
    </div>
    <div class="form-group">
    <lable>PHONENUMBER:</lable>
    <input type="text"  class="form-control" name="phone" placeholder="Enter the number"  autocomplete="off" required>
    </div>
    <div class="form-group">
    <lable>EMAIL:</lable>
    <input type="email" class="form-control" name="email"placeholder="Enter the email" autocomplete="off" required>
    </div>
    
    <div class="form-group">
    <span id="error-btn" ></span>
    </div>
    <div class="form-group">
    <button id="btn" name="sub" class=" form-control btn btn-info">SUBMIT</button>
    </div>
    
    </form>
    </div>
    <div id="table" class="col-lg-8 col-md-8 col-xm-12 col-sm-12">
      <button class="btn btn-success" onclick="load()">View Record</button>
    
    </div>
    </div>
    </div>
   <script>
 
   function load() {
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("table").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "view.php");
  xhttp.send();
  let btn=document.getElementBy("btn");
  
}
</script>

</body>
</html>

<?php

if($submit=isset($_POST['sub'])){
  $name=$_POST["name"];
  $degree=$_POST["degree"];
  $phone=$_POST["phone"];
  $email=$_POST["email"];
 
   
  $sql ="INSERT INTO student( name, degree, phonenumber, email) VALUES ( '$name', '$degree', '$phone', '$email')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "record added successfully";
  
  }
  else{
    echo" failed";
  }
}
 ?>
 