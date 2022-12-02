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
        <div class="item-details-container mt-3">
            <div class="item-pictures-container">
                <!-- Selected item pic -->
                <div class="item-selected-image row">
                    <div class="switch-img-button-container col-1 p-0 d-flex aligns-items-center">
                        <button class="btn btn-secondary switch-img-button"><</button>
                    </div>
                    <div class="col-10 p-0">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="switch-img-button-container col-1 p-0 d-flex aligns-items-center">
                        <button class="btn btn-secondary switch-img-button">></button>
                    </div>
                </div>

                <!-- Small item pics -->
                <div class="row p-0 m-0 mt-3 item-pictures">
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                    <div class="col-2 item-small-picture m-0 p-0 d-block">
                        <img src="jaguar_thumbnail.jpg" alt="">
                    </div>
                </div>
            </div>
            
            <div class="item-info-container p-2 mt-3">
                <div class="item-title">
                    Jaguar askldjasld jalsdk
                </div>

                <div class="item-description">
                    jaguar description test jaguar description test jaguar description test jaguar description test
                </div>

                <div class="item-price">
                    $4999
                </div>
            </div>

            <div class="item-seller-info-container p-2 mt-3">
                <div class="seller-info-box">
                    <span class="text-secondary">Date posted: </span> 
                    <div class="d-inline-block">
                        19/12/2022
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
                        Osijek
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
        include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>