<?php
    if(isset($_SESSION['user'])){
      
      
       session_destroy();
       session_inset();
      }

        echo"<script> alert('are you sure to logout?'), location.href='index.php'</script>"

    
?>