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
                <li><a href="calligraphy_western.php">Western</a></li>
                <li><a href="calligraphy_arabic.php">Arabic</a></li>
                <li><a href="calligraphy_oriental.php">Oriental</a></li>   
            </ul>
        </li>
        <li class="header_li"><a href="contact.php"><b>Contact</b></a></li>
        <li class="header_li">
            <div class="search-bar">
                <i class="bi bi-search"></i>
                <input class="search-bar-hh" type="text" placeholder="Search for assets">
            </div>
        </li>
      </ul>
      <ul>
        <li class="header_li"><a href="#"><b>Favorite</b></a></li>
        <li class="header_li"><a href="#"><b>Log in</b></a></li>
        <li class="header_li signup"><a href="#"><b>Sign up</b></a></li>
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