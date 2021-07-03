<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/wordhunt.css" />

    <title>Letters</title>
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
</head>

<body>

    <div class="container">
        <h1 class="h1">Word Hunt</h1>
        <div class="input">
            <input class="search-field" onkeypress="handle(event)" type="text" placeholder="Type and press enter" />
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

    <!-- script tag here -->
    <script src="js/wordhunt.js"></script>

</body>

</html>