<?php

    include_once ('./path.php');
    include_once (ROOT_PATH . '/controllers/posts.php');

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
  <div class="container-fluid">
    <?php include_once('./includes/sub_header.php'); ?>

    <!-- forum titles placeholder -->
    <div class="container page-wrapper">

      <div class="table-row">
        <div class="subjects">
          <a href="">Is learning Python on 2021 worth it?</a>
          <br>
          <span>Started by <b><a href="">User</a></b> .</span>
        </div>
        <div class="replies">
          2 replies <br> 125 views
        </div>

        <div class="last-reply">
          Oct 12 2021
          <br>By <b><a href="">User</a></b>
        </div>
      </div>

      <div class="table-row">
        <div class="subjects">
          <a href="">Is learning Python on 2021 worth it?</a>
          <br>
          <span>Started by <b><a href="">User</a></b> .</span>
        </div>
        <div class="replies">
          2 replies <br> 125 views
        </div>

        <div class="last-reply">
          Oct 12 2021
          <br>By <b><a href="">User</a></b>
        </div>
      </div>

    </div>

    <!--pagination-->
    <!--Pagination starts-->
    <nav>
      <ul class="pagination justify-content-center mx-auto">
        <li class="page-item disabled" title="Previous">
          <a class="page-link m-2" href="">
            <i class="fas fa-chevron-left text-primary"></i></a>
        </li>

        <li class="page-item active"><a class="page-link  m-2" href="">1</a></li>
        <li class="page-item"><a class="page-link m-2" href="">2</a></li>
        <li class="page-item"><a class="page-link m-2" href="">3</a></li>
        <li class="page-item"><a class="page-link m-2" href="">4</a></li>
        <li class="page-item"><a class="page-link m-2" href="">5</a></li>

        <li class="page-item" title="Next">
          <a class="page-link m-2" href="">
            <i class="fas fa-chevron-right text-primary "></i></a>
        </li>

      </ul>
    </nav>
    <!--pagination ends-->

  </div>
  </div>


  <?php include_once('./includes/sub_footer.php'); ?>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>
