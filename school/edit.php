 <?php
 
   include "header.php";
   include "connect.php";
    
    $id=$_GET['id'];
    $sel="SELECT tradename FROM trade WHERE id='$id'";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          table{
            margin-left:30em;
             margin-top:-18em;
             border-radius:5px;
             border-style: ridge;
              height:15em;
             width:40em;
        }
        input[type="text"]{
            width:30em;
             margin-left:3em;
             border-radius:5px;
             height:2.45em;
        }
          
        input[type="submit"]{
            width:29em;
             border-radius:5px;
             height:2.45em;
            background-color:rgb(16, 77, 16);

        }
    </style>
    
</head>
<body>
    <form method="POST">
    <h2> EDIT TRADE</h2>

        <?php
           while($data=mysqli_fetch_assoc($sel)){
        
        ?>
         
    <table>
         <tr>
             <td>id</td>
             <td> <input type="text" name="id" value="<?php echo $data['id']; ?>" required="" ></td>
         </tr>
         <tr>
            <td>tradename</td>
            <td> <input type="text" name="trade_name" value="<?php echo $data['trade_name']; ?>" required=""> </td>
         </tr>
          <tr>
             <td colspan="5" align="center"> <input type="submit" name="submit"></td>
          </tr>
           <?php
           }
           ?>
     </table>
    </form>
     
</body>
</html>
