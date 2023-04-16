<!DOCTYPE html>
<html lang="en">
<?php
include_once("config.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Food Delivery</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body itemscope>
    <main>
        <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>

        <header class="stick">
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo">
                        <h1 itemprop="headline"><a href="index.php" title="Home" itemprop="url"><img src="assets/images/logo2.png" alt="logo.png" itemprop="image"></a></h1>
                    </div>
                    <nav>
                        <div class="menu-sec">
                            <ul>
                                <li class="menu-item-has-children"><a href="#" title="HOMEPAGES" itemprop="url"><span class="red-clr">FOOD ORDERING</span>HOMEPAGES</a>
                                    <ul class="sub-dropdown">
                                        <li><a href="index.php" title="HOMEPAGE 1" itemprop="url">HOMEPAGE 1</a></li>
                                        <li><a href="index.php" title="HOMEPAGE 2" itemprop="url">HOMEPAGE 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="RESTAURANTS" itemprop="url"><span class="red-clr">REAL FOOD</span>RESTAURANTS</a>
                                    <ul class="sub-dropdown">
                                        <li><a href="restaurant-found.html" title="RESTAURANT 1" itemprop="url">RESTAURANT 1</a></li>
                                        <li><a href="restaurant-found2.html" title="RESTAURANT 2" itemprop="url">RESTAURANT 2</a></li>
                                        <li><a href="restaurant-detail.html" title="RESTAURANT DETAILS" itemprop="url">RESTAURANT DETAILS</a></li>
                                        <li><a href="food-recipes.html" title="RESTAURANT DETAILS" itemprop="url">FOOD RECIPES</a></li>
                                        <li><a href="our-articles.html" title="RESTAURANT DETAILS" itemprop="url">OUR ARTICLES</a></li>
                                        <li><a href="our-menu.html" title="RESTAURANT DETAILS" itemprop="url">OUR MENU</a></li>
                                        <li><a href="our-services.html" title="RESTAURANT DETAILS" itemprop="url">OUR SERVICES</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="PAGES" itemprop="url"><span class="red-clr">REAL FOOD</span>PAGES</a>
                                    <ul class="sub-dropdown">
                                        <li class="menu-item-has-children"><a href="#" title="BLOG" itemprop="url">BLOG</a>
                                            <ul class="sub-dropdown">
                                                <li class="menu-item-has-children"><a href="#" title="BLOG LAYOUTS" itemprop="url">BLOG LAYOUTS</a>
                                                    <ul class="sub-dropdown">
                                                        <li><a href="blog-right-sidebar.html" title="BLOG WITH RIGHT SIDEBAR" itemprop="url">BLOG (W.R.S)</a></li>
                                                        <li><a href="blog-left-sidebar.html" title="BLOG WITH LEFT SIDEBAR" itemprop="url">BLOG (W.L.S)</a></li>
                                                        <li><a href="blog.html" title="BLOG WITH NO SIDEBAR" itemprop="url">BLOG</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#" title="BLOG DETAIL" itemprop="url">BLOG DETAIL</a>
                                                    <ul class="sub-dropdown">
                                                        <li><a href="blog-detail-right-sidebar.html" title="BLOG DETAIL WITH RIGHT SIDEBAR" itemprop="url">BLOG DETAIL (W.R.S)</a></li>
                                                        <li><a href="blog-detail-left-sidebar.html" title="BLOG DETAIL WITH LEFT SIDEBAR" itemprop="url">BLOG DETAIL (W.L.S)</a></li>
                                                        <li><a href="blog-detail.html" title="BLOG DETAIL WITH NO SIDEBAR" itemprop="url">BLOG DETAIL</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#" title="BLOG FORMATES" itemprop="url">BLOG FORMATES</a>
                                                    <ul class="sub-dropdown">
                                                        <li><a href="blog-detail-video.html" title="BLOG DETAIL WITH VIDEO" itemprop="url">BLOG DETAIL (VIDEO)</a></li>
                                                        <li><a href="blog-detail-audio.html" title="BLOG DETAIL WITH AUDIO" itemprop="url">BLOG DETAIL (AUDIO)</a></li>
                                                        <li><a href="blog-detail-carousel.html" title="BLOG DETAIL WITH CAROUSEL" itemprop="url">BLOG DETAIL (CAROUSEL)</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="SPECIAL PAGES" itemprop="url">SPECIAL PAGES</a>
                                            <ul class="sub-dropdown">
                                                <li><a href="404.html" title="404 ERROR" itemprop="url">404 ERROR</a></li>
                                                <li><a href="search-found.html" title="SEARCH FOUND" itemprop="url">SEARCH FOUND</a></li>
                                                <li><a href="search-not-found.html" title="SEARCH NOT FOUND" itemprop="url">SEARCH NOT FOUND</a></li>
                                                <li><a href="coming-soon.html" title="COMING SOON" itemprop="url">COMING SOON</a></li>
                                                <li><a href="login-register.html" title="LOGIN & REGISTER" itemprop="url">LOGIN & REGISTER</a></li>
                                                <li><a href="price-table.html" title="PRICE TABLE" itemprop="url">PRICE TABLE</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="GALLERY" itemprop="url">GALLERY</a>
                                            <ul class="sub-dropdown">
                                                <li><a href="gallery.html" title="FOOD GALLERY" itemprop="url">FOOD GALLERY</a></li>
                                                <li><a href="gallery-detail.html" title="GALLERY DETAIL" itemprop="url">GALLERY DETAIL</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="register-reservation.php" title="REGISTER RESERVATION" itemprop="url">REGISTER RESERVATION</a></li>
                                        <li><a href="how-it-works.html" title="HOW IT WORKS" itemprop="url">HOW IT WORKS</a></li>
                                        <li><a href="dashboard.html" title="USER PROFILE" itemprop="url">USER PROFILE</a></li>
                                        <li><a href="about-us.html" title="ABOUT US" itemprop="url">ABOUT US</a></li>
                                        <li><a href="food-detail.html" title="FOOD DETAIL" itemprop="url">FOOD DETAIL</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html" title="CONTACT US" itemprop="url"><span class="red-clr">REAL FOOD</span>CONTACT US</a></li>
                            </ul>
                            <a class="red-bg brd-rd4" href="register-reservation.php" title="Register" itemprop="url">REGISTER RESTAURANT</a>
                        </div>
                    </nav><!-- Navigation -->
                </div>
            </div><!-- Logo Menu Section -->
        </header><!-- Header -->

        <h1 align="center">Delivery Address</h1>
        <?php
        // connect to the database
        include_once("config.php");
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if (isset($_POST['cmd']) && $_POST['cmd'] == 'add') {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $sql = "INSERT INTO UserInfo (name, phone, email, address)
              VALUES ('$name', '$phone', '$email', '$address')";
            if ($conn->query($sql) === TRUE) {
                echo "Address saved successfully<br/>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>

        <!-- text boxes for user to enter information -->
        <table align="center">
            <tr>
                <td valign="top">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <input type="hidden" name="cmd" value="add" />
                        <table>
                            <tr>
                                <th>Name: </th>
                                <td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <th>Phone Number: </th>
                                <td><input type="text" name="phone"></td>
                            </tr>
                            <tr>
                                <th>Email: </th>
                                <td><input type="text" name="email"></td>
                            </tr>
                            <tr>
                                <th>Address: </th>
                                <td><input type="text" name="address"></td>
                            </tr>

                        </table>
                        &emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" value="Add" />
                    </form>
                </td>
            </tr>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/main.js"></script>
        </table>
</body>

</html>