<?php
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include '../includes/autoLoader.php';
    $user = new User();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">CARZ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
            </ul>
            <form class="d-flex ms-auto" action="../pages/search_page.php" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="item-title">
                <button class="btn btn-outline-success btn-light" type="submit">Search</button>
            </form>
            <div class="nav-item dropdown ms-auto">
                    <?php
                    if(!isset($_SESSION["LOGGED_IN_USER_ID"])){
                    ?>
                        <a class="nav-link" href="login_page.php"> Log in </a>
                    <?php
                    }
                    else{
                    ?>
                        <a class="nav-link p-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../<?php echo $user->GetUserProfilePicture($_SESSION["LOGGED_IN_USER_ID"]); ?>" class="img-cover">
                            <span class="nav-small-dropdown-arrow">▼</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end profile-dropdown" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../pages/profile_page.php">Profile</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Saved items (12)</a></li> -->
                            <li><a class="dropdown-item" href="create_item_page.php">Add new item</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="../scripts/logout_script.php">Log out</a>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</nav>