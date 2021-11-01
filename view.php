<?php
include("config.php");

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Document</title>
</head>
<body> 
    <h3 class="text-danger">RECORDS</h3>
<table class="table table-bordered table-striped">
      <tr>
       <th>name</th>
       <th>degree</th>
       <th>phonenumber</th>
       <th>email</th>
       <th>edit</th>
       <th>delete</th>
       </tr>
         
<?php
     $sql="SELECT * FROM student";
     $res=$con->query($sql);
     if( $res-> num_rows > 0){
    while($row=$res->fetch_assoc()){
     
      $id=$row["id"];
       echo'
       
       <tr>
       <td>'.$row["name"].'</td>
       <td>'.$row["degree"].'</td>
       <td>'.$row["phonenumber"].'</td>
       <td>'.$row["email"].'</td>
       <td><button class="btn btn-info"><a href="update.php?q='.$id.'"><i class="fas fa-edit" style="color:white"></i></a></button></td>
       <td><button class="btn btn-danger"><a href="delete.php?q='.$id.'"><i class="fas fa-trash"style="color:white"></i></a></button></td>
       </tr>
       
       ';
       
    }
     }
     
    ?>
    </table> 
   </body>
</html>
 