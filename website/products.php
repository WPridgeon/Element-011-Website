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
        
        <table>
            <tr>
                <th>ItemName</th>
                <th>ItemImage</th>
                <th>Price</th>
                <th>Quantity</th>
                <!--These are the titles for the database details that will be brought in -->
                <?php
                $sqlconn = mysqli_connect("localhost", "root", "", "signup_db");
                if ($sqlconn->connect_error) {
                    die("Connection Failed: ". $sqlconn-> connect_error);
                }
                $sql = "SELECT ItemName, ItemImage, Price, Quantity from products";
                $result = $sqlconn-> query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["ItemName"] ."</td><td>". '<img src="'.$row['ItemImage'].'" alt="" style="width:90px;height:90px" />'."</td><td>". $row["Price"] ."</td><td>". $row["Quantity"] ."</td></tr>";
                    } //this will produce the results for the website, that links to the databse set up on MySQL
                    echo "</table>";
                }
                else {
                    echo "0 Result";
                }

                $sqlconn-> close();
                ?>
        </table>

        <main>

            <img class="big-cloud" src="big-cloud.svg" alt="" />
            <img class="mid-cloud" src="mid-cloud.svg" alt="" />
            <img class="small-cloud" src="small-cloud.svg" alt="" />
            <img class="semi-cloud" src="semi-cloud.svg" alt="" />
            <img class="demi-cloud" src="demi-cloud.svg" alt="" />
            <!--This is the signup form that allows visitors to the website to sign in -->
        </main>

    </body>
</html>