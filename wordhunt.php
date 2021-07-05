<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/wordhunt.css"/>
    <link rel="stylesheet" href="css/sub_header_footer_styles.css"/>

    <title>Letters</title>
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
</head>

<body class="orangutan">

    <?php include("includes/sub_header.php"); ?>

    <div class="container">
        <h1 class="h1">Word Hunt</h1>
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

</body>

</html>