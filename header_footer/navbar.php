<div class="header">
    <div class="nav-bar">
      <ul>
        <li><a href="\"><img src="/images/logo.png" alt=""></a></li>
        <li class="header_li"><a href="\"><b>Home</b></a></li>
        <li class="header_li"><a href="about.php"><b>About</b></a></li>
        <li class="header_li"><a href="learn.php"><b>Learn</b></a></li>
        <li class="header_li"><a href="library.php"><b>Library</b></a></li>
        <li class="header_li submenu_parent"><a href="#"><b>Calligraphy</b></a>
            <ul class="submenu">
                <li><a href="/western.php">Western</a></li>
                <li><a href="/arabic.php">Arabic</a></li>
                <li><a href="/oriental.php">Oriental</a></li>   
            </ul>
        </li>
        <li class="header_li"><a href="contact.php"><b>Contact</b></a></li>
      </ul>
      <ul>
        <li class="header_li"><a href="boomark.php"><b>Bookmark</b></a></li>
        <?php if(isset($_SESSION["auth"]) && $_SESSION["auth"] != null):?>
          <a class="p-2 ms-2" href="/profile.php"><?php echo $_SESSION["auth"]["full_name"];?></a>
          <a class="p-2 ms-2" href="/logout.php">Logout</a>
        <?php else:?>
          <?php $_SESSION['previous_page'] = $_SERVER['REQUEST_URI']; // Lưu URL hiện tại ?>
         <li class="header_li"><a href="login.php"><b>Log in</b></a></li>
         <li class="header_li signup"><a href="register.php"><b>Sign up</b></a></li>
        <?php endif;?>
      </ul>
    </div>
    <div class="main-heading">Search for the calligraphy you want</div>
    <div class="sub-heading">Images, galleries, videos, calligraphy from basic to detailed</div>
    <form action="library.php" method="GET">
    <div class="search-bar">
      <input value="<?php echo $search; ?>" type="text" placeholder="Search for assets">
      <button type="submit"><i class="bi bi-search"></i></button>
    </div>
    </form>
</div>
