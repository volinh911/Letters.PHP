<?php
include_once("./path.php");
include_once(ROOT_PATH . "/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
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

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="css/sub_header_footer_styles.css">
  <link rel="stylesheet" href="./css/login.css">
  <title>Sign-up</title>
  <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
</head>

<body>
  <?php include_once('./includes/sub_header.php') ?>
  <div class="l-form">
    <div class="shape1"></div>
    <div class="shape2"></div>

    <div class="form">
      <img src="./images/register.svg" class="form__img" alt="">
      <form action="register.php" class="form__content" method="POST">
        <h1 class="form__title">New here ?</h1>
        <?php if (!empty($errors)) : ?>
          <div class="msg error">
            <?php foreach ($errors as $error) : ?>
              <li style="text-align: center;"><?php echo $error; ?></li>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="form__div form__div-one">
          <div class="form__icon">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>

          <div class="form__div-input">
            <label for="username" class="form__label"></label>
            <input type="text" name="username" class="form__input" placeholder="Username" value="<?php echo $username; ?>">
          </div>
        </div>

        <div class="form__div form__div-one">
          <div class="form__icon">
            <i class="fa fa-at" aria-hidden="true"></i>
          </div>
          <div class="form__div-input">
            <label for="email" class="form__label"></label>
            <input type="email" name="email" class="form__input" placeholder="Email" value="<?php echo $email; ?>">
          </div>
        </div>

        <div class="form__div form__div-one ">
          <div class="form__icon">
            <i class="fa fa-lock" aria-hidden="true"></i>
          </div>
          <div class="form__div-input">
            <label for="password" class="form__label"></label>
            <input type="password" name="password" class="form__input" placeholder="Password" value="<?php echo $password; ?>">
          </div>
        </div>
        <input type="submit" class="form__button" name="register-btn">
      </form>
    </div>
  </div>
</body>
<script src="./js/sub_header.js"></script>
<!-- Script for header -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</html>