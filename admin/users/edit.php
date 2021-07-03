<?php
// session_start();
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
            <?php
           
            // echo '<pre>';
            // var_dump($_POST);
            // echo '</pre>';

            
            ?>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit User</h3>
                            <a href="./index.php">
                                <button>Manage User</button>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="edit.php" method="post">
                                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
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
                                    <button type="submit" name="update-user"> Add User</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Admins</h3>
                        </div>
                        <div class="card-body">
                            <?php foreach ($all_admins as $key => $admin) : ?>
                                <div class="customer ">
                                    <div class="info ">
                                        <img src="/images/Avatar.png " width="40px " height="40px " alt=" ">
                                        <div>
                                            <h4><?php echo $admin['username']; ?></h4>
                                        </div>
                                    </div>
                                    <div class="contact ">
                                        <span><i class="fas fa-comment-dots"></i></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        </main>


    </div>

</body>

</html>