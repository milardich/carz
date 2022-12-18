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
        <div class="text-center mt-5 text-secondary">
            Registration page
        </div>
        <form class="form-container">
            <div class="form-outline mb-4">
                <input type="text" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">First name</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Last name</label>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Confirm password</label>
            </div>
            <div class="form-outline mb-4">
                <input type="file" id="form2Example2" class="form-control-file" />
                <label class="form-label" for="form2Example2">Choose a profile picture</label>
            </div>
            <!-- Submit button -->
            <button type="button" class="btn btn-primary mb-4 full-width-button">Register</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Already a member? <a href="login_page.php">Log in</a></p>
            </div>
        </form>
    </div>
    
    <?php
        include("../includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>