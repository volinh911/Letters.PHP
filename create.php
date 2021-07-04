<?php
include_once ('./path.php');
include_once('./controllers/posts.php');

unset($_SESSION['comment-id']);

$post = new Post($conn);

// Cho 2 bien rong de khong in sai 
$postTitle = "";
$postContent = "";

// Nguoi dung nhan edit se co bien global, se unset khi edit thanh cong
if (isset($_SESSION['post_id'])) {
    $post_id = $_SESSION['post_id'];
    $posts = $post->getPost($post_id);
    $postTitle = $posts['title'];
    $postContent = $posts['content'];
}

// Add bai viet
if (isset($_POST['add-post'])) {
    $user_id = $_SESSION['user_id'];
    $post_title = $_POST['title'];
    $post_content = $_POST['content'];
    $file = $_FILES['imgurl'];
    // var_dump($_FILES);
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    $post->checkNewPost($user_id, $post_title, $post_content,$fileTmpName, $fileSize, $fileError, $fileActualExt, $allowed);
    $errors = $post->errors;
}

// Edit bai viet
if(isset($_POST['edit-post'])){
    $post_title = $_POST['title'];
    $post_content = $_POST['content'];

    $post->editPost($post_id, $post_title, $post_content);
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
    <link rel="stylesheet" href="css/sub_header_footer_styles.css">
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
</head>

<body>
    <div class="container">
        <!-- Khong log in khong dang bai -->
        <?php if (!isset($_SESSION["user_id"])):?>
        <div class="mt-5 col-md-6 offset-md-3 text-center">
            <h2 class="display-5">Please Login to Post!</h2>
            <p>Create an account or login to post to the website.</p>
            <button type="button" class="btn btn-block btn-outline-primary"><a href="login.php"><i
                        class="fas fa-sign-in-alt"></i> Create Account/Login</a> </button>
        </div>
        <?php else:?>

        <!-- Bao loi neu co -->
        <?php if (isset($errors) && !empty($errors)): ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach ($errors as $error): ?>
            <?php echo $error . "</br>"; ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <form action="create.php" method="POST" enctype="multipart/form-data">
            <?php if (isset($_GET['error'])) {?>
            <div class=" rs2-wrap-input100 m-b-20">
                <p class="error text-center" style="color: red;"><?php echo $_GET['error'];?></p>
            </div>
            <?php }?>

            <!-- In nhung thu can thiet -->
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" value="<?php echo $postTitle;?>" class="form-control" name="title"
                    placeholder="Your post title">
            </div>
            <div class="form-group">
                <label for="content">Post Content</label>
                <textarea class="form-control" name="content" rows="3"
                    placeholder="Your post content"><?php echo $postContent; ?></textarea>
            </div>

            <div class="form-group">
                <label for="imgurl" style="color: black; font-size: 20px;">Image</label>
                <input type="file" name="imgurl" class="form-control" id="" value="">
            </div>

            <!-- Neu khong edit thi se submit nhu thuong -->
            <?php if(isset($_SESSION['edit'])): ?>
            <button type="submit" name="edit-post" class="btn btn-primary">Update</button>
            <?php else: ?>
            <button type="submit" name="add-post" class="btn btn-primary">Submit</button>
            <?php endif; ?>

        </form>
        <?php endif;?>
    </div>
    <!-- Script for header -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</body>