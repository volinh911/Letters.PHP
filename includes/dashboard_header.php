 <header>
     <h2>
         <label for="nav-toggle">
             <span><i class="fas fa-bars"></i></span>
         </label>
     </h2>

     <!-- <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Buscar aquí" />
            </div> -->
     <div class="user-wrapper">
         <?php if ($_SESSION['admin'] == 1) : ?>
             <img src="/images/Avatar.png" width="40px" height="40px" alt="">
         <?php else : ?>
             <img src="/images/user.png" width="40px" height="40px" alt="">
         <?php endif; ?>
         <div>
             <?php if (($_SESSION['admin'] == 0)) : ?>
                 <h4><?php echo $_SESSION['username']; ?></h4>
             <?php else : ?>
                 <h4> <?php echo $_SESSION['username']; ?></h4>
                 <small>Super Admin</small>
             <?php endif; ?>
         </div>
     </div>
 </header>