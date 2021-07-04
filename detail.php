<?php

    include_once ('./path.php');
    include_once (ROOT_PATH . '/controllers/posts.php');
    $post_id = $_GET["id"];

    if (isset($_SESSION["user_id"])) {
        $user_id = $_SESSION["user_id"];
    }
    
    // Get post qua id
    $posts = new Post($conn);
    $post = $posts->getPost($post_id);

    // Dem post roi luu vao bien, bien day van la array
    $totalPost = $posts->countPost($post["user_id"]);

    // Lay comment
    $comments = new Comment($post_id,$conn);
    $userComments= $comments->showComments();

    // Add comment
    if (isset($_POST["add-comment"])) {
        $comment_content = $_POST["comment"];
        $comment = $comments->checkComment($user_id, $post_id, $comment_content);
        // var_dump($userComments['0']);
        $errors = $comments->errors;
    }

    // Edit comment
    $commentRows = "";
    $update = false;    
    if (isset($_POST["edit-comment"])) {
        $update = true;
        $id = $_POST["edit-comment"];
        $_SESSION["comment-id"] = $id;
        $commentRow = $comments->getComment($id); 
        $commentRows = $commentRow["content"]; //Tach array
    } 

    if(isset($_POST["update-comment"])){
        $editCommentID = $_SESSION["comment-id"];
        // var_dump($editCommentID);
        $comment_content = $_POST["comment"];
        // var_dump($comment_content);
        $updated_comment = $comments->editComment($editCommentID, $comment_content);
    }

    // Delete comment
    if (isset($_POST["delete-comment"])) {
        $deleteCommentID = $_POST["delete-comment"];
        $comments->deleteComment($deleteCommentID);
    } 
      
    // Delete post
    if (isset($_POST["delete-post"])) {
        $posts->deletePost($post_id);
    } 

    // Edit Post
    if(isset($_POST['edit-post'])){
        $_SESSION['post_id']= $post_id;
        $_SESSION['edit']= "1";
        header("Location: create.php");
    }

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
                <!-- Neu nguoi dung hien tai == author cua post thi duoc edit/delete -->
                <?php if($user_id == $post['user_id'] || $_SESSION["admin"] == 1): ?>

                <form action="detail.php?id=<?php echo $post_id;?>" method="POST">
                    <button type="submit" name="delete-post">Delete
                    </button>

                    <a href="create.php"><button type="submit" name="edit-post">Edit
                    </button></a>
                </form>
                
                <?php endif; ?>

            </div>

            <div class="body">
                <div class="authors">
                    <div class="username"><a href=""><?php echo $post["username"]; ?></a></div>
                    <!-- Role admin/user -->
                    <div>Role: <?php if($post["admin"] == 0):echo "Normal User"; else: echo "Admin"; endif;?></div>
                    <!-- Khong profile image thi hinh mac dinh -->
                    <img src="<?php if ($post['image_profile'] != null): echo $post['image_profile']; else: echo "https://cdn.pixabay.com/photo/2015/11/06/13/27/ninja-1027877_960_720.jpg"; endif; ?>" alt=""
                        id="avatar">
                        <!-- Dem post Author -->
                    <div>Number of Posts: <u><?php echo $totalPost['id'];  ?></u></div>
                </div>

                <!-- Noi dung comment -->
                <div class="content">
                    <?php echo $post["content"]; ?>
                </div>
            </div>
        </div>

        <!--Comment Area-->
        <?php if (isset($_SESSION["user_id"])):?>
        <form action="detail.php?id=<?php echo $post_id;?>" method="POST">
            <div class="comment-area" id="comment-area">
                <!-- Neu edit se dua noi dung truoc khi sua cho nguoi dung -->
                <textarea name="comment" id="" placeholder="comment here ... "><?php echo $commentRows;?></textarea>
                <!-- Neu khong phai sua thi comment bth -->
                <?php if($update == false): ?>
                <button type="submit" name="add-comment">Submit </button>
                <?php else: ?>
                <button type="submit" name="update-comment">Update </button>
                <?php endif; ?>
            </div>
        </form>

        <!-- Khong dang nhap khong duoc comment -->
        <?php else: ?>
        <div class="mt-5 col-md-6 text-center">
            <h2 class="display-5">Please Login to Comment!</h2>
            <p>Create an account or login to post to the website.</p>
            <button type="button" class="btn btn-block btn-outline-primary"><a href="login.php"><i
                        class="fas fa-sign-in-alt"></i> Create Account/Login</a> </button>
        </div>
        <?php endif; ?>

        <!--Comments Section-->
        <!-- In comment -->
        <?php foreach($userComments as $userComment):?>
        <div class="container comments py-5">
            <div class="body">
                <div class="authors">
                    <div class="username"><a href=""><?php echo $userComment['username']; ?></a></div>
                    <!-- Role admin/user -->
                    <div>Role <?php if ($userComment['admin'] == 0): echo "Normal User"; else: echo "Admin"; endif; ?>
                    </div>
                    <!-- Khong hinh = hinh mac dinh -->
                    <img src="<?php if ($userComment['image_profile'] != null): echo $userComment['image_profile']; else: echo "https://cdn.pixabay.com/photo/2015/11/06/13/27/ninja-1027877_960_720.jpg"; endif;?>"
                        alt="" id="avatar">
                    <!-- Dem posts cua nguoi dung -->
                    <!-- Neu chua post gi se tra ra null->loi nen set = 0 -->
                    <!-- Lay value tu key -->
                    <div>Number of Posts:
                        <?php if($posts->countPost($userComment['user_id']) < 1): echo "0"; else: echo implode($posts->countPost($userComment['user_id'])); endif; ?>
                        <u></u>
                    </div>
                </div>
                <div class="content">
                <!-- Noi dung comment -->
                    <?php echo $userComment["content"]; ?>
                    <!-- Neu nguoi dang loggedin == nguoi viet comment hoac la admin thi duoc edit/delete comment -->
                    <?php if($user_id == $userComment['user_id'] || $_SESSION["admin"] == 1): ?>

                    <form action="detail.php?id=<?php echo $post_id;?>" method="POST">
                        <button type="submit" value="<?php echo $userComment["comment_id"]; ?>"
                            name="delete-comment">Delete </button>

                        <button type="submit" value="<?php echo $userComment["comment_id"]; ?>"
                            name="edit-comment">Edit </button>
                    </form>

                    <?php endif; ?>

                </div>
            </div>
            <hr>

        </div>
        <?php endforeach; ?>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <?php include_once('./includes/sub_footer.php'); ?>

    <!-- Script for header -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>

</html>