<?php
   $conn=mysqli_connect("localhost", "root", "", "wisdom");
    if(!$conn){
        echo"no database connection";
    }
?>