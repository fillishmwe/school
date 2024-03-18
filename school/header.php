<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wisdom school</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="font-awesome.css">
   
    <style>
          *{
             padding:0px;
             margin:0px;
             box-sizing: border-box;
        /*}
        body{
            background-image: url("nnn.jpg");
            background-size: cover;
            cursor:pointer;
            background-repeat:no-repeat;
            
            box-sizing:border-box;
            font-family: sans-serif;

      */  }
       
        .navbar{
             background-color:rgb(11, 53, 11);
             height:5em;
            text-align: center;
        }
        .navbar ul{
            margin-left:17em;
            margin-right:4em;
            text-align: center;
            text-decoration:none;
        }
            .navbar ul li{
                  list-style:none;
                  padding:1em;
                  display: inline-flex;
                  text-decoration:none;
            }
            .navbar ul li a{
                 list-style:none;
                 color:white;
                 text-decoration: none;

            }
           
            .logo img{
                 width:8em;
                 height:4em;
                 position:absolute;
                 margin-left:6em;
                 font-family: sans-serif;
                 margin-top:-2em;
            }
    </style>
</head>
<body>
     <form method="POST">
       
             <div class="navbar">
                  <div class="logo">
                     <img src="logo2.gif">
                  </div>
                 <ul>
                     <li> <a href="home.php"><i class="fa fa-home"></i>HOME</a></li>
                     <li> <a href="trade.php">OUR SCHOOL</a></li>
                     <li> <a href="about.php">ABOUT US</a></li>
                     <li> <a href="gallery.php">GALLERY</a></li>
                     <li> <a href="contact.php">CONTACT US</a></li>
                     <li> <a href="logout.php">Logout</a></li>
                     
                 </ul>
                
             </div>

            
     </form>
</body>
</html>