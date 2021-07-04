<!--===== HEADER =====-->
<header id="header">
    <a href="#" class="logo">Letters</a>
    <div class="toggle"></div>
    <ul class="navigation">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="#">Dicktionary</a></li>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Games
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="game.php">Scrambles</a>
                <a class="dropdown-item" href="hangman.php">Hangman</a>
            </div>
        </div>
        <?php if (isset($_SESSION['user_id'])) : ?>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Community
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="create.php">Make a Question</a>
                </div>
            </div>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['username']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <?php if ($_SESSION['admin']) : ?>
                        <a class="dropdown-item" href="../admin/dashboard.php">Dashboard</a>
                    <?php endif; ?>
                    <?php if ($_SESSION['admin'] == 0) : ?>
                        <a class="dropdown-item" href="../client/user_dashboard.php">User Dashboard</a>
                    <?php endif; ?>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        <?php else : ?>
            <li><a href="#">Community</a></li>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Join Us
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="login.php">Sign In</a>
                    <a class="dropdown-item" href="register.php">Sign Up</a>
                </div>
            </div>
        <?php endif; ?>
    </ul>
</header>