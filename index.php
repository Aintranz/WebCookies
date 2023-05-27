<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar  navbar-expand-lg  navbar-light bg-light">
        <div class="container-fluid">
            <a href="" class="navbar-brand title"><img src="./assets/image/logo.png" alt="" width="50"><span class="mr-3 ">LBA Cookies</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li><a href="index.php" class="btn btn-transparent">home</a></li>
                    <li><a href="#product" class="btn btn-transparent">product</a></li>
                    <li><a href="#about" class="btn btn-transparent">about</a></li>
                    <!-- <li><a href="#" class="btn btn-transparent">contact</a></li> -->
                    <li><a href="User.php" class="btn btn-transparent">Users Data</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->


    <!-- Banner -->
    <div class="p-5 banner text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-container mt-5">
                        <h2>Welcome to LBA Cookie Shop! </h2>
                        <p class="fs-5 text-light">Tasty and Affordable Cookies for You! </p>
                        <br>
                        <a  href="#product"><button class="btn-shop">Products</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of Banner -->


    <!-- Products -->

    <div class="container mt-5">
        <div class="text-center" id="product">
            <h4>Products</h4>
            <div class="container">
                <div class="row" id="Datacart">
                </div>
            </div>
        </div>
    </div>

    <!-- end of products -->


    <!-- About Us -->


    <div class="container mt-4 about" id="about">
        <h4>About Us</h4>
        <p class="text-secondary">Welcome To Our LBA Cookie Shop, Where The Sweet Aroma Of Freshly Baked Cookies Fills

    The Air And The Delicious Taste Of Our Treats Keeps You Coming Back For More..

At Our Shop, We Use Only The Finest Ingredients And Time-Honored Recipes To Craft Our Cookies.

We Believe That Quality Is Key, And We Take Pride In Creating Cookies That Are Not Only Delicious

But Also Visually Stunning.

Thank You For Choosing Our Cookie Shop.

We Look Forward To Baking Up Some Delicious Treats For You Soon!</p>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    
                  
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Description:    
                    <p id="desc"></p>
                    Price: <b>&#8369<span id="price"></span></b>
                    <hr>
                    <center><h3>Form</h3></center>
                    <form id="reset">
                    <div class="row">
                        <div class="mb-2">
                                <label for="fullname">
                                    FullName
                                </label>
                                <input type="text" class="form-control" id="fullname">
                            </div>
                            <div class="mb-2">
                                <label for="email">
                                    Email Address
                                </label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="mb-2 col-md-12">
                                <label for="quan">
                                    Quantity
                                </label>
                                <input type="number" class="form-control mb-3" id="quan">
                                <!-- <b>Total: <span id="total"></span></b> -->
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="BuyItem">Buy</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/load.js"></script>

</body>
</html>