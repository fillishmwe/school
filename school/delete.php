<?php 
  include 'connect.php';

  $id=$_GET['id'];
  $del=mysqli_query($conn, "DELETE FROM trade WHERE id='$id'");
  if($del){

      echo"deleted data";
      header("location:alltrade.php");

  }else{
     echo"no deleted data";
     header("location:view trade.php");
  }

?>