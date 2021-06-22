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
         <img src="img/Avatar.png" width="40px" height="40px" alt="">
         <div>
             <?php if (isset($_SESSION['username'])) : ?>
                 <h4> <?php echo $_SESSION['username'];?></h4>
             <?php endif; ?>
             <small>Super Admin</small>
         </div>
     </div>
 </header>