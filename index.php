<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/83dfe2e2a2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Carz | Home</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CARZ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="random_guy.jpg" class="img-cover">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Saved items (12)</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>

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
                include("item.php");
                include("item.php");
                include("item.php");
                include("item.php");
                include("item.php");
                include("item.php");
            ?>
        </div>
    </div>

    <footer class="bg-dark text-center text-white">
        <div class="container p-4">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-linkedin-in"></i
                    ></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-github"></i
                    ></a>
            </section>

            <section class="mb-4">
                <p>
                    Projekt iz web programiranja
                </p>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="#">Stjepan Milardic</a>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>