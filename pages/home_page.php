<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../includes/html_head.php");
    ?>
    <script src="../javascript/filter-cars.js"></script>
    <title>Carz | Home</title>
</head>
<body>
    <?php
        include("../includes/navbar.php");
    ?>
    <div class="container">
        <form>
            <div class="filters-container row">
                <div class="text-secondary mb-2">
                    Filters
                </div>
                <div class="col-md-4">
                    Car maker
                    <select class="form-select mt-2" aria-label="Default select example" id="carMakerSelect">
                        <option selected>-</option>
                        <?php
                            $carMakerHandler = new CarMakerHandler();
                            $carMakers = $carMakerHandler->GetAllCarMakers();
                            foreach($carMakers as $carMaker){
                                ?>
                                    <option value=<?php echo $carMaker["car_maker_id"]; ?>> <?php echo $carMaker["car_maker_name"]; ?> </option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-4">
                    Type
                    <select class="form-select mt-2" aria-label="Default select example" id="carTypeSelect">
                        <option selected>-</option>
                        <!--
                            Options are filled depending on
                            selected car maker (using jquery and ajax)
                        -->
                    </select>
                </div>
                <div class="col-md-3">
                    Price range <br>
                    <input class="form-control me-2 w-25 d-inline-block mt-2" type="search" placeholder="Min" aria-label="Search" id="minPriceInput">
                    -
                    <input class="form-control me-2 w-25 d-inline-block mt-2" type="search" placeholder="Max" aria-label="Search" id="maxPriceInput">
                </div>

                <div class="col-md-1">
                    <br>
                    <button type="button" class="btn btn-primary mt-2" id="filter_button">Filter</button>
                </div>
            </div>
        </form>

        <div class="items-container row" id="items-container">
            <!--
                Items are rendered with jquery (javascript/filter-cars.js)
            -->
        </div>
    </div>

    <?php
        include("../includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>