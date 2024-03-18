<?php
 require 'home.php';
 require 'connect.php';

 if (isset($_POST['submit'])){
    $id=$_POST['id'];
    $product_name=$_POST['product_name'];
    $quantity=$_POST['quantity'];
    $date=$_POST['date'];

    $sql="INSERT INTO new_product ( 'id',product_name', 'quantity', 'date')
     VALUES('$id'$product_name', '$quantity', '$date')";

    $query=Mysqli_query($conn, $sql);

    if($query){
               echo"new product inserted";
               header("location:stockin.php");
          }else{
              echo"product not inserted";
              header("locqation:product.php");
          }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new product</title>
</head>
      <style>
        *{
           box-sizing:border-box;
        }

        h2{
           text-decoration:none;       
        }
        .form-group{
                   margin-left: 25em;
                   margin-top:-23em;
                   text-decoration:none;
        }
        button{
            border-radius:5px;
            background-color:black;
            color:white;
        }           
        
      </style>
       <body>
        
        <div class="form-group">
        <h2>NEW PRODUCT</h2>
        <label>product name</label>
        <input type="text" name="product_name" placeholder=""><br><br>
        <div class='option'>
            <select name='food'>
            <option value="maize">maize</option>
            <option value="beans">beans</option>
            <option value="rice">rice</option>
            <option value="potatoes">potatoes</option>
            <option value="cabbages">cabbages</option>
            <option value="carrots">carrots</option>
            <option value="posho">posho</option>
            <option value="ugali">ugali</option>
            <option value="vegetables">vegetables</option>
    </select>
        </div>
        <label>quantity</label>
        <input type="text" name="quantity " placeholder=""><br><br>
        <label>date</label>
        <input type="date" name="date" placeholder=""><br><br>
        <button type="submit" name=submit>ADD</button>
        
    </div>
    
</body>
</html>
