<?php 
require_once("function/calligraphy.php");
$card_calli = card_calli();
?>
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
              <?php foreach($card_calli as $item): ?>
                        <li><a href="/detail.php?id=<?php echo $item['id']; ?>"><?php echo $item['name']; ?></a></li>
              <?php endforeach; ?> 
            </ul>
        </li>
        <li class="header_li"><a href="contact.php"><b>Contact</b></a></li>
        <li class="header_li">
        <form action="library.php" method="GET">
            <div class="search-bar">
                <i class="bi bi-search"></i>
                <input value="<?php echo $search; ?>" name="search" class="search-bar-hh" type="text" placeholder="Search for assets">
            </div>
            </form>
        </li>
      </ul>
      <ul>
        <li class="header_li"><a href="boomark.php"><b>Bookmark</b></a></li>
        <?php if(isset($_SESSION["auth"]) && $_SESSION["auth"] != null):?>
          <a class="p-2 ms-2" href="/profile.php"><?php echo $_SESSION["auth"]["full_name"];?></a>
          <a class="p-2 ms-2" href="/logout.php">Logout</a>
        <?php else:?>
         <li class="header_li"><a href="login.php"><b>Login</b></a></li>
         <li class="header_li signup"><a href="register.php"><b>Signup</b></a></li>
        <?php endif;?>
      </ul>
    </div>
    
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var searchInput = document.getElementById("searchInput");
    searchInput.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            var searchTerm = searchInput.value;
            console.log("Searching for:", searchTerm);
        }
    });
});

</script>