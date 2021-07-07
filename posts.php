<?php

include_once('./path.php');
include_once(ROOT_PATH . '/controllers/posts.php');

#posts/post la object
$posts = new Post($conn);

#kiem tra url va keu ham lay posts tuy thuoc vao so luong bai viet (1 trang 5 bai)
$page = isset($_GET['page']) ? $_GET['page'] : 1;
if ($page > 0) {
    $post = $posts->getPosts($page);
}

//get number of pages
$pages = $posts->getPages();

#sigular Page
$Previous = $page - 1;
$Next = $page + 1;

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Document</title>
    <link rel="stylesheet" href="css/community.css">
    <link rel="stylesheet" href="css/sub_header_footer_styles.css">
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
</head>


<body>
    <?php include_once('./includes/sub_header.php'); ?>
    <div class="container-fluid page-body">


        <!-- forum titles placeholder -->
        <!-- Alert nguoi dung sau 1 thao tac nhat dinh -->
        <div class="container page-wrapper">

            <?php if (isset($_GET['success'])) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    Post added/edited successfully!
                </div>

            <?php elseif (isset($_GET['error'])) : ?>
                <div class="alert alert-danger mt-3" role="alert">
                    There was a problem adding/deleting your post...
                </div>

            <?php elseif (isset($_GET['delete'])) : ?>
                <div class="alert alert-warning mt-3" role="alert">
                    A post was deleted...
                </div>
            <?php endif; ?>

            <!-- Check neu trang hien tai > 0 va so luong trang tuong ung voi bai phai > trang hien tai. Neu khong-> Hien trang khong co -->
            <?php if ($page > 0 && $page <= $pages) : ?>
                <?php foreach ($post as $p) :  ?>

                    <!-- Ham static dem comment  -->
                    <?php
                    $comment = Comment::countComment($p["post_id"], $conn);
                    ?>

                    <!-- In ra nhung thu can thiet -->
                    <div class="table-row">
                        <div class="subjects">
                            <a href="detail.php?id=<?php echo $p['post_id']; ?>"><?php echo $p['title']; ?></a>
                            <br>
                            <span>Started by <b><a href=""><?php echo $p['username']; ?></a></b> .</span>
                        </div>
                        <div class="replies">
                            replies:
                            <?php if ($comment == null) : echo "0";
                            else : echo implode($comment['0']);
                            endif; ?> <br>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php else : ?>

                <h1>Page not available </h1>

            <?php endif; ?>

        </div>

        <!--pagination-->
        <!--Pagination starts-->
        <nav>
            <ul class="justify-content-center page-nav">
                <!-- Dynamic pagination -->
                <!-- Disabled khi khong co trang previous && next -->
                <?php if ($page == 1) : ?>
                    <li class="disabled" title="Previous">
                        <a href="posts.php?page=<?= $Previous; ?>">
                            <i class="fas fa-chevron-left"></i></a>
                    </li>
                <?php else : ?>
                    <li title="Previous">
                        <a href="posts.php?page=<?= $Previous; ?>">
                            <i class="fas fa-chevron-left"></i></a>
                    </li>
                <?php endif; ?>
                <!-- In ra so trang tuong ung voi luong bai viet -->
                <?php for ($i = 1; $i <= $pages; $i++) : ?>
                    <li class="pageNumber"><a href="posts.php?page=<?= $i; ?>"><?= $i; ?></a></li>
                <?php endfor; ?>

                <?php if ($page < $pages) : ?>
                    <li title="Next">
                        <a href="posts.php?page=<?= $Next; ?>">
                            <i class="fas fa-chevron-right"></i></a>
                    </li>
                <?php else : ?>
                    <li class="disabled" title="Next">
                        <a href="posts.php?page=<?= $Next; ?>">
                            <i class="fas fa-chevron-right"></i></a>
                    </li>
                <?php endif; ?>

            </ul>
        </nav>
        <!--pagination ends-->

    </div>
    </div>

    <?php include_once('./includes/sub_footer.php'); ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Script for header -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</body>

</html>
