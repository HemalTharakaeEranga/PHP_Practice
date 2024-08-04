<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'product');

$sql = "SELECT * from item WHERE features=1";
$features = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ItemBuy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ItemBuy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-2">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="product-laptops.php">Laptops</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="product-phones.php">Phones</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Top Products -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h2>Top Products</h2> 
                <br><br>
                <div class="row">
                    <?php while($product = mysqli_fetch_assoc($features)): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?= htmlspecialchars($product['images']); ?>" class="card-img-top" alt="<?= htmlspecialchars($product['title']); ?>" height="200">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($product['title']); ?></h5>
                                <p class="card-text">RS <?= htmlspecialchars($product['price']); ?></p>
                                <a href="details.php?id=<?= htmlspecialchars($product['id']); ?>" class="btn btn-success">View Details</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
