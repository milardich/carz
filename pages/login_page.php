<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../includes/html_head.php");
    ?>
    <title>Carz | Home</title>
</head>
<body>
    <?php
        include("../includes/navbar.php");
    ?>
    <div class="container login-form-container">
        <div class="text-secondary text-center mt-5">
            Log in page
        </div>
        <form class="form-container" action="../scripts/login_script.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email address</label>
                <input type="email" id="form2Example1" class="form-control" name="email"/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" id="form2Example2" class="form-control" name="password"/>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4 full-width-button">Log in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="register_page.php">Register</a></p>
            </div>
        </form>
    </div>
    
    <?php
        include("../includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>