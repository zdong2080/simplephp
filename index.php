<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Photo Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#nature">Nature</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#architecture">Architecture</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#travel">Travel</a></li>
                </ul>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
                </li>

            </ul>
            </div>
        </div>
    </nav>


    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/architecture_4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>Architecture</h3>
           </div>
            </div>
            <div class="carousel-item">
            <img src="images/nature_4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>Nature</h3>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/travel_4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>Travel</h3>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <a id="nature">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">
                Nature
            </h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature_1.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature_2.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature_3.jpg" class="img-fluid pb-3">
                </div>
            </div>
        </div>
    </section>
    </a>

    <a id="architecture">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">
                Architecture
            </h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/architecture_1.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/architecture_2.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/architecture_3.jpg" class="img-fluid pb-3">
                </div>
            </div>
        </div>
    </section>
    </a>

    <a id="travel">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">
                Travel
            </h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/travel_1.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/travel_2.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/travel_3.jpg" class="img-fluid pb-3">
                </div>
            </div>
        </div>
    </section>
    </a>

    <a id="contact">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">
                Contact Us
            </h2>
        </div>

        <div class="w-50 m-auto">
            <form action="about.php" method="post">
                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Number:</label>
                    <input type="text" name="number" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
    </a>

    <a id="about">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">
                About
            </h2>
        </div>

        <div class="container-fluid">
            <h3 class="text-center">Mac</h3><br>
            <p class="text-center"><b>I am a passionate photographer interested in working in Architecture, Nature, and Travel</b></p>
        </div>
    </section>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>
</html>