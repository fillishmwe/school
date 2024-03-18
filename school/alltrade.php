<?php
  include 'header.php';
  include 'connect.php';
   $sel=mysqli_query($conn,"SELECT * FROM trade");


?>

 <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all trades</title>
    <style>
          table{
             margin-left:6em;
             width:80em;
             margin-top:-15em;

          }
    </style>
   </head>
   <body>
     <table border="3">
             <th>id</th>
             <th>tradename</th>
             <th colspan="2">Action</th>
              
             <?php
              while ($data=mysqli_fetch_assoc($sel)){
                
             ?>
               <tr> 
                 <td> <a href="<?php echo $data['id']; ?>"></a></td>
                 <td> <a href="<?php echo $data['tradename']; ?>"></a></td>
                 
                  <td> <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">EDIT</a></td>
                  <td> <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">DELETE</a></td>
                  <td> <a href="trainer.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">ADD TRAINER</a></td>
               </tr>
             <?php
            }
             ?></table>
     
</body>
</html>