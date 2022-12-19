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

        if(!isset($_GET["id"])){
            Header("Location: ../index.php");
            exit();
        }
        
        $item_id = $_GET["id"];
        $itemHandler = new ItemHandler();
        $item = $itemHandler->GetItemById($item_id);
        $item_images = $itemHandler->GetItemImages($item["unique_item_id"]);
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
            
            <div class="item-info-container p-2 mt-3">
                <div class="item-title">
                    <?php echo $item["item_title"]; ?>
                </div>

                <div class="item-description">
                    <?php echo $item["item_description"]; ?>
                </div>

                <div class="item-price">
                    $<?php echo $item["item_price"]; ?>
                </div>
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
                        John Doe
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
                        09921312388
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