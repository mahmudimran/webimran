 <?php
   session_start();
   include("includes/connection.php");
   $userProfileName = $_SESSION['username'];
   //check
   if(isset($userProfileName)){

   }else{
       //back to login page
       header("location:login.php");
   }


  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
       .container{
           margin-top:8vh;
       }
    </style>
 </head>
 <body>
   <div class="container text-white text-center bg-dark py-5 ">
       <h2><?php echo "&#9786; Hello " .$userProfileName; ?></h2>
       <a class="btn btn-secondary mt-2" href="logout.php">logout</a> 
   </div>
<div class="container">
    <table class="table table-bordered">
    <thead>








      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Commnets</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>



<?php 
   $query = "SELECT * FROM students ";
   $result = mysqli_query($conn, $query);


    while($row = mysqli_fetch_assoc($result))  {?>

        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['subject']; ?></td>
          <td><?php echo $row['sms']; ?></td>
          <td>
            <a class="btn btn-danger btn-sm" href="">Delete</a>
            <a class="btn btn-info btn-sm" href="">Edit</a>
            <a class="btn btn-success btn-sm" href="">View</a>
          </td>
      </tr>

   <?php }
?>



     






    </tbody>
  </table>
</div>

 </body>
</html>   