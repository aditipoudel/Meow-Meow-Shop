<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            Meow-Meow Cat Shop
        </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    </head>
    <body>
        <div class="header">
            <h1>Meow-Meow Shop</h1>
            <img src="img/logo.png" class="logo_img">
        </div>
        <hr>
        <div class="navbar">
            <ul class="ul-flexy">
               
                <li><a href="add.php">Add</a></li>
                <li><a href="index.php">View</a></li>
            </ul>
        </div>
        <hr><div class="form">
            
        <form class="form1" method="post" action="">
                 Name:<br>
            <input  class="text" type="text" name="txtname" required><br>
            Age:<br>
            <input  class="text" type="text" name="txtage" required><br>
            Color:<br>
            <input  class="text" type="text" name="txtcolor" required><br>
            <input  type="submit" name="submit" value="Upload" class="btn-submit"
                    >        </form>
        </div>
        <div class="wrapper">
<span><i class="Shopping-cart"></i></span>

         <div class="clear">
         </div>
         <div class="Items">
             <div class="item">
                 <img src="./images/images (7).jpeg " width="280px" height="230px" alt="">
                 <div class="nav">
                    <img src="./images/images (7).jpeg">
                    <img src="./images/images (12).jpeg">
                </div>
                <div class="price">$80</div>
                 </div>
                 <br>
                 <div class="product-info">
         <div class="name">Slipless side cut dress</div>
         <div class="dis">Woman Casual/Party dress</div>
                 </div>
                 
 </div>
    </body>
</html>
<?php
    // $conn
    $conn=mysqli_connect("localhost","root","","databasesample");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['submit']))
   
    #this is for button click
    {
        $a=$_POST['txtname'];
        $b=$_POST['txtage'];
        $c=$_POST['txtcolor'];
        $que="insert into meowmeowdb(name, age,color) values('$a', '$b','$c')";
         if (mysqli_query($conn,$que)) 
        {
            echo "<script> window.alert('Thank you! Data has been stored')</script>";
        }
        else
        {
            echo "<script> window.alert('Oops! something went wrong, try again.')</script>";
        }

                
    }
?>