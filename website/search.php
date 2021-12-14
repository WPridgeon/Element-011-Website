<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&family=Poppins:wght@200;400&display=swap" rel="stylesheet" />
            
        <link rel="stylesheet" href="style.css" />
        <title>Website</title>
    </head>
    <body>
        <header>
            <div class="logobut">
            <li><a class="logobut" href="index.php">Plant Aid</a></li>
            </div>
                <nav>
                    <ul class="nav-links">
                        <li><a class="nav-link" href="login.php">Login</a></li>
                        <li><a class="nav-link" href="signup.php">SignUp</a><br><a class="nav-link" href="Edit.php">Edit Details</a>
                        <li><a class="nav-link" href="products.php">Products</a><br><a class="nav-link" href="search.php">Search</a></li>
                        <!--Main Navigation Bar -->
                    </ul>
                </nav>
                <div class="cart">
                    <img src="gardener.png" alt="logo">
                    <br><a class="nav-link" href="logout.php">Log Out</a>
                
                </div>
        </header>



<?php
error_reporting(E_ERROR | E_PARSE);


$servername = "localhost";
$user = "root";
$password = "";
$dbname = "signup_db";


$sqlconn = new mysqli($servername, $user, $password, $dbname);
if ($sqlconn->connect_error) {
    die("Connection failed: " . $sqlconn->connect_error);
    }

echo"

<div class='in-box'>
<form action=search.php method=post>
<input id='input' type=text name=product placeholder='Enter Product To Search'>
</form>
</div>
";
$product=$_POST['product'];

$sql = "SELECT * FROM products WHERE ItemName LIKE '%$product%'";

echo "<table>
<tr>
    <th>ItemName</th>
    <th>ItemImage</th>
    <th>Price</th>
    <th>Quantity</th>
";
$result = mysqli_query($sqlconn,$sql); 
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <div class='card'>
        <tr><td>". $row["ItemName"] ."</td><td>". '<img src="'.$row['ItemImage'].'" alt="" style="width:90px;height:90px" />'."</td><td>". $row["Price"] ."</td><td>". $row["Quantity"] ."</td></tr>
        </div>
    ";
    }
    echo "</table>";
?>
