<!DOCTYPE html>
<html lang="en">
<head>
    <title>Global Shopping Mall</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../lib/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <style>
        body {
            font-family: "Lato", sans-serif;
             }

            /* Fixed sidenav, full height */
            .sidenav {
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #09364F;
            overflow-x: hidden;
            padding-top: 0px;
            font-style: normal;
            }

            /* Style the sidenav links and the dropdown button */
            .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 14px;
            color: #ffffff;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            }

            /* On mouse-over */
            .sidenav a:hover, .dropdown-btn:hover {
            color: #D3AE35;
            }

            /* Main content */
            .main {
            margin-left: 200px; /* Same as the width of the sidenav */
            font-size: 20px; /* Increased text to enable scrolling */
            padding: 0px 10px;
            }

            /* Add an active class to the active dropdown button */
            .active {
            background-color: #ffcc00;
            color: white;
            }

            /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
            .dropdown-container {
            display: none;
            background-color: #09364F;
            padding-left: 8px;
            }

            /* Optional: Style the caret down icon */
            .fa-caret-down {
            float: right;
            padding-right: 8px;
            }

            /* Some media queries for responsiveness */
            @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            }
    </style>
</head>

<body style="height:1500px">
    <!-- <nav class="navbar navbar-expand-md py-4 navbar-light fixed-top "> -->
    <nav class="navbar navbar-grey fixed-top flex-md-nowrap p-0 shadow">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="https://thegreen.studio/images/gsm.png" width="" height=""></a>
            </div>
                <div class="header-right">
                    <a id="adminName" style='font-size:20px'>Admin Name</a>
                    <i class='fas fa-user-circle' style='font-size:36px'></i>
                </div>
    </nav>
<!-- body-row END -->
    <div class="sidenav" style="width:15%; margin-top:108px">
        <a class="active" href="#dashboard">
            <img src="https://thegreen.studio/images/Dashboard.png" width="14" height="14">  Dashboard</a>
                <a class="active" href="#floor">
                    <img src="https://thegreen.studio/images/Floor.png" width="14" height="14">  Floor</a>
                        <button class="dropdown-btn">
                            <img src="https://thegreen.studio/images/Product.png" width="14" height="14">  Product</a>
                                <i class="fa fa-caret-down"></i>
                        </button>
        <div class="dropdown-container">
            <a href="#">All Product</a>
            <a href="#">Brand</a>
            <a href="#">Category</a>
        </div>
            <a class="active" href="#mall">
                <img src="https://thegreen.studio/images/Mall.png" width="14" height="14">  Mall</a>
                    <a class="active" href="#merchant">
                        <img src="https://thegreen.studio/images/Merchant.png" width="14" height="14">  Merchant</a>
                            <a class="active "href="#shop">
                                <img src="https://thegreen.studio/images/Shop.png" width="14" height="14">  Shop</a>
                                    <button class="dropdown-btn">
                                        <img src="https://thegreen.studio/images/Stock.png" width="14" height="14">  Stock
                                            <i class="fa fa-caret-down"></i>
                                    </button>
            <div class="dropdown-container">
                <a href="#">GSM</a>
                <a href="#">Used</a>
                <a href="#">Other Mall</a>
            </div>
            <button class="dropdown-btn">
                <img src="https://thegreen.studio/images/Voucher.png" width="14" height="14">  Voucher
                    <i class="fa fa-caret-down"></i>
            </button>
                <div class="dropdown-container">
                    <a href="#">GSM</a>
                    <a href="#">Used</a>
                    <a href="#">Other Mall</a>
                </div>
                <button class="dropdown-btn">
                    <img src="https://thegreen.studio/images/Promotion&Updates.png" width="14" height="14">  Promotion/Updates
                        <i class="fa fa-caret-down"></i>
                </button>
                    <div class="dropdown-container">
                        <a href="#">GSM</a>
                        <a href="#">Used</a>
                        <a href="#">Other Mall</a>
                    </div>
                    <button class="dropdown-btn">
                        <img src="https://thegreen.studio/images/Advertisement.png" width="14" height="14">  Advertisement
                            <i class="fa fa-caret-down"></i>
                    </button>
                        <div class="dropdown-container">
                            <a href="#">Main Page</a>
                            <a href="#">Login</a>
                            <a href="#">Sign Up</a>
                            <a href="#">Reset Password</a>
                            <a href="#">Floor Selection</a>
                            <a href="#">Floor Map</a>
                            <a href="#">Merchant Showcase</a>
                        </div>
                            <a class="active "href="#customer">
                                <img src="https://thegreen.studio/images/Customer.png" width="14" height="14">  Customer</a>
                                    <a class="active "href="#sales">
                                        <img src="https://thegreen.studio/images/Sales.png" width="14" height="14">  Sales</a>
                                            <a class="active "href="#transaction">
                                                <img src="https://thegreen.studio/images/Transaction.png" width="14" height="14">  Transaction</a>
                                                    <button class="dropdown-btn">
                                                        <img src="https://thegreen.studio/images/Reports.png" width="14" height="14">  Reports</a>
                                                            <i class="fa fa-caret-down"></i>
                                                    </button>
                            <div class="dropdown-container">
                                <a href="#">Product Stock</a>
                                <a href="#">Category Sales Report</a>
                                <a href="#">Product Sales Report</a>
                                <a href="#">Merchant Sales Report</a>
                            </div>
                                <a class="active "href="#manage">
                                    <img src="https://thegreen.studio/images/Manageadmin.png" width="14" height="14">  Manage Admin</a>
                                        <button class="dropdown-btn">
                                            <img src="https://thegreen.studio/images/Setting.png" width="14" height="14">  Setting</a>
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                            <div class="dropdown-container">
                                <a href="#">Database Backup</a>
                            </div>
    </div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
