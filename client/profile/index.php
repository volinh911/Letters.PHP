<?php

include_once('../../path.php');
include_once(ROOT_PATH . '/controllers/users.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/dashboard.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <?php include_once('../../includes/dashboard_sidebar.php'); ?>

    <div class="main-content">

        <?php
        
        include_once('../../includes/dashboard_header.php');
        ?>

        <main>
            <?php if (isset($_SESSION['message'])) : ?>
                <div class="msg <?php echo $_SESSION['type']; ?> ">
                    <li style="text-align: center"><?php echo $_SESSION['message']; ?></li>

                    <?php
                    unset($_SESSION['message']);
                    unset($_SESSION['type']);
                    ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($errors)) : ?>
                <div class="msg error">
                    <?php foreach ($errors as $error) : ?>
                        <li style="text-align: center;"><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php 
                // echo '<pre>';
                // var_dump($current_user['image_profile']);
                // echo '</pre>';
                
            ?>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="margin: auto;">User Profile</h3>
                        </div>

                        <div class="card-body grid">
                            <div class="table-responsive">
                                <form action="./index.php" method="post" enctype="multipart/form-data">
                                    <div>
                                        <label for="username">Username</label><br>
                                        <input type="text" name="username" id=""><br>
                                    </div>
                                    <div>
                                        <label for="email">Email</label><br>
                                        <input type="email" name="email" id=""><br>
                                    </div>
                                    <div>
                                        <label for="password">Password</label><br>
                                        <input type="password" name="password" id=""><br>
                                    </div>
                                    <div>
                                        <label>Your Image</label><br>
                                        <input type="file" name="image">
                                    </div>
                                    <div style="margin-bottom: 12px;">
                                        <button style="border-radius: 15px;" type="submit" name="edit-user-profile"> Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="temp">
                                <img src="../../images/Phuc.png" alt="dude..">
                            </div>
                        </div>

                    </div>
                </div>
                

            </div>
        </main>


    </div>

</body>

</html>