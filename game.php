<?php 
    include_once("eeeeeee.php");
    include_once("controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming babi</title>
    <!-- Deco -->
    <link rel="stylesheet" href="css/game_style.css">
    <link rel="stylesheet" href="css/sub_header_footer_styles.css">
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

    <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
</head>

<body class="bodybg" id="mainbody">
    <?php include_once("includes/sub_header.php"); ?>
    <h1 id="title">Scrambles</h1>

    <div class="stats-box mx-3 d-flex align-items-center">
        <div class="gm d-flex flex-col">
            <button class="btn mode-btn" id="simple" name="simple">Simple</button>
            <button class="btn mode-btn" id="inter" name="inter">Intermediate</button>
            <button class="btn mode-btn" id="advanced" name="advanced">Advanced</button>
            <button class="btn mode-btn" id="cringe" name="cringe">Cringe</button>
        </div>
        <div class="score comedy">
            <h2 id="score-text">Score:
                <h2 id="score"> 0</h2>
            </h2>
        </div>
    </div>

    <div class="main-box" id="main-box">
        <section class="justify-content-center align-items-center d-flex">
            <div class="game-box justify-content-center align-items-center d-flex" id="game-box">
                <h2 class="notifier hidden">Wrong :3</h2>
                <h2 class="msg-box mx-5 my-3"></h2>
                <input type="text" class="hidden" id="guess-field">
                <button class="btn mt-3" id="main-btn" name="main-btn">Pick a game mode</button>
            </div>
        </section>
        <div class="my-4 text-center">
            <button class="btn" id="spaghetti">&#9825;</button>
        </div>
    </div>

    <div class="word-holder1">
        <p id="word-holder1" style="content-visibility: hidden;"><?php echo selectAllWords('1'); ?></p>
    </div>
    <div class="word-holder2">
        <p id="word-holder2" style="content-visibility: hidden;"><?php echo selectAllWords('2'); ?></p>
    </div>
    <div class="word-holder3">
        <p id="word-holder3" style="content-visibility: hidden;"><?php echo selectAllWords('3'); ?></p>
    </div>
    <div class="word-holder4">
        <p id="word-holder4" style="content-visibility: hidden;"><?php echo selectAllWords('4'); ?></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <script src="js/game.js" type="text/javascript"></script>
    <script src="js/sub_header.js"></script>
</body>

</html>