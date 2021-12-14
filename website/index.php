<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!--Meta Charset allows the text to be interpretted -->
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&family=Poppins:wght@200;400&display=swap" rel="stylesheet" />
            
        <link rel="stylesheet" href="style.css" />
        <!-- This links the stylesheet to the webpage to allow design-->
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
                        <!-- This is the links for the navigation bar to go through the website-->
                    </ul>
                </nav>
                <div class="cart">
                    <img src="gardener.png" alt="logo">
                    <br><a class="nav-link" href="logout.php">Log Out</a>
                
                </div>
        </header>

        <main>
            <section class="presentation">
                <div class="introduction">
                    <div class="intro-text">
                        <h1>Giving The Help That Your Plants Need</h1>
                        <p>
                            The brand new service where your Plants will look healthy again.
                        </p>
                        <!-- This is the main part of the index page allowing layout design for visualisation-->
                    </div>
                    <div class="cta">
                        <a href="products.php">  <button class="cta-add">Products</button> </a>
                    </div>
                </div>
                <div class="cover">
                    <img src="trees1.png" alt="trees">
                </div>
                <div class="cover2">
                    <img src="trees2.png" alt="trees1">
                </div>
            <!--This part is for detail with pictures to give the page some character -->
                
            </section>

            <img class="big-cloud" src="big-cloud.svg" alt="" />
            <img class="mid-cloud" src="mid-cloud.svg" alt="" />
            <img class="small-cloud" src="small-cloud.svg" alt="" />
            <img class="semi-cloud" src="semi-cloud.svg" alt="" />
            <img class="demi-cloud" src="demi-cloud.svg" alt="" />
            <img class="sunflower" src="sunflower.svg" alt="" />
            <img class="sunflower2" src="sunflower.svg" alt="" />
            <img class="daisy" src="daisy.svg" alt="" />
            <img class="daisy2" src="daisy.svg" alt="" />
            <!--Links to images that I have used -->

        </main>

    </body>
</html>