<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bidding</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- tab -->


    <!-- jquery link -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- slider links -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
    </script>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- js libraries -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- SELECT2 CDN -->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <!-- topbar start -->
    <div class="container-fluid nav_main">

        <div class="text-light p-0">
            <div class="row gx-0 d-none d-lg-flex py-4 m-auto">
                <div class=" col-md-7 d-flex align-items-center   ps-5 text-start">
                    <div class="d-inline-flex align-items-center me-4">
                        <a href="index.php" class="navbar-brand d-flex align-items-center ">
                            <img src="img/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="input-group search_bar">
                        <input type="text" class="form-control py-2   rounded-pill position-relative border-primary" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <a href="inventory.php"> <button class="btn btn-outline-primary btn-primary text-white rounded-circle  position-absolute" type="button" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </a>
                    </div>
                </div>

                <div class="col-md-5 pe-2 d-flex justify-content-center align-items-center text-end">
                    <div class="d-flex align-items-center justify-content-between me-4 position-relative">
                        <!-- --------------- -->
                        <div class="dropdown dropdown_custom">
                            <button class="dropbtn dropdown_btn"><i class="fa fa-bell fs-3 px-3 py-3 nav_bell" aria-hidden="true"></i></button>
                            <div class="dropdown-content dropdown_content_cus p-3" style="width:20rem; z-index:9999;">
                                <!-- <a href="#"> -->
                                <div class="card-body p-1 text-center test_bell">

                                    <p class="card-subtitle mb-2 text-dark text-start">
                                        Some quick example text to build on
                                        the card title and make up
                                    </p>
                                    <hr class="text-dark">
                                    <p class="card-subtitle mb-2 text-dark text-start ">
                                        Some quick example text to build on
                                        the card title and make up
                                    </p>

                                </div>
                                <!-- </a> -->
                            </div>
                        </div>
                        <button class="btn btn-primary sell_nav_btn rounded-pill">
                            <a class="text-white text-decoration-none" href="sell_product.php">Sell
                                Product
                            </a>
                        </button>


                    </div>

                    <div class="h-100 d-inline-flex align-items-center mx-n2">
                        <button class="btn btn-primary me-3 text-white rounded-pill" style="width: 95px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Register
                        </button>
                        <button class="btn btn-primary text-white rounded-pill" style="width: 95px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Login
                        </button>
                    </div>

                    <div class="dropdown dropdown_custom for_styling_1">
                        <button class="dropbtn dropdown_btn" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-user fs-3 p-2 border rounded-5" aria-hidden="true"></i>
                        </button>


                        <div class="dropdown-menu dropdown_content_cus1 p-3 for_styling_2" aria-labelledby="dropdownMenuLink" style="z-index:10000;">
                            <div class="card-body text-start">

                                <li class="mt-3"><a class="text-decoration-none text-black" href="profile_setting.php">Profile Setting</a></li>
                                <li class="mt-3"><a class="text-decoration-none text-black" href="payment_setting.php">Payment Setting</a></li>
                                <li class="mt-3"><a class="text-decoration-none text-black" href="transaction_history.php">Transaction History</a></li>
                                <li class="mt-3"><a class="text-decoration-none text-black" href="verification_center.php">Verification Center</a></li>
                                <li class="mt-3"><a class="text-decoration-none text-black" href="my_orders.php">My Orders</a></li>
                                <li class="mt-3"><a class="text-decoration-none text-black" href="help_page.php">Help</a></li>
                                <li class="mt-3"><a class="text-decoration-none text-black" href="#">Logout</a></li>

                            </div>
                        </div>
                    </div>
                    <a href="transaction_history.php" style="text-decoration:none;">
                        <span class="border rounded-3 p-2 text-white" style="font-size:16px; font-weight: 500; font-family:var(--red); margin-bottom: 100px !important;">
                            PKR 1400
                        </span>
                    </a>

                </div>
                <div class="text-center mb_custom pb-2">
                    <a class="text-white" href="" type="button" data-toggle="modal" data-target="#exampleModal125555" class="btn bg-primary w-25 text-white" style="font-size: 15px; font-weight: 500; font-family: var(--red); width: auto !important; margin-left: 9%;">Advanced Search</a>
                </div>
            </div>
        </div>

    </div>
    <!-- topbar End -->

    <!-- Navbar Start -->
    <div class="container" id="back-to-top">
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav w-100 justify-content-around  p-2 p-lg-0">
                    <a href="index.php" class="nav-item nav-link add_active active">Home</a>
                    <a href="inventory.php" class="nav-item nav-link add_active">ALL LISTINGS</a>
                    <a href="my_product.php" class="nav-item nav-link add_active">My Product</a>
                    <a href="how.php" class="nav-item nav-link add_active ">How It Works</a>
                    <a href="contact.php" class="nav-item nav-link add_active ">Contact Us</a>
                    <a href="faq.php" class="nav-item nav-link add_active ">FAQ</a>


                </div>
            </div>
            <a href="index.php" class="navbar-brand d-flex align-items-center ">
                <!-- <img src="img/logo.svg" alt="..."> -->
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <!-- Navbar End -->
    </div>
    <!-- Register Modal Start-->


    <!-- Modal signup & signin-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body Start -->
                <div class="modal-body">
                    <div class="row justify-content-center ">
                        <div class="tab_cotext col-lg-12 col-md-12 col-sm-12">
                            <!-- d-flex justify-content-around -->
                            <div class="tab_modal fw-bold d-flex justify-content-around">
                                <div class="col-6 border_right">
                                    <button class="btn tablinkssign text-primar w-100" onclick="opensign(event, 'signup')" id="defaultOpensignin">
                                        Sign up
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class=" btn tablinkssign text-primar w-100" onclick="opensign(event, 'login')">
                                        Login
                                    </button>
                                </div>

                            </div>
                            <!-- sign up form -->
                            <div id="signup" class="tabcontentsign">
                                <div class="row pt-2">

                                    <div class="form-signin bg-light">
                                        <form>

                                            <h1 class="h3 mb-3 fw-bold text-center text-capitalize">Please sign up
                                            </h1>

                                            <div class=" mb-3 mt-lg-4">
                                                <label class="mb-1" for="">Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                            <div class=" my-3">
                                                <label class="mb-1" for="">CNIC</label>
                                                <input type="number" class="form-control" placeholder="Enter CNIC">
                                            </div>
                                            <div class=" my-3">
                                                <label class="mb-1" for="">Email</label>
                                                <input type="email" class="form-control" placeholder="name@example.com">
                                            </div>

                                            <div class=" my-3">
                                                <label class="mb-1" for="">Password</label>
                                                <div class="d-flex m-auto">
                                                    <input type="password" class="form-control required" placeholder="Password">
                                                </div>
                                                <label class="mb-1" for="">Confirm Password</label>
                                                <div class="d-flex m-auto">
                                                    <input type="password" class="form-control required" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <div class=" my-3">
                                                <label class="mb-1" for="">Phone Number</label>
                                                <input type="number" class="form-control" placeholder="Phone Number">
                                            </div>

                                            <div class="checkbox mb-3">
                                                <label>
                                                    <input type="checkbox" value="terms"> Terms and conditions
                                                </label>
                                            </div>
                                            <button class="w-100 btn text-uppercase  modal_sign_up_button" type="submit">Sign
                                                up</button>
                                            <p class="mt-3 mb-3 text-center">
                                                <a class=" text-decoration-none" href="#">Already Have An Account?</a>
                                            </p>
                                        </form>
                                    </div>



                                </div>
                            </div>
                            <!-- logn form -->
                            <div id="login" class="tabcontentsign">
                                <div class="row pt-2">
                                    <div class="form-signin bg-light">
                                        <form>

                                            <h1 class="h3 mb-3 fw-bold text-center text-capitalize">Please sign in
                                            </h1>

                                            <div class=" my-3">
                                                <label for="floatingInput">Email address</label>
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            </div>
                                            <div class=" my-3">
                                                <label for="floatingPassword">Password</label>
                                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            </div>

                                            <div class="checkbox mb-3">
                                                <label>
                                                    <input type="checkbox" value="remember-me"> Remember me
                                                </label>
                                            </div>
                                            <button class="w-100 btn text-uppercase modal_sign_up_button" type="submit">Sign
                                                in</button>
                                            <p class="mt-3 mb-3 text-center">
                                                <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal10">Forgotton Password?</a>
                                            </p>
                                        </form>
                                    </div>

                                    <!-- Modal forget password start-->
                                    <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="text-center">
                                                    <h1 class="text-center forget_password_h1 py-5">Forget Password</h1>
                                                </div>
                                                <div class="modal-body">
                                                    <input class="forget_password_input p-2 my-4" type="email" placeholder="Email">
                                                    <div class="text-center mb-3">
                                                        <a href="" class="btn   forget_password_submit" data-bs-toggle="modal" data-bs-target="#exampleModal11">FILTER</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal forget password end-->

                                    <!-- Modal forget password start-->
                                    <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="text-center">
                                                    <h1 class="text-center forget_password_h1">Change Password</h1>
                                                </div>
                                                <div class="modal-body">
                                                    <input class="forget_password_input p-2 my-4" type="password" placeholder="Enter Password">
                                                    <input class="forget_password_input p-2 my-4" type="password" placeholder="conform Password">
                                                    <div class="text-center mb-3">
                                                        <a href="" class="btn   forget_password_submit">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal forget password end-->




                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Modal Body End -->

            </div>


        </div>
    </div>

    <!-- Register Modal End-->

    <div class="container">
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal125555" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog filter">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-end mb-2">
                            <button type="button" class="close close_btn_modal" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="col-md-12">
                            <div class="col-lg-12 col-md-11 col-sm-11 search_inventory_cl4 border d-lg-block active d-md-none">
                                <div class="car search_inventory_card">

                                    <div class="car p-3">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- CARD BODY 0 START -->
                                                <div class="row search_inventory_card_body d-flex mb_decrese">
                                                    <div class="col-3 p-0 my-auto">
                                                        <h5 class="car-title search_inventory_card_title m-0">
                                                            Auction time
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-9">

                                                        <div class="dropdown m-0">
                                                            <button class="btn dropdown-toggle border w-100" type="button" id="dropdownMenuButton112" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <div class="wrap_live_icon d-flex">
                                                                    LIVE <i class="fa-solid fa-circle online_green_circle px-1"></i>
                                                                </div>
                                                            </button>
                                                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton112">
                                                                <li class="d-flex">
                                                                    <a class="dropdown-item d-flex align-baseline" href="#">LIVE <i class="fa-solid fa-circle online_green_circle px-1"></i></a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                                <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                                                                <li><a class="dropdown-item" href="#">Custom</a></li>
                                                            </ul>
                                                        </div>



                                                    </div>
                                                    <i class="fa-solid fa-circle-small"></i>
                                                </div>
                                            </div>
                                            <!-- CARD BODY 0 END -->

                                            <div class="col-sm-6">
                                                <!-- CARD BODY 1 START -->
                                                <div class="row search_inventory_card_body d-flex mb_decrese">
                                                    <div class="col-md-3 p-0 my-auto">
                                                        <h5 class="car-title search_inventory_card_title m-0">
                                                            Price Range
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div id="range-slider" class="rounded-pill sliders">

                                                            <div id="slider-range">
                                                                <p>
                                                                    <input type="text" class="amount" id="amount" readonly style="border:0;">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- CARD BODY 1 END -->

                                        <!-- CARD BODY 2 START -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row search_inventory_card_body d-flex">
                                                    <div class="col-3 p-0 my-auto">
                                                        <h5 class="car-title search_inventory_card_title m-0">
                                                            Categories
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-9">


                                                        <div class="dropdown open border editing_custom_css">
                                                            <button class="btn border-0 dropdown-toggle" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                AUTOMOBILE
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu multi-level w-75" aria-labelledby="dLabel">
                                                                <li class="dropdown-submenu">
                                                                    <a class="text-decoration-none text-black px-2 " href="#">AUTOMOBILE &raquo;</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="text-decoration-none text-black px-2 " href="#">3rd level</a></li>
                                                                        <li><a class="text-decoration-none text-black px-2 " href="#">3rd level</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="text-decoration-none text-black px-2 " href="#">ATV &raquo;</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="text-decoration-none text-black px-2 " href="#">3rd level B</a></li>
                                                                        <li><a class="text-decoration-none text-black px-2 " href="#">3rd level B</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="text-decoration-none text-black px-2 " href="">BOAT</a></li>
                                                                <li><a class="text-decoration-none text-black px-2 " href="">DIRT BIKE</a></li>
                                                            </ul>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <!-- CARD BODY 2 END -->
                                            <div class="col-sm-6">
                                                <!-- CARD BODY 3 START -->
                                                <div class="row search_inventory_card_body d-flex">
                                                    <div class="col-3 p-0 my-auto">
                                                        <h5 class="car-title search_inventory_card_title m-0">
                                                            Condition
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-9 p-0">
                                                        <div class="buton border d-flex justify-content-between">
                                                            <a href="#" class="btn bg-primary text-white p-0 all ta">All</a>
                                                            <a href="#" class="btn text-primary bg-white p-0 used ta">Used</a>
                                                            <a href="#" class="btn text-primary bg-white p-0 salvage ta">New</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- CARD BODY 3 END -->
                                        </div>

                                        <div class="row">
                                            <!-- CARD BODY 4 START -->
                                            <div class="col-sm-6">
                                                <div class="row search_inventory_card_body  d-flex justify-content-between mb_decrese">
                                                    <div class="col-3 p-0 my-auto">
                                                        <h5 class="car-title search_inventory_card_title m-0">Date</h5>
                                                    </div>
                                                    <div class="col-md-9 d-flex">
                                                        <input type="date" class="px-1">
                                                        <h6 class="to">To</h6>
                                                        <input type="date" class="px-1">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- CARD BODY 4 END -->

                                            <!-- CARD BODY 5 START -->
                                            <div class="col-sm-6">
                                                <div class="search_inventory_card_body search_inventory_card_body_advance p-0 m-0 mb_decrese">
                                                    <div class="row d-flex p-0">
                                                        <div class="col-3 pad-0 p-0 my-auto">
                                                            <h5 class="car-title search_inventory_card_title">
                                                                Location
                                                            </h5>
                                                        </div>

                                                        <div class="col-md-8">
                                                            <div class="search_inventory_form_check">
                                                                <form class="form-check">

                                                                    <input class="form-check-input" type="radio" name="location" id="location" />
                                                                    <label class="form-check-label" for="location">
                                                                        Location
                                                                    </label><br />

                                                                    <input class="form-check-input" type="radio" name="location" id="city" />
                                                                    <label class="form-check-label" for="city">
                                                                        City
                                                                    </label><br />
                                                                    <!-- <input class="form-check-input" type="radio" name="city" id="state"/>
                                                <label class="form-check-label" for="state">
                                                    State / Province 
                                                </label><br /> -->

                                                                    <input class="form-check-input" type="radio" name="location" id="state" />
                                                                    <label class="form-check-label" for="state">
                                                                        State / Province
                                                                    </label><br>

                                                                    <input class="form-check-input" type="radio" name="location" id="country" />
                                                                    <label class="form-check-label" for="country">
                                                                        Country
                                                                    </label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p-0">
                                                        <div class="col-3 p-0"></div>
                                                        <div class="col-md-9">
                                                            <select class="location form-control mt-2" name="" id="">
                                                                <option class="selected">Pakistan</option>
                                                                <option value="30">Lahore</option>
                                                                <option value="31">Islamabad</option>
                                                                <option value="32">Karachi</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD BODY 5 END -->

                                    <h3 class="or text-center">OR</h3>
                                    <div class="row vin mt-4">
                                        <div class="col-md-3 p-0 my-auto"><label for="peas">Keyword</label></div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="peas" id="peas" placeholder="Select from the following keywords or type them here" />

                                            <div class="multiselect_keyword">
                                                <span class="multiselect_keyword_span_1">Hello</span>
                                                <span class="multiselect_keyword_span_2">Hello</span>
                                                <span class="multiselect_keyword_span_3">Hello</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="" class="btn bg-primary text-white rounded w-75 my-3">SUBMIT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <!-- js nav tab -->
    <script>
        function openCity(evte, cityName) {
            var ie, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (ie = 0; ie < tabcontent.length; ie++) {
                tabcontent[ie].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (ie = 0; ie < tablinks.length; ie++) {
                tablinks[ie].className = tablinks[ie].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evte.currentTarget.className += " active";

            // Get the element with id="defaultOpen" and click on it
        }
        document.getElementById("defaultOpen").click();
    </script>

    <!-- navtab signin & signup -->
    <script>
        function opensign(evt, cityNamesign) {
            var i, tabcontentsign, tablinkssign;
            tabcontentsign = document.getElementsByClassName("tabcontentsign");
            for (i = 0; i < tabcontentsign.length; i++) {
                tabcontentsign[i].style.display = "none";
            }
            tablinkssign = document.getElementsByClassName("tablinkssign");
            for (i = 0; i < tablinkssign.length; i++) {
                tablinkssign[i].className = tablinkssign[i].className.replace(" active", "");
            }
            document.getElementById(cityNamesign).style.display = "block";
            evt.currentTarget.className += " active";

            // Get the element with id="defaultOpen" and click on it
        }
        // document.getElementById("defaultOpen").click();
        document.getElementById("defaultOpensignin").click();
    </script>

    <script>
        $(document).ready(function() {
            $(".ta").click(function() {

                $(".ta").removeClass("bg-primary text-white");
                $(".ta").addClass("bg-white text-primary px-3 rounded-4");
                $(this).addClass("bg-primary text-white");
                $(this).removeClass("bg-white text-primary");
            });
        });
    </script>

    <!-- range slider start -->
    <script>
        // Range slider - gravity forms
        $(function() {
            $(".sliders").slider({
                range: true,
                min: 1500,
                max: 10000,
                step: 100,
                values: [3000, 6000],
                slide: function(event, ui) {
                    $(".amount").val(" Rs " + ui.values[0] + " - Rs " + ui.values[1]);
                }
            });
            $(".amount").val(" Rs " + $(".sliders").slider("values", 0) + " - Rs " + $(".sliders").slider("values", 1));
        });
    </script>
    <!-- range slider end-->

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>