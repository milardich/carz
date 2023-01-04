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
        <div class="user-information-container row m-2 p-2">
            <?php
                $userHandler = new User();
                $userData = $userHandler->GetUserDataById($_SESSION["LOGGED_IN_USER_ID"]);
            ?>
            <div class="user-profile-picture col-lg-4 col-sm-12 m-auto">
                <img src=<?php echo "../" . $userData["profile_picture_url"]; ?> alt="">
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

        <div class="items-container row">
            <?php
                $itemHandler = new ItemHandler();
                $items = $itemHandler->GetItemsFromUser($_SESSION["LOGGED_IN_USER_ID"]);
                foreach($items as $item){
                    ?>
                    <div class="col-md-3 item-container">
                        <a href="../pages/item_page.php?id=<?php echo $item["item_id"]; ?>">
                            <div class="item">
                                <div class="item-thumbnail-container">
                                    <img src="../<?php echo $item["item_thumbnail"]; ?>">
                                </div>
                                <div class="item-title">
                                    <?php echo $item["item_title"]; ?>
                                </div>
                                <div class="item-description">
                                    <?php echo $item["item_description"]; ?>
                                </div>
                                <div class="date-and-price-container">
                                    <div class="row">
                                        <div class="col-md-6 d-flex">
                                            <div class="d-block mt-auto">
                                                <object data="../resources/location-pin-solid.svg" width="15" height="15"> </object>
                                                <span class="location-text"><?php echo $item["item_location"]; ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-end">
                                                <div class="price-1">
                                                    $<?php echo $item["item_price"]; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="save-button-container" id="<?php echo $item["item_id"]; ?>">
                                <object data="../resources/bookmark-solid.svg" width="30" height="30"> </object>
                            </div>
                        </a>
                    </div>
                    <?php
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