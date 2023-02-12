<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../includes/html_head.php");
    ?>
    <script src="../javascript/filter-cars.js"></script>
    <script src="../javascript/auto-change-title.js"></script>
    <title>Carz | Create new item</title>
</head>
<body>
    <?php
        include("../includes/navbar.php");
        if(!isset($_SESSION["LOGGED_IN_USER_ID"])){
            Header("Location: ../index.php");
            exit();
        }
    ?>
    <div class="container login-form-container">
        <div class="text-secondary text-center mt-5">
            Create new item
        </div>
        <form class="form-container" enctype="multipart/form-data" action="../scripts/create_item_script.php" method="POST">
            <!-- Car type select -->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    Car maker
                    <select class="form-select mt-2" aria-label="Default select example" id="carMakerSelect" name="carMaker">
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
                <div class="col-md-6 col-sm-12">
                    Type
                    <select class="form-select mt-2" aria-label="Default select example" id="carTypeSelect" name="carType">
                        <option selected>-</option>
                        <!--
                            Options are filled depending on
                            selected car maker (using jquery )
                        -->
                    </select>
                </div>
            </div>

            <!-- Item title input -->
            <div class="form-outline mb-4 mt-4">
                <label class="form-label" for="form2Example1">Title</label>
                <input type="text" id="itemTitleInput" class="form-control" name="itemTitle"/>
            </div>

            <!-- Item description input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="itemDescription" rows="5"></textarea>
            </div>

            <!-- Location input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Location</label>
                <input type="text" id="form2Example1" class="form-control" name="itemLocation"/>
            </div>

            <!-- Price input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Price</label>
                <input type="text" id="form2Example1" class="form-control" name="itemPrice"/>
            </div>

            <!-- Thumbnail image input -->
            <div class="form-outline mb-4">
                <label for="exampleFormControlFile1">Upload thumbnail image</label>
                <input type="file" name="thumbnail_img" id="thumbnail_img" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <!-- Item images input -->
            <!-- <div class="form-outline mb-4">
                <label for="exampleFormControlFile1">Upload item images</label>
                <input type="file" name="item_images[]" class="form-control-file" id="exampleFormControlFile1" multiple>
            </div> -->

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4 full-width-button">Create</button>
        </form>
    </div>
    


    <?php
        include("../includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>