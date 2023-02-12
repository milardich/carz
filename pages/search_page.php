<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../includes/html_head.php");
    ?>
    <!-- <script src="../javascript/filter-cars.js"></script> -->
    <title>Carz | Home</title>
</head>
<body>
    <?php
        include("../includes/navbar.php");
    ?>
    <div class="container">
        <div class="items-container row" id="items-container">
            <!--
                ------------------
            -->
            <?php
                $itemTitle = "";
                if(isset($_GET["item-title"]) && !empty($_GET["item-title"])){
                    $itemTitle = $_GET["item-title"];
                }
                $itemHandler = new ItemHandler();
                $items = $itemHandler->GetItemsByTitle($itemTitle);

                if(empty($items)){
                    echo "No items with title " . $itemTitle;
                }
                else{

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

                                <!-- <div class="save-button-container" id="<?php //echo $_POST["item_id"]; ?>">
                                    <object data="../resources/bookmark-solid.svg" width="30" height="30"> </object>
                                </div> -->
                            </a>
                        </div>
                        <?php
                    }   
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

