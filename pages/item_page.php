<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../includes/html_head.php");
    ?>
    
    <title>Carz</title>
    <script src="../javascript/edit-delete-item.js"></script>
</head>
<body>
    <?php
        include("../includes/navbar.php");

        if(!isset($_GET["id"])){
            Header("Location: ../index.php");
            exit();
        }
        
        $item_id = $_GET["id"];
        $itemHandler = new ItemHandler();
        $item = $itemHandler->GetItemById($item_id);
        $item_images = $itemHandler->GetItemImages($item["unique_item_id"]);
        $userHandler = new User();
    ?>
    
    <div class="container">
        <div class="item-details-container mt-3">
            <div class="item-pictures-container">
                <!-- Selected item pic -->
                <div class="item-selected-image row">
                    <div class="switch-img-button-container col-1 p-0 d-flex aligns-items-center">
                        <button class="btn btn-secondary switch-img-button"><</button>
                    </div>
                    <div class="col-10 p-0 item-big-picture">
                        <img src='../<?php echo $item["item_thumbnail"]; ?>'>
                    </div>
                    <div class="switch-img-button-container col-1 p-0 d-flex aligns-items-center">
                        <button class="btn btn-secondary switch-img-button">></button>
                    </div>
                </div>

                <!-- Small item pics -->
                <div class="row p-0 m-0 mt-3 item-pictures">
                    <?php
                        if(count($item_images) > 0){
                            foreach($item_images as $item_image){
                                ?>
                                <div class="col-2 item-small-picture m-0 p-0 d-block">
                                    <img src='../<?php echo $item_image["image_url"]; ?>' alt="">
                                </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div>
                <?php if($item["seller_id"] == $_SESSION["LOGGED_IN_USER_ID"]){ ?>
                        <button class="btn btn-primary" id="editButton"> Edit </button>
                        <button class="btn btn-success modify-button" id="saveButton"> Save </button>
                        <button class="btn btn-secondary modify-button" id="cancelButton"> Cancel </button>
                        <button class="btn btn-danger modify-button" id="deleteButton"> Delete </button>
                <?php } ?>
            </div>
            <div class="item-info-container p-2 mt-3">
                <!--  -->
                <div class="itemProperty item-title" id="itemTitle">
                    <?php echo $item["item_title"]; ?>
                </div>
                <div class="itemProperty item-description" id="itemDescription">
                    <?php echo $item["item_description"]; ?>
                </div>
                <div class="itemProperty item-price" id="itemPrice">
                    $<?php echo $item["item_price"]; ?>
                </div>

                <!-- edit mode -->
                <form action="../scripts/update_item_script.php" method="POST">

                    <div class="editInputFieldContainer">
                        Title: <input type="text" name="itemTitle" id="newTitleInputField">
                    </div>                
                    <div class="editInputFieldContainer">
                        Description: <input type="text" name="itemDescription" id="newDescriptionInputField">
                    </div>
                    <div class="editInputFieldContainer">
                        Price: <input type="text" name="itemPrice" id="newPriceInputField">
                    </div>

                </form>
                
            </div>

            <div class="item-seller-info-container p-2 mt-3">
                <div class="seller-info-box">
                    <span class="text-secondary">Date posted: </span> 
                    <div class="d-inline-block">
                        <?php echo $item["item_date_posted"]; ?>
                    </div>
                </div>
                <div class="seller-info-box">
                    <span class="text-secondary">Seller: </span> 
                    <div class="d-inline-block">
                        <?php echo $userHandler->GetUserDataById($item["seller_id"])["username"];
                        ?>
                    </div>
                </div>
                <div class="seller-info-box">
                    <span class="text-secondary">Location: </span> 
                    <div class="d-inline-block">
                        <?php echo $item["item_location"]; ?>
                    </div>
                </div>
                <div class="seller-info-box">
                    <span class="text-secondary">Phone: </span> 
                    <div class="d-inline-block">
                        <?php echo $userHandler->GetUserDataById($item["seller_id"])["user_phone"];
                        ?>
                    </div>
                </div>
                <div class="seller-info-box">
                    <span class="text-secondary">Email: </span> 
                    <div class="d-inline-block">
                        <?php echo $userHandler->GetUserDataById($item["seller_id"])["user_email"];
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include("../includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>