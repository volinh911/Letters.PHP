<?php 
    include_once("eeeeeee.php");
    include_once("controllers/users.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming babi</title>
    <!-- Deco -->
    <link rel="stylesheet" href="css/scrambles_style.css">
    <link rel="stylesheet" href="css/sub_header_footer_styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!--using FontAwesome--------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bodybg" id="mainbody">
    <?php include("includes/sub_header.php"); ?>
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
                <p name="dudebro"><?php if (isset($_POST['main-btn'])) { $crap .= 1; var_dump($crap); } ?></p> <!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
                <!-- <button class="btn" id="main-btn">Click here to begin</button> -->
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

    <hr>

    <div class="leaderboard-box">
        <h1 id="lb-title">LEADERBOARD</h1>
        <hr>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="js/scrambles.js" type="text/javascript">
    </script>
</body>

</html>