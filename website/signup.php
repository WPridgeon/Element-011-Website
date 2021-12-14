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

        <main>
            <div class="sign-up-main">
                    <h1>Signup</h1>
                    <form id="form1"action="signup.php" method="post">
                        <input type="text" name="user" placeholder="Username:">
                        <input type="text" name="email" placeholder="Email:">                    
                        <input type="password" name="pass" placeholder="Password">
                        <button type="submit" name="signup-submit">Signup</button>
                    </form> <!--This is the main form that users input to get access to the website -->
                </div>
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
            <!--images for the website -->
        </main>
    </body>
</html>
<?php
error_reporting(E_ERROR | E_PARSE); //reports errors if found
session_start();
if(isset($_SESSION['user'])) // If session is accessed unaccordingly redirect to the login page
       {
           header("Location:index.php");  
       }


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_db";
// database connection




// Create a connection to the database by using:
$sqlconn = new mysqli($servername, $username, $password, $dbname);
// write and error message if the connection is not made to the database
if ($sqlconn->connect_error) {
  die("Connection failed: " . $sqlconn->connect_error);
}

$user = $_POST["user"];
$email = $_POST["email"];
$usersPass = $_POST["pass"];

if ($user and $email != "NULL"){
$sql = "SELECT * FROM users WHERE usersName='$user' or usersEmail='$email'";
$result = $sqlconn->query($sql);
// fetching an SQL query from the database

if ($result->num_rows >= 1) {
  // output data of each row
    echo "<h1>Username or Email taken.</h1>";
  } else {
    //using password hash that protects the user with increased security
    $usersPass = password_hash($usersPass, PASSWORD_DEFAULT); // hashing passwords
    $SQL_INSERT = "INSERT INTO users (usersName	, usersEmail, usersPwd) VALUES (?,?,?)";
    $stmt = $sqlconn->prepare($SQL_INSERT);

    if($stmt = $sqlconn->prepare($SQL_INSERT)) {        
        $stmt->bind_param('sss', $user, $email, $usersPass);
        $stmt->execute();

        header("Location:./index.php");
        
    } else {
        $error = $db_found->errno . ' ' . $db_found->error;
        echo $error;
  }// if the databse isnt found then this will throw an error
}
}
$sqlconn->close();
?>