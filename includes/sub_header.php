
    <!--===== HEADER =====-->
    <header id="header">
        <a href="#" class="logo">Letters</a>
        <div class="toggle"></div>
        <ul class="navigation">
            <li><a href="index.php" class="active">Home</a></li>
            <?php if (isset($_SESSION['user_id'])) : ?>
            <li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
            <li><a href="create.php">Add new post</a></li>
            <?php if ($_SESSION['admin']) : ?>
            <li><a href="./admin/dashboard.php">Dashboard</a></li>
            <?php endif; ?>
            <?php if ($_SESSION['admin'] == 0) : ?>
            <li><a href="./client/user_dashboard.php">User Dashboard</a></li>
            <?php endif; ?>
            <li><a href="logout.php">Logout</a></li>
            <?php else : ?>
            <li><a href="login.php">Sign In</a></li>
            <li><a href="register.php">Sign Up</a></li>
            <?php endif; ?>
        </ul>
    </header>