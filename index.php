<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("html_head.php");
    ?>
    <title>Carz | Home</title>
</head>
<body>
    <?php
        include("navbar.php");
    ?>
    <div class="container">
        <div class="filters-container row">
            <div class="text-secondary mb-2">
                Filters
            </div>
            <div class="col-md-4">
                Manufacturer
                <select class="form-select mt-2" aria-label="Default select example">
                    <option selected>-</option>
                    <option value="1">Volkswagen</option>
                    <option value="2">BMW</option>
                    <option value="3">Toyota</option>
                </select>
            </div>
            <div class="col-md-4">
                Type
                <select class="form-select mt-2" aria-label="Default select example">
                    <option selected>-</option>
                    <option value="1">3 Series</option>
                    <option value="2">4 Series</option>
                    <option value="3">5 Series</option>
                </select>
            </div>
            <div class="col-md-3">
                Price range <br>
                <input class="form-control me-2 w-25 d-inline-block mt-2" type="search" placeholder="Min" aria-label="Search">
                -
                <input class="form-control me-2 w-25 d-inline-block mt-2" type="search" placeholder="Max" aria-label="Search">
            </div>

            <div class="col-md-1">
                <br>
                <button type="button" class="btn btn-primary mt-2">Filter</button>
            </div>
        </div>

        <div class="items-container row">
            <?php
                $itemHandler = new ItemHandler();
                foreach($itemHandler->GetAllItems() as $item){
                    //echo $item["item_id"] . "\n";
                    ?>
                    <div class="col-md-3 item-container">
                        <a href="item_page.php?id='<?php echo $item["item_id"]; ?>'">
                            <div class="item">
                                <div class="item-thumbnail-container">
                                    <img src="<?php echo $item["item_thumbnail"]; ?>">
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
                                                <object data="location-pin-solid.svg" width="15" height="15"> </object>
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

                            <div class="save-button-container">
                                <object data="bookmark-solid.svg" width="30" height="30"> </object>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            ?>
            <?php
                include("item.php");
                include("item.php");
                include("item.php");
                include("item.php");
                include("item.php");
                include("item.php");
                include("item.php");
                include("item.php");
                include("item.php");
            ?>
        </div>
    </div>

    <?php
        include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>