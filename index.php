<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!--using FontAwesome--------------->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Home</title>
    <link rel="stylesheet" href="css/main_page.css">
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
</head>

<body>

    <header id="header">
        <a href="#" class="logo">Letters</a>
        <div class="toggle"></div>
        <ul class="navigation">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="wordhunt.php">Dicktionary</a></li>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Games
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="game.php">Scrambles</a>
                    <a class="dropdown-item" href="hangman.php">Hangman</a>
                </div>
            </div>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="posts.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Community
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="posts.php">Explore</a>
                        <a class="dropdown-item" href="create.php">Make a Question</a>
                    </div>
                </div>
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['username']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php if ($_SESSION['admin']) : ?>
                            <a class="dropdown-item" href="./admin/dashboard.php">Dashboard</a>
                        <?php endif; ?>
                        <?php if ($_SESSION['admin'] == 0) : ?>
                            <a class="dropdown-item" href="./client/user_dashboard.php">User Dashboard</a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            <?php else : ?>
                <li><a href="posts.php">Community</a></li>
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Join Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="login.php">Sign In</a>
                        <a class="dropdown-item" href="register.php">Sign Up</a>
                    </div>
                </div>
            <?php endif; ?>
        </ul>
    </header>

    <section class="main-banner">
        <h2 id="text"><span>It's time for a new</span><br>Adventure</h2>
        <img src="images/stars.png" id="stars" alt="">
        <img src="images/moon.png" id="moon" alt="">
        <img src="images/mountains_behind.png" id="mountains_behind" alt="">
        <img src="images/mountains_front.png" id="mountains_front" alt="">
    </section>
    <?php
    // echo '<pre>';
    //var_dump($_SESSION);
    // echo '</pre>';
    ?>
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="images/moon-1.png" class="img-fluid" alt="">
                </div>

                <div class="col-8">
                    <h4 class="font-weight-bold">The best new way to learn English.</h4>
                    <p class="py-4">Learning with Letters is fun and addictive. Earn points for correct answers, race
                        against the clock, and level up. Our bite-sized lessons are effective, and we have proof that it
                        works.
                    </p>
                    <a href="#" class="font-weight-bold"><i class="fas fa-caret-right"></i>SEE HOW WE DO IT</a>
                </div>
            </div>
        </div>
    </section>

    <hr class="mx-auto">

    <section class="details">

        <div class="container">
            <h4 class="font-weight-bold text-center">Letters Helps You...</h4>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0" style="width: 18rem;">
                        <img class="card-img-top mx-auto" src="images/moon-2.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center font-weight-bolder">You bring the brains, <br> we???ll bring
                                everything else</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0" style="width: 18rem;">
                        <img class="card-img-top mx-auto" src="images/moon-3.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center font-weight-bolder">Your next win is <br> just a fact away
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0" style="width: 18rem;">
                        <img class="card-img-top mx-auto" src="images/moon-4.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center font-weight-bolder">Don???t get frustrated. <br> Get it done.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <hr class="mx-auto">

    <section class="areas">
        <div class="container">
            <h4 class="font-weight-bold text-center">In Various Areas...</h4>
            <div class="row py-3">
                <div class="col">
                    <img class="img-fluid" src="images/languages.png" alt="">
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/science.png" alt="">
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/arts.png" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="images/math.png" alt="">
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/social.png" alt="">
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/other.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <hr class="mx-auto">

    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="images/moon-5.png" class="img-fluid" alt="">
                </div>

                <div class="col-8">
                    <h4 class="font-weight-bold">Boost your English with Letters.</h4>
                    <p class="py-4">Learning English on Letters is completely free. Master any vocabulary or grammar,
                        one success at a time.</p>
                    <a href="#" class="font-weight-bold"><i class="fas fa-caret-right"></i>LEARN MORE ABOUT OUR
                        COMMUNITY</a>
                </div>
            </div>
        </div>
    </section>

    <hr class="mx-auto">
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h4 class="font-weight-bold">Learn anytime, anywhere..</h4>
                    <p class="py-4">Make your breaks and commutes more productive with our iPhone and Android apps.
                        Download them and see why Apple and Google gave us their highest accolades.</p>
                    <button type="button" class="btn btn-outline-dark">Download on <br><i class="fab fa-apple"></i></button>
                    <button type="button" class="btn btn-outline-primary">Get it on <br><i class="fab fa-google-play"></i></button>
                </div>

                <div class="col-4">
                    <img src="images/moon-6.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <hr class="mx-auto">

    <section class="team">
        <div class="container">
            <h4 class="text-center font-weight-bold">Letters Founders</h4>
            <p class="text-center font-weight-bolder">Letters was founded in 2021 by five college friends.</p>

            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="images/Khang.png" alt="">
                    <p class="text-center">Khang Nguyen</p>
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/Linh.png" alt="">
                    <p class="text-center">Linh Vo</p>
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/Minh.png" alt="">
                    <p class="text-center">Minh Truong</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="images/Phuc.png" alt="">
                    <p class="text-center">Phuc Tran</p>
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/Thu.png" alt="">
                    <p class="text-center">Thu Tran</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center mb-3">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1">
                        <i class="fab fa-instagram"> </i>
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">?? 2021 Copyright:
            <a href="#"> Letters</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script src="js/main_page.js"></script>
    <!-- Script for header -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>

</html>