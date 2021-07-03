<?php

    include_once ('./path.php');
    include_once (ROOT_PATH . '/controllers/posts.php');
    $post_id = $_GET["id"];

    $posts = new Post($conn);
    $post = $posts->getPost($post_id);
    
    $totalPost = $posts->countPost($post["user_id"]);
    var_dump($post);

    if (isset($_POST["add-comment"])) {
        $comment_content = $_POST["comment"];
        $comments = new Comment($conn);
        $comment = $comments->createComment($comment_content, $post_id);
    }

    //var_dump($totalPost['id']);
    // var_dump($_SESSION);
?>

<!doctype html>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Document</title>
    <link rel="stylesheet" href="css/community.css">
    <link rel="stylesheet" href="css/sub_header_footer_styles.css">
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
</head>

<body>


    <?php include_once('./includes/sub_header.php'); ?>

    <div class="container page-wrapper">
        <!--Navigation-->
        <div class="div m-3">
            <a href="posts.php">Back to Posts</a>
            <hr>
        </div>

        <!--Topic Section-->
        <div class="topic-container">
            <!--Original thread-->
            <div class="head">
                <div class="authors">Author</div>
                <div class="content">Topic: <?php echo $post["title"]; ?></div>
            </div>

            <div class="body">
                <div class="authors">
                    <div class="username"><a href=""><?php echo $post["username"]; ?></a></div>
                    <div>Role: <?php if($post["admin"] == 0):echo "Normal User"; else: echo "Admin"; endif;?></div>
                    <img src="https://cdn.pixabay.com/photo/2015/11/06/13/27/ninja-1027877_960_720.jpg" alt=""
                        id="avatar">
                    <div>Number of Posts: <u><?php echo $totalPost['id'];  ?></u></div>

                </div>
                <div class="content">
                    <?php echo $post["content"]; ?>
                </div>
            </div>
        </div>

        <!--Comment Area-->
        <div class="comment-area" id="comment-area">
            <textarea name="comment" id="" placeholder="comment here ... "></textarea>
            <button type="submit" name="add-comment">Submit </button>
        </div>

        <!--Comments Section-->
        <div class="container comments py-5">
            <div class="body">
                <div class="authors">
                    <div class="username"><a href="">AnotherUser</a></div>
                    <div>Role</div>
                    <img src="https://cdn.pixabay.com/photo/2015/11/06/13/27/ninja-1027877_960_720.jpg" alt=""
                        id="avatar">
                    <div>Posts: <u>455</u></div>
                </div>
                <div class="content">
                    Just a comment of the above random topic.
                    <br>To see how it looks like.
                    <br><br>
                    Nothing more and nothing less.
                </div>
            </div>
            <hr>

        </div>


    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <?php include_once('./includes/sub_footer.php'); ?>
</body>

</html>