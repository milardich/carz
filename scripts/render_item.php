<?php
include "../includes/autoLoader.php";

?>

<div class="col-md-3 item-container">
    <a href="../pages/item_page.php?id=<?php echo $_POST["item_id"]; ?>">
        <div class="item">
            <div class="item-thumbnail-container">
                <img src="../<?php echo $_POST["item_thumbnail"]; ?>">
            </div>
            <div class="item-title">
                <?php echo $_POST["item_title"]; ?>
            </div>
            <div class="item-description">
                <?php echo $_POST["item_description"]; ?>
            </div>
            <div class="date-and-price-container">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="d-block mt-auto">
                            <object data="../resources/location-pin-solid.svg" width="15" height="15"> </object>
                            <span class="location-text"><?php echo $_POST["item_location"]; ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-end">
                            <div class="price-1">
                                $<?php echo $_POST["item_price"]; ?>
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