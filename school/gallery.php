 

 <?php
  include 'header.php';
  include 'connect.php';
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
    <style>
        body{
             background-image:url(rgb);
        }
         h2{
            text-align: center;
             background-color:rgb(16, 212, 16);
             height:3em;
             color:black; 
         }
         table{
            margin-left:2em;
            
            margin-top:3em;
             text-align:center;
         }
         table tr td{
            padding:0.15em;
         }
         .footer{
             background-color: rgb(10, 36, 10);
             color: white;
             text-align: center;
             height:3em;
             box-sizing: border-box;
         }
    </style>
</head>
<body>
       <header>
          <h2>School Gallery</h2>
       </header>
      <div class="img-gallery">
          <table>
             <tr>
                 <td> 
                    <img src="nnn.jpg" width="250" height="250">
                </td>
                <td> 
                    <img src="R (1).jpg" width="250" height="250">
                </td>
                <td> 
                    <img src="grre.jpg" width="250" height="250">
                </td>
                <td> 
                    <img src="img5.jpg" width="250" height="250">
                </td>
             
             </tr>
             <tr>
                <td> 
                   <img src="img2.jpg"width="250" height="250">
               </td>
               <td> 
                   <img src="img3.jpg" width="250" height="250">
               </td>
               <td> 
                   <img src="img4.jpg" width="250" height="250">
               </td>
               <td> 
                   <img src="unnamed-6.jpg" width="250" height="250">
               </td>
        
            </tr>
            <tr>
                <td> 
                   <img src="ggg.jpg"width="250" height="250">
               </td>
               <td> 
                   <img src="img.jpg" width="250" height="250">
               </td>
               <td> 
                   <img src="img4.jpg" width="250" height="250">
               </td>
               <td> 
                   <img src="img6.jpg"width="250" height="250">
               </td>
            </tr>
          </table>
      </div>
       <div class="footer">
              @copyright xwisdom school99@gmail.com
       </div>
</body>
</html>