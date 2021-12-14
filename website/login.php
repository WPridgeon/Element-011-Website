<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

// if(isset($_SESSION['user'])) // If session is accessed unaccordingly redirect to the login page
//        {
//            header("Location:index.php");  
//        }


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_db";
// database details, password is left blank as there isnt one needed to connect




// Create a connection to the database
$sqlconn = new mysqli($servername, $username, $password, $dbname);
// an error message if the connection is not made to the database
if ($sqlconn->connect_error) {
  die("Connection failed: " . $sqlconn->connect_error);
}

$user = $_POST["Username"];
$pass = $_POST["Password"];

if (is_string($user) and is_string($pass) == TRUE){
    $sql = "SELECT usersPwd FROM users WHERE usersName='$user'";
    $result = $sqlconn->query($sql);
    if ($result->num_rows > 0){
        while($row = mysqli_fetch_array($result))
            $hashed_pass = $row['usersPwd'];
        if (password_verify($pass, $hashed_pass)){
            $_SESSION['user'] = $user;
            header("Location:products.php");
        // this is the connection to the databse that fetchs information and links to the website

        } else{
            echo "login failed";
        }
    } 
}
$sqlconn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&family=Poppins:wght@200;400&display=swap" rel="stylesheet" />
            
        <link rel="stylesheet" href="style.css" />
        <title>Login</title>
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
            <section class="presentation">
                <div class="introduction">

                    <div id="box">
                        <form class="box" action="./login.php" method="post">
                            <h1>Login</h1>
                            <input type="text" name="Username" placeholder="Username">
                            <input type="password" name="Password" placeholder="Password">
                            <button type="submit" name="submit">Login</button>
                        </form>
                        <!--This is the signup form that allows visitors to the website to sign in -->
                    </div>
                </div>
                <div class="cover">
                    <img src="trees1.png" alt="trees">
                </div>
                <div class="cover2">
                    <img src="trees2.png" alt="trees1">
                </div>
            </section>

            <img class="big-cloud" src="big-cloud.svg" alt="" />
            <img class="mid-cloud" src="mid-cloud.svg" alt="" />
            <img class="small-cloud" src="small-cloud.svg" alt="" />
            <img class="semi-cloud" src="semi-cloud.svg" alt="" />
            <img class="demi-cloud" src="demi-cloud.svg" alt="" />
            <img class="daisy" src="daisy.svg" alt="" />
            <!--This is the signup form that allows visitors to the website to sign in -->

        </main>

    </body>
</html>