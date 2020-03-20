<html>
    <head>
        <title>
            Meow-Meow Cat Shop
        </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
        <hr>
        <table>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Color</th>
   
    <?php
    // $conn
    $conn=mysqli_connect("localhost","root","","databasesample");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql="select * from meowmeowdb";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["color"]."</td><tr>";
    }
?>
    </body>
</html>

