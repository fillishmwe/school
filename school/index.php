<?php  

include "connect.php";

 
 if(isset($_POST['submit'])){
 
 $user = $_POST['username'];
 $pass = $_POST['password'];
 
 $sel= mysqli_query($conn, "SELECT * FROM user WHERE username='$user' AND password='$pass'");
     
      if (mysqli_num_rows($sel)>0) {

         session_start();
          $_SESSION['user']=$user;
        echo"<script>alert('successfully'),</script>";
           header("location:home.php");
      } else{
         echo"<script>alert('not found'),</script>";
         header("location:index.php");
      }
 }
  
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
          form{
             
              width:24em;
              height: 24em;
              margin-left:27em;
              margin-top:8em;
              text-align:center;
              border-radius:4px;
              border-style: ridge;
          }
          .content{
            padding:2em;
        
          }
          input[type="text"]{
            width:23em;
            border-radius:6px;
            height:2.45em;

          }
          input[type="submit"]{
            background-color:rgb(16, 77, 16);
            border-radius:6px;
            color:white;
             width:23em;
             height:3em;
          }
    </style>
</head>
<body>
     <form method="POST">
     <h2>LOGIN FORM</h2>
     <div class="content">
        username:
        <input type="text" name="username"><br><br>
         password:
        <input type="text" name="password"><br><br><br>
        <input type="submit" name="submit" value="login"><br><br>
        <p> Are you sure to login here?</p>

     </div>
        
     </form>
        
        
</body>
</html>