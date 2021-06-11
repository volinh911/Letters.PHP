<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--Progress bar-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>

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

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="includes/header_footer_styles.css">
    <link rel="stylesheet" href="includes/home_styles.css">

    <title>Letters</title>
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__img">
                    <img src="home_images/img1.png" alt="" data-speed="-2" class="move">
                    <img src="home_images/img2.png" alt="" data-speed="2" class="move">
                    <img src="home_images/img3.png" alt="" data-speed="2" class="move">
                    <img src="home_images/img4.png" alt="" data-speed="-2" class="move">
                    <img src="home_images/img5.png" alt="" data-speed="-2" class="move">
                </div>

                <div class="home__data">
                    <h1 class="home__title">Letters</h1>
                    <p class="home__description">Master any word,<br> one success at a time.</p>
                    <!--<a href="#" class="home__button">Get Started</a>-->
                    <a href="game.html" class="btn btn-warning play home__button"><i class="fas fa-play"></i> Scrambles</a>
                    <a href="hangmanthegame/hangman.html" class="btn btn-warning play home__button"><i class="fas fa-play"></i> HangMan</a>
                </div>
            </div>
        </section>
    </main>

    <!--section summary-->
    <section class="summary">
        <div class="wrapper">
            <div class="percent">
                <div class="circle">
                    <div class="bar"></div>
                    <div class="box"><span></span></div>
                </div>
            </div>

            <div class="text">
                <p>of students who use <span>Letters</span> report higher grades.</p>
            </div>
        </div>
    </section>

    <!--section intro-->
    <section class="intro">
        <h5 class="heading container">Know Us More</h5>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0" style="width: 18rem;">
                        <img class="card-img-top" src="home_images/4.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center font-weight-bolder">You bring the brains, <br> we’ll bring everything else</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0" style="width: 18rem;">
                        <img class="card-img-top" src="home_images/5.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center font-weight-bolder">Your next win is <br> just a fact away</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0" style="width: 18rem;">
                        <img class="card-img-top" src="home_images/6.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center font-weight-bolder">Don’t get frustrated. <br> Get it done.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section areas-->
    <section class="areas">
        <h5 class="heading container">Let's give it a try</h5>
        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-sm">
                    <img src="home_images/language.png" class="img-fluid image__img" alt="">
                    <div class="image-overlay">
                        <div class="image-title">
                            Languages
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="home_images/science.jpg" class="img-fluid image__img" alt="">
                    <div class="image-overlay">
                        <div class="image-title">
                            Science
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="home_images/arts&humanities.png" class="img-fluid image__img" alt="">
                    <div class="image-overlay">
                        <div class="image-title">
                            Arts and Humanities
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm">
                    <img src="home_images/maths.jpg" class="img-fluid image__img" alt="">
                    <div class="image-overlay">
                        <div class="image-title">
                            Maths
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="home_images/socialscience.jpg" class="img-fluid image__img" alt="">
                    <div class="image-overlay">
                        <div class="image-title">
                            Social Science
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="home_images/other.png" class="img-fluid image__img" alt="">
                    <div class="image-overlay">
                        <div class="image-title">
                            Other
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section team-->
    <section class="team">
        <h5 class="heading container">Meet Our Team</h5>
        <div class="our-team">
            <!--box-1----------->
            <div class="box">
                <!--top-bar---------------->
                <div class="top-bar"></div>
                <!--nav------------->
                <div class="nav">
                    <!--verify-icon-------->
                    <i class="verify fas fa-check-circle"></i>
                    <!--heart-btn--------------->
                    <input class="heart-btn" id="heart-btn" type="checkbox" />
                    <label class="heart"></label>
                </div>
                <!--img and details---------------->
                <div class="details">
                    <img alt="" src="home_images/Khang.jpg" />
                    <strong>Khang Nguyen</strong>
                    <p>1959009 - 19BIT2</p>
                </div>
                <!--view-btns------------------->
                <div class="button">
                    <a href="#"><i class="fas fa-clipboard-list"></i>Assign</a>
                    <a href="#"><i class="fas fa-eye"></i>View</a>
                </div>
            </div>
            <!--box-2----------->
            <div class="box">
                <!--top-bar---------------->
                <div class="top-bar"></div>
                <!--nav------------->
                <div class="nav">
                    <!--verify-icon-------->
                    <i class="verify fas fa-check-circle"></i>
                    <!--heart-btn--------------->
                    <input class="heart-btn" id="heart-btn2" type="checkbox" />
                    <label class="heart"></label>
                </div>
                <!--img and details---------------->
                <div class="details">
                    <img alt="" src="home_images/Linh.jpg" />
                    <strong>Linh Vo</strong>
                    <p>1959013 - 19BIT2</p>
                </div>
                <!--view-btns------------------->
                <div class="button">
                    <a href="#"><i class="fas fa-clipboard-list"></i>Assign</a>
                    <a href="#"><i class="fas fa-eye"></i>View</a>
                </div>
            </div>
            <!--box-3----------->
            <div class="box">
                <!--top-bar---------------->
                <div class="top-bar"></div>
                <!--nav------------->
                <div class="nav">
                    <!--verify-icon-------->
                    <i class="verify fas fa-check-circle"></i>
                    <!--heart-btn--------------->
                    <input class="heart-btn" id="heart-btn3" type="checkbox" />
                    <label class="heart"></label>
                </div>
                <!--img and details---------------->
                <div class="details">
                    <img alt="" src="home_images/Minh.png" />
                    <strong>Minh Truong</strong>
                    <p>1959018 - 19BIT2</p>
                </div>
                <!--view-btns------------------->
                <div class="button">
                    <a href="#"><i class="fas fa-clipboard-list"></i>Assign</a>
                    <a href="#"><i class="fas fa-eye"></i>View</a>
                </div>
            </div>
            <!--box-4----------->
            <div class="box">
                <!--top-bar---------------->
                <div class="top-bar"></div>
                <!--nav------------->
                <div class="nav">
                    <!--verify-icon-------->
                    <i class="verify fas fa-check-circle"></i>
                    <!--heart-btn--------------->
                    <input class="heart-btn" id="heart-btn4" type="checkbox" />
                    <label class="heart"></label>
                </div>
                <!--img and details---------------->
                <div class="details">
                    <img alt="" src="home_images/Phuc.png" />
                    <strong>Phuc Tran</strong>
                    <p>1959029 - 19BIT2</p>
                </div>
                <!--view-btns------------------->
                <div class="button">
                    <a href="#"><i class="fas fa-clipboard-list"></i>Assign</a>
                    <a href="#"><i class="fas fa-eye"></i>View</a>
                </div>
            </div>
        </div>
    </section>

    <!--section app-->
    <section class="get-app">
        <div class="container">
            <h2 class="heading">Take our game with you</h2>

            <ul>
                <li><img src="home_images/appstore.svg" alt=""></li>
                <li><img src="home_images/ggplay.png" alt=""></li>
            </ul>
        </div>
    </section>

    <section class="end">
        <div class="slider">
            <input type="radio" name="slider" checked="checked">
            <div class="imgBx">
                <img src="home_images/end1.jpg" alt="">
                <div class="end-content">
                    <h2>Letters is for</h2>
                    <p>“ <em>Tonight I work, so tomorrow I can go places</em>” students</p>
                    <a href="game.html" class="btn btn-dark btn-lg play"><i class="fas fa-play"></i> Scrambles</a>
                    <a href="hangmanthegame/hangman.html" class="btn btn-outline-light btn-lg play"><i class="fas fa-play"></i> HangMan</a>
                </div>
            </div>
            <input type="radio" name="slider">
            <div class="imgBx">
                <img src="home_images/end2.jpg" alt="">
                <div class="end-content">
                    <h2>Letters is for</h2>
                    <p>“ <em>I’ll sleep when exams are over</em>” students</p>
                    <a href="game.html" class="btn btn-dark btn-lg play"><i class="fas fa-play"></i> Scrambles</a>
                    <a href="hangmanthegame/hangman.html" class="btn btn-outline-light btn-lg play"><i class="fas fa-play"></i> HangMan</a>
                </div>
            </div>
            <input type="radio" name="slider">
            <div class="imgBx">
                <img src="home_images/end3.jpg" alt="">
                <div class="end-content">
                    <h2>Letters is for</h2>
                    <p>“ <em>Get through exams to get to vacation</em>” students</p>
                    <a href="game.html" class="btn btn-dark btn-lg play"><i class="fas fa-play"></i> Scrambles</a>
                    <a href="hangmanthegame/hangman.html" class="btn btn-outline-light btn-lg play"><i class="fas fa-play"></i> HangMan</a>
                </div>
            </div>
        </div>
    </section>

    <?php
    include 'includes/footer.php';
    ?>

    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!--===== MAIN JS =====-->
    <script src="includes/header_footer_main.js"></script>
    <script src="includes/home_main.js"></script>
</body>

</html>