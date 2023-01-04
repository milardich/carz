<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../includes/html_head.php");
    ?>
    
    <title>Carz</title>
</head>
<body>
    <?php
        include("../includes/navbar.php");        
    ?>
    
    <div class="container">
        <div class="user-information-container row m-2">
            <?php
                $userHandler = new User();
                $userData = $userHandler->GetUserDataById($_SESSION["LOGGED_IN_USER_ID"]);
            ?>
            <div class="user-profile-picture col-lg-4 col-sm-12 m-auto">
                <img src="../resources/random_guy.jpg" alt="">
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="user-info-text h3 mt-3">
                    <?php echo $userData["username"]; ?>
                </div>
                <div class="user-info-text h5">
                    <span class="text-secondary">mail:</span> <?php echo $userData["user_email"]; ?>
                </div>
                <div class="user-info-text h5">
                    <span class="text-secondary">phone:</span> <?php echo $userData["user_phone"]; ?>
                </div>
            </div>
        </div>

        <div class="mt-5 h4 text-center">
            My items:
        </div>

        <div class="items-container">
            <?php
                $itemHandler = new ItemHandler();
                $items = $itemHandler->GetItemsFromUser($_SESSION["LOGGED_IN_USER_ID"]);
                foreach($items as $item){
                    echo $item["item_title"] . "<br>";
                }
            ?>
        </div>
    </div>

    <?php
        include("../includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>