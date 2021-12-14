<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

if(!isset($_SESSION['user'])) // If session is accessed unaccordingly redirect to the login page
       {
           header("Location:index.php");  
       }


$servername = "localhost";
$user = "root";
$password = "";
$dbname = "signup_db";




$newpassword = $_POST["Password"];
$username = $_SESSION["user"];
if ($newpassword != "NULL" or "null" or ""){
    $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);
$sqlconn = new mysqli($servername, $user, $password, $dbname);
if ($sqlconn->connect_error) {
    die("Connection failed: " . $sqlconn->connect_error);
    }
$sql = "UPDATE users SET usersPwd='$newpassword' where usersName='$username'";
$result = $sqlconn->query($sql);
//header("Location:Edit.php"); 
echo "<p1>Password Updated</p1>";
//this is the message seen when the password has been updated
}
?>
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
                    </ul> <!--Main Navigation Bar -->
                </nav>
                <div class="cart">
                    <img src="gardener.png" alt="logo">
                    <br><a class="nav-link" href="logout.php">Log Out</a>
                
                </div>
        </header>
            <div class="box1">
            <form action="Edit.php" method="post">
                <h1>Change Password</h1>
                <input type="password" name="Password" placeholder="New Password">
                <button type="submit" name="submit">Change Details</button>
            </form>
            </div>
        <main>
            <div class="trees1">
                <img src="trees1.png" alt="trees">
            </div>
            <div class="trees2">
                <img src="trees2.png" alt="trees1">
            </div>

            
            <img class="big-cloud" src="big-cloud.svg" alt="" />
            <img class="mid-cloud" src="mid-cloud.svg" alt="" />
            <img class="small-cloud" src="small-cloud.svg" alt="" />
            <img class="semi-cloud" src="semi-cloud.svg" alt="" />
            <img class="demi-cloud" src="demi-cloud.svg" alt="" />
            <!--This is the signup form that allows visitors to the website to sign in -->

        </main>
    </body>
</html>