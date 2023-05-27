<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>User</title>
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
                        <a  href="#records"><button class="btn-shop">Records</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of Banner -->


    <div class="table-data1 mt-3 rounded">
    <div class="container col-md-12 col-sm-12">
        <table class="table table-striped bg-light" style="width:100%">
            <div class="container">
                <div class="row">
                    <div class="page-heading bg-light col-md-12 col-sm-12 mb-1 p-2">
                        <span class="fw-bold fs-5 text-dark text-center">Records</span>
                    </div>
                </div>

            </div>
            <thead class="tbl-head" id="records">
                <tr>
                <th>Name</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody class="tbl" id="table_data">
                
            </tbody>
        </table>
    </div>
</div>



<script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/load.js"></script>
</body>
</html>