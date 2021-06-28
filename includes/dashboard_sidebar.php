 <div class="sidebar">
     <div class="sidebar-brand">
         <h2><span>Letters</span></h2>
     </div>
     <!--Secciones-del-tablero-->
     <div class="sidebar-menu">
         <ul>
             <?php if ($_SESSION['admin'] == 1) : ?>
                 <li>
                     <a href="/admin/users/index.php" class="active"> <span><i class="fas fa-users"></i> </span>
                         <span> Users </span></a>
                 </li>
                 <li>
                     <a href="/admin/posts/index.php" class="active"> <span><i class="far fa-paper-plane"></i></span>
                         <span>Posts</span></a>
                 </li>
             <?php else : ?>
                 <li>
                     <a href="#" class="active"> <span><i class="fas fa-user-alt"></i></span>
                         <span>Profile</span></a>
                 </li>
                 <li>
                     <a href="/client/posts/index.php" class="active"> <span><i class="far fa-paper-plane"></i></span>
                         <span>Posts</span></a>
                 </li>
             <?php endif; ?>
             <li>
                 <a href="../../index.php" class="active"> <span> <i class="fas fa-home"></i></span>
                     <span> Home</span></a>
             </li>
             <li>
                 <a href="../../logout.php" class="active"> <span><i class="fas fa-sign-out-alt"></i></span>
                     <span>Logout</span></a>
             </li>


         </ul>
     </div>
 </div>