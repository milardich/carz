<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("html_head.php");
    ?>
    <title>Carz | Create new item</title>
</head>
<body>
    <?php
        include("navbar.php");
    ?>
    <div class="container login-form-container">
        <div class="text-secondary text-center mt-5">
            Create new item
        </div>
        <form class="form-container" action="create_item_script.php" method="POST">
            <!-- Item title input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Title</label>
                <input type="text" id="form2Example1" class="form-control" name="itemTitle"/>
            </div>

            <!-- Item description input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="itemDescription" rows="5"></textarea>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Location</label>
                <input type="text" id="form2Example1" class="form-control" name="itemLocation"/>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Price</label>
                <input type="text" id="form2Example1" class="form-control" name="itemPrice"/>
            </div>

            <div class="form-outline mb-4">
                <label for="exampleFormControlFile1">Upload images</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" multiple>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4 full-width-button">Create</button>
        </form>
    </div>
    


    <?php
        include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>