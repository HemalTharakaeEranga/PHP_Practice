<!DOCTYPE html>
<html lang="en">

<head>
    <title>Photo Gallery</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Photo Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#architecture">Architecture</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#nature">Nature</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#games">Games</a>
                    </div>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Architeture_2.jpg" class="d-block w-100" alt="Architecture">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Architecture</h5>
                    <p>Buliding design.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Nature_1.jpg" class="d-block w-100" alt="Nature">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nature</h5>
                    <p>Butterfly forest.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Games_2.jpg" class="d-block w-100" alt="Games">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Games</h5>
                    <p>Call Of Duty Black Ops 6.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Sections -->
    <a id="architecture">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Architecture</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/Architeture_1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/Architeture_2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/Architeture_3.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
    </a>


    <!-- Sections -->
    <a id="nature">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Nature</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/Nature_1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/Nature_2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/Nature_3.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
    </a>

    <!-- Sections -->
    <a id="games">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Games</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/Games_1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/Games_2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/Games_3.jpeg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
    </a>

    <!-- Sections -->
    <a id="contact">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Contact</h2>
            </div>
            <div class="w-50 m-auto">
                <form action="about.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea class="form-control" name="comment">
                    </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
        </section>
    </a>

    <!-- Sections -->
    <a id="about">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">About</h2>
            </div>
            <div class="container-fluid">
                <h3 class="text-center">Hemal</h3>
                <p class="text-center"><b>Contact No: 0719142975</b></p>
                <p class="text-center"><b>I am a passionate photographer and editor; this photo was collected from my gallery.</b></p>
            </div>
        </section>
    </a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
</body>

</html>