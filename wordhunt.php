<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/wordhunt.css"/>
    <link rel="stylesheet" href="css/sub_header_footer_styles.css"/>

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


    <title>Letters</title>
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
</head>

<body class="orangutan">

    <?php include("includes/sub_header.php"); ?>

    <div class="container mb-5">
        <h1 class="h1" id="title">Word Hunt</h1>
        <div class="input">
            <input class="search-field" onkeypress="handle(event)" type="text" placeholder="Search words..." />
        </div>
        <div class="grid">
            <div class="wotd-box">
                <h1 id="wotd">Word of The Day</h1>
                <hr id="line-wotd">
                <h1 id="h1">bijou </h1> <p>(n)</p>
                <h2 id="pronunce">BEE-zhoo</h2>
                <hr id="line-wotd">
                <p>1 : a small dainty usually ornamental piece of delicate workmanship : jewel

                   2 : something delicate, elegant, or highly prized</p>
            </div>
            <div class="result">
                <h1 id="word" class="word"></h1>
                <p class="phonetics"></p>
                <audio class="audio" controls></audio>
                <p class="meaningheading">Meaning</p>
                <p class="word-definition"></p>
                <p class="meaningheading">Synonyms</p>
                <div class="synonyms"></div>
            </div>
        </div>
    </div>

    <!-- script tag here -->
    <script src="js/wordhunt.js"></script>
    <script src="js/game.js" type="text/javascript"></script>

    <!-- *obscure dolphin noises* -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>

</html>