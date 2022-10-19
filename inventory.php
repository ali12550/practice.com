<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inventory</title>
    <script src="https://kit.fontawesome.com/4366d6f846.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include "header.php" ?>

    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Listings</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->
    <!-- newsticker section start -->
    <div class="TickerNews product_slider" id="T1">
        <div class="ti_wrapper">
            <div class="col-md-12 text-center mt-5">
                <h1 class="title_guid">Featured</h1>
            </div>
            <div class="ti_slide">
                <div class="ti_content d-flex gap-3">
                    <div class="ti_news mx-2">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="bbb_viewed_image image"><img class="img-fluid" src="./img/225px.png" alt=""></div>
                            <div class="bbb_viewed_content text-center">
                                <div class="bbb_viewed_price">₹1379</div>
                            </div>

                        </div>
                    </div>
                    <div class="ti_news mx-2" style="margin-right: 100px">
                        <div class="  d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="bbb_viewed_image image"><img class="img-fluid" src="./img/mobile.jpg" alt=""></div>
                            <div class="bbb_viewed_content text-center">
                                <div class="bbb_viewed_price">₹1379</div>

                            </div>

                        </div>
                    </div>
                    <div class="ti_news mx-2" style="margin-right: 100px">

                        <div class="d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="bbb_viewed_image image"><img class="img-fluid" src="./img/bird.png" alt=""></div>
                            <div class="bbb_viewed_content text-center">
                                <div class="bbb_viewed_price">₹1379</div>

                            </div>

                        </div>
                    </div>
                    <div class="ti_news mx-2" style="margin-right: 100px">

                        <div class="  d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="bbb_viewed_image image"><img class="img-fluid" src="./img/car.png" alt=""></div>
                            <div class="bbb_viewed_content text-center">
                                <div class="bbb_viewed_price">₹1379</div>

                            </div>

                        </div>
                    </div>
                    <div class="ti_news mx-2" style="margin-right: 100px">

                        <div class="  d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="bbb_viewed_image image"><img class="img-fluid" src="./img/unb.webp" alt=""></div>
                            <div class="bbb_viewed_content text-center">
                                <div class="bbb_viewed_price">₹1379</div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- newsticker section end -->

    <!-- search_inventory start -->


    <section class="container-fluid search_inventory py-5 margin_y_100px">

        <div class="row search_inventory_row d-flex justify-content-around">

            <div class="dropdown p-0">
                <button onclick="myFunction()" class="dropbtn d-lg-none mb-3"><i class="fa-solid fa-filter"></i>
                    Filter</button>
                <div id="myDropdown" class="dropdown-content">
                    <div class="col-lg-3 col-md-12 col-sm-12 search_inventory_cl4 border m-0">
                        <div class="car search_inventory_card">
                            <div class="car-header search_inventory_card_header bg-primary text-white text-center p-2">
                                Filter
                            </div>

                            <div class="car p-3">

                                <!-- CARD BODY 0 START -->
                                <div class="row search_inventory_card_body d-flex">
                                    <div class="col-3 p-0">
                                        <h5 class="car-title search_inventory_card_title m-0">
                                            Auction time
                                        </h5>
                                    </div>
                                    <div class="col-md-9">

                                        <div class="dropdown m-0">
                                            <button class="btn dropdown-toggle border w-100 " type="button" id="dropdownMenuButton112" data-bs-toggle="dropdown" aria-expanded="false">
                                                LIVE <i class="fa-solid fa-circle online_green_circle"></i>
                                            </button>
                                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton112">
                                                <li class="d-flex">
                                                    <a class="dropdown-item d-flex justify-content-between align-baseline" href="#">
                                                        LIVE <i class="fa-solid fa-circle online_green_circle"></i>
                                                    </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                                                <li><a class="dropdown-item" href="#">Custom</a></li>
                                            </ul>
                                        </div>




                                    </div>
                                </div>

                                <!-- CARD BODY 0 END -->

                                <!-- CARD BODY 1 START -->
                                <div class="row search_inventory_card_body d-flex">
                                    <div class="col-md-3 p-0">
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
                                <!-- CARD BODY 1 END -->

                                <!-- CARD BODY 2 START -->

                                <div class="row search_inventory_card_body d-flex">
                                    <div class="col-3 p-0">
                                        <h5 class="car-title search_inventory_card_title m-0">
                                            Categories
                                        </h5>
                                    </div>
                                    <div class="col-md-9">

                                        <nav class="navbar navbar-expand-lg navbar-light border">
                                            <div class="container-fluid">
                                                <ul class="navbar-nav">
                                                    <!-- Dropdown -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                                            AUTOMOBILE
                                                        </a>
                                                        <ul class="dropdown-menu bg_gray_color" aria-labelledby="navbarDropdownMenuLink">
                                                            <!-- <li>
                                                            <a class="dropdown-item" href="#">AUTOMOBILE</a>
                                                        </li> -->

                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    AUTOMOBILE &raquo;
                                                                </a>
                                                                <ul class="dropdown-menu bg_gray_color dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">Submenu item 1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">Submenu item 2</a>
                                                                    </li>

                                                                </ul>
                                                            </li>

                                                            <li>
                                                                <a class="dropdown-item" href="#">ATV</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">BOAT</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">DIRT BIKE</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>

                                    </div>
                                </div>



                                <!-- CARD BODY 2 END -->

                                <!-- CARD BODY 3 START -->
                                <div class="row search_inventory_card_body d-flex">
                                    <div class="col-3 p-0">
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
                                <!-- CARD BODY 3 END -->

                                <!-- CARD BODY 4 START -->
                                <div class="row search_inventory_card_body d-flex justify-content-between">
                                    <div class="col-3 p-0">
                                        <h5 class="car-title search_inventory_card_title m-0">Date</h5>
                                    </div>
                                    <div class="col-md-9 d-flex">
                                        <input type="date" class="px-1">
                                        <h6 class="to">To</h6>
                                        <input type="date" class="px-1">
                                    </div>
                                </div>
                                <!-- CARD BODY 4 END -->

                                <!-- CARD BODY 5 START -->
                                <div class="search_inventory_card_body p-0 m-0">
                                    <div class="row d-flex p-0">
                                        <div class="col-3 pad-0 p-0">
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

                                <!-- CARD BODY 5 END -->

                                <h3 class="or text-center">OR</h3>
                                <div class="row vin mt-4">
                                    <div class="col-md-3 p-0"><label for="peas">Keyword</label></div>
                                    <div class="col-md-9 p-0">
                                        <input type="text" name="peas" id="peas" placeholder="Lookup VIN or Lot Number" />

                                        <div class="multiselect_keyword">
                                            <span class="multiselect_keyword_span_1">Hello</span>
                                            <span class="multiselect_keyword_span_2">Hello</span>
                                            <span class="multiselect_keyword_span_3">Hello</span>
                                        </div>
                                    </div>
                                </div>

                                <a href="#" class="btn btn_search mt-3">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- COL_MD_4 START -->
            <div class="col-md-4">
                <div class="col-lg-12 col-md-11 col-sm-11 search_inventory_cl4 border d-lg-block active d-md-none">
                    <div class="car search_inventory_card">
                        <div class="car-header search_inventory_card_header bg-primary text-white p-2">
                            Filter
                        </div>

                        <div class="car p-3">

                            <!-- CARD BODY 0 START -->
                            <div class="row search_inventory_card_body d-flex">
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
                            <!-- CARD BODY 0 END -->

                            <!-- CARD BODY 1 START -->
                            <div class="row search_inventory_card_body d-flex">
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
                            <!-- CARD BODY 1 END -->

                            <!-- CARD BODY 2 START -->

                            <div class="row search_inventory_card_body d-flex">
                                <div class="col-3 p-0 my-auto">
                                    <h5 class="car-title search_inventory_card_title m-0">
                                        Categories
                                    </h5>
                                </div>
                                <div class="col-md-9">

                                    <!-- <nav class="navbar navbar-expand-lg navbar-light border">
                                        <div class="container-fluid">
                                            <ul class="navbar-nav">
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                                    data-mdb-toggle="dropdown" aria-expanded="false">
                                                    AUTOMOBILE
                                                    </a>
                                                    <ul class="dropdown-menu bg_gray_color" aria-labelledby="navbarDropdownMenuLink">

                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                            AUTOMOBILE &raquo;
                                                            </a>
                                                            <ul class="dropdown-menu bg_gray_color dropdown-submenu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Submenu item 1</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Submenu item 2</a>
                                                            </li>
                                                            
                                                            </ul>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#">ATV</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">BOAT</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">DIRT BIKE</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav> -->


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



                            <!-- CARD BODY 2 END -->

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
                            <!-- CARD BODY 3 END -->

                            <!-- CARD BODY 4 START -->
                            <div class="row search_inventory_card_body d-flex justify-content-between">
                                <div class="col-3 p-0 my-auto">
                                    <h5 class="car-title search_inventory_card_title m-0">Date</h5>
                                </div>
                                <div class="col-md-9 d-flex">
                                    <!-- <select class="form-select year" aria-label="Default select example form-control">
                                        <option selected>2012</option>
                                        <option value="5">2013</option>
                                        <option value="6">2014</option>
                                        <option value="7">2015</option>
                                        <option value="8">2016</option>
                                        <option value="13">2022</option>
                                        <option value="14">2021</option>
                                        <option value="15">2020</option>
                                        <option value="16">2019</option>
                                        <option value="17">2022</option>
                                        <option value="18">2021</option>
                                        <option value="19">2020</option>
                                        <option value="20">2019</option>
                                    </select> -->
                                    <input type="date" class="px-1">
                                    <h6 class="to">To</h6>
                                    <input type="date" class="px-1">
                                    <!-- <select class="form-select year" aria-label="Default select example form-control">
                                        <option selected>2023</option>
                                        <option value="9">2022</option>
                                        <option value="10">2021</option>
                                        <option value="11">2020</option>
                                        <option value="12">2019</option>
                                        <option value="21">2022</option>
                                        <option value="22">2021</option>
                                        <option value="23">2020</option>
                                        <option value="24">2019</option>
                                        <option value="25">2022</option>
                                        <option value="26">2021</option>
                                        <option value="26">2020</option>
                                        <option value="27">2019</option>
                                    </select> -->
                                </div>
                            </div>
                            <!-- CARD BODY 4 END -->

                            <!-- CARD BODY 5 START -->
                            <div class="search_inventory_card_body p-0 m-0">
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

                            <a href="#" class="btn btn_search mt-3">Search</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COL_MD_4 END -->

            <!-- COL_MD_8 START -->

            <div class="col-lg-8 search_inventory_cl8 m-0">
                <div class="row search_inventorysearch_inventory_cl8_row_header_cl8_row m-0">
                    <!-- HEADER START -->

                    <div class="row search_inventory_cl8_row_header d-lg-flex m-0">
                        <div class="col-md-2 bg-black text-white border-end">
                            <h6 class="p-2 header_h6">Image</h6>
                        </div>
                        <div class="col-md-2 bg-black text-white border-end">
                            <h6 class="p-2 header_h6">Title</h6>
                        </div>
                        <div class="col-md-2 bg-black text-white border-end">
                            <h6 class="p-2 header_h6">Product Info</h6>
                        </div>
                        <div class="col-md-2 bg-black text-white border-end">
                            <h6 class="py-2 px-1 header_h6">Condition</h6>
                        </div>
                        <div class="col-md-2 bg-black text-white border-end">
                            <h6 class="p-2 header_h6">Auction time</h6>
                        </div>
                        <div class="col-md-2 bg-black text-white">
                            <h6 class="p-2 header_h6">Bids</h6>
                        </div>
                    </div>

                    <!-- HEADER END -->

                    <div class="dispay_f">
                        <!-- WRAP ONE START -->
                        <div class="wrap row col-md-12 col-sm-5 d-flex">
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 p-0">
                                <div class="car">
                                    <div class="car-header">
                                        <img src="./img/vehical_1.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0">
                                <div class="car">
                                    <div class="car_header text-center">
                                        <h1 class="title_cl8">2015 LEXUS RX 350</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 d-flex">
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="v_info text-center">
                                                Odometer
                                                <span class="v_info_span">
                                                    77616
                                                    (ACTUAL)
                                                </span>

                                                Estimated Retail Value
                                                <span class="v_info_span"> $27,884.45 USD </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="condition text-center">
                                                Salvage Title
                                                Front End Damage
                                                Keys Available
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2 d-flex d_xs_flex  flex-md-column flex-sm-row justify-content-around">
                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car-header">
                                        <p class="m-0 s_info text-center">
                                            <span class="s_info_span">
                                                AL - BIRMINGHAM
                                                <!-- <i class="fa-solid fa-caret-right"><i> -->
                                                <span>
                                                    - / - / SB004
                                                    Item#
                                                </span>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0 text-center">
                                    <h6 class="auction">Auction in 0D 5H 42min</h6>
                                </div>

                            </div>

                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 my-auto">
                                <div class="car">
                                    <div class="car-header button text-center">
                                        <a href="detail_page.php" class="btn btn-primary text-white">Bid Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- WRAP ONE END -->
                        <!-- WRAP TWO START -->
                        <div class="wrap row col-md-12 col-sm-5 d-flex">
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 p-0">
                                <div class="car">
                                    <div class="car-header">
                                        <img src="./img/vehical_1.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0">
                                <div class="car">
                                    <div class="car_header text-center">
                                        <h1 class="title_cl8">2015 LEXUS RX 350</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 d-flex">
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="v_info text-center">
                                                Odometer
                                                <span class="v_info_span">
                                                    77616
                                                    (ACTUAL)
                                                </span>

                                                Estimated Retail Value
                                                <span class="v_info_span"> $27,884.45 USD </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="condition text-center">
                                                Salvage Title
                                                Front End Damage
                                                Keys Available
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2 d-flex d_xs_flex  flex-md-column flex-sm-row justify-content-around">
                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car-header">
                                        <p class="m-0 s_info text-center">
                                            <span class="s_info_span">
                                                AL - BIRMINGHAM
                                                <!-- <i class="fa-solid fa-caret-right"><i> -->
                                                <span>
                                                    - / - / SB004
                                                    Item#
                                                </span>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0 text-center">
                                    <h6 class="auction">Auction in 0D 5H 42min</h6>
                                </div>

                            </div>

                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 my-auto">
                                <div class="car">
                                    <div class="car-header button text-center">
                                        <a href="detail_page.php" class="btn btn-primary text-white">Bid Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- WRAP TWO END -->
                    </div>
                    <div class="dispay_f">
                        <!-- WRAP six START -->
                        <div class="wrap row col-md-12 col-sm-5 d-flex">
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 p-0">
                                <div class="car">
                                    <div class="car-header">
                                        <img src="./img/vehical_1.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0">
                                <div class="car">
                                    <div class="car_header text-center">
                                        <h1 class="title_cl8">2015 LEXUS RX 350</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 d-flex">
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="v_info text-center">
                                                Odometer
                                                <span class="v_info_span">
                                                    77616
                                                    (ACTUAL)
                                                </span>

                                                Estimated Retail Value
                                                <span class="v_info_span"> $27,884.45 USD </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="condition text-center">
                                                Salvage Title
                                                Front End Damage
                                                Keys Available
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2 d-flex d_xs_flex  flex-md-column flex-sm-row justify-content-around">
                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car-header">
                                        <p class="m-0 s_info text-center">
                                            <span class="s_info_span">
                                                AL - BIRMINGHAM
                                                <!-- <i class="fa-solid fa-caret-right"><i> -->
                                                <span>
                                                    - / - / SB004
                                                    Item#
                                                </span>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0 text-center">
                                    <h6 class="auction">Auction in 0D 5H 42min</h6>
                                </div>

                            </div>

                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 my-auto">
                                <div class="car">
                                    <div class="car-header button text-center">
                                        <a href="detail_page.php" class="btn btn-primary text-white">Bid Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- WRAP six END -->
                        <!-- WRAP seven START -->
                        <div class="wrap row col-md-12 col-sm-5 d-flex">
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 p-0">
                                <div class="car">
                                    <div class="car-header">
                                        <img src="./img/vehical_1.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0">
                                <div class="car">
                                    <div class="car_header text-center">
                                        <h1 class="title_cl8">2015 LEXUS RX 350</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 d-flex">
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="v_info text-center">
                                                Odometer
                                                <span class="v_info_span">
                                                    77616
                                                    (ACTUAL)
                                                </span>

                                                Estimated Retail Value
                                                <span class="v_info_span"> $27,884.45 USD </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="condition text-center">
                                                Salvage Title
                                                Front End Damage
                                                Keys Available
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2 d-flex d_xs_flex  flex-md-column flex-sm-row justify-content-around">
                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car-header">
                                        <p class="m-0 s_info text-center">
                                            <span class="s_info_span">
                                                AL - BIRMINGHAM
                                                <!-- <i class="fa-solid fa-caret-right"><i> -->
                                                <span>
                                                    - / - / SB004
                                                    Item#
                                                </span>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0 text-center">
                                    <h6 class="auction">Auction in 0D 5H 42min</h6>
                                </div>

                            </div>

                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 my-auto">
                                <div class="car">
                                    <div class="car-header button text-center">
                                        <a href="detail_page.php" class="btn btn-primary text-white">Bid Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- WRAP seven END -->
                    </div>
                    <div class="dispay_f">
                        <!-- WRAP ONE START -->
                        <div class="wrap row col-md-12 col-sm-5 d-flex">
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 p-0">
                                <div class="car">
                                    <div class="car-header">
                                        <img src="./img/vehical_1.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0">
                                <div class="car">
                                    <div class="car_header text-center">
                                        <h1 class="title_cl8">2015 LEXUS RX 350</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 d-flex">
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="v_info text-center">
                                                Odometer
                                                <span class="v_info_span">
                                                    77616
                                                    (ACTUAL)
                                                </span>

                                                Estimated Retail Value
                                                <span class="v_info_span"> $27,884.45 USD </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="condition text-center">
                                                Salvage Title
                                                Front End Damage
                                                Keys Available
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2 d-flex d_xs_flex  flex-md-column flex-sm-row justify-content-around">
                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car-header">
                                        <p class="m-0 s_info text-center">
                                            <span class="s_info_span">
                                                AL - BIRMINGHAM
                                                <!-- <i class="fa-solid fa-caret-right"><i> -->
                                                <span>
                                                    - / - / SB004
                                                    Item#
                                                </span>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0 text-center">
                                    <h6 class="auction">Auction in 0D 5H 42min</h6>
                                </div>

                            </div>

                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 my-auto">
                                <div class="car">
                                    <div class="car-header button text-center">
                                        <a href="detail_page.php" class="btn btn-primary text-white">Bid Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- WRAP ONE END -->
                        <!-- WRAP TWO START -->
                        <div class="wrap row col-md-12 col-sm-5 d-flex">
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 p-0">
                                <div class="car">
                                    <div class="car-header">
                                        <img src="./img/vehical_1.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0">
                                <div class="car">
                                    <div class="car_header text-center">
                                        <h1 class="title_cl8">2015 LEXUS RX 350</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 d-flex">
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="v_info text-center">
                                                Odometer
                                                <span class="v_info_span">
                                                    77616
                                                    (ACTUAL)
                                                </span>

                                                Estimated Retail Value
                                                <span class="v_info_span"> $27,884.45 USD </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="condition text-center">
                                                Salvage Title
                                                Front End Damage
                                                Keys Available
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2 d-flex d_xs_flex  flex-md-column flex-sm-row justify-content-around">
                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car-header">
                                        <p class="m-0 s_info text-center">
                                            <span class="s_info_span">
                                                AL - BIRMINGHAM
                                                <!-- <i class="fa-solid fa-caret-right"><i> -->
                                                <span>
                                                    - / - / SB004
                                                    Item#: 0
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0 text-center">
                                    <h6 class="auction">Auction in 0D 5H 42min</h6>
                                </div>

                            </div>


                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 my-auto">
                                <div class="car">
                                    <div class="car-header button text-center">
                                        <a href="detail_page.php" class="btn btn-primary text-white">Bid Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- WRAP TWO END -->
                    </div>

                    <div class="dispay_f">
                        <!-- WRAP ONE START -->
                        <div class="wrap row col-md-12 col-sm-5 d-flex">
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 p-0">
                                <div class="car">
                                    <div class="car-header">
                                        <img src="./img/vehical_1.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0">
                                <div class="car">
                                    <div class="car_header text-center">
                                        <h1 class="title_cl8">2015 LEXUS RX 350</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 d-flex">
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="v_info text-center">
                                                Odometer
                                                <span class="v_info_span">
                                                    77616
                                                    (ACTUAL)
                                                </span>

                                                Estimated Retail Value
                                                <span class="v_info_span"> $27,884.45 USD </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="condition text-center">
                                                Salvage Title
                                                Front End Damage
                                                Keys Available
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2 d-flex d_xs_flex  flex-md-column flex-sm-row justify-content-around">
                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car-header">
                                        <p class="m-0 s_info text-center">
                                            <span class="s_info_span">
                                                AL - BIRMINGHAM
                                                <!-- <i class="fa-solid fa-caret-right"><i> -->
                                                <span>
                                                    - / - / SB004
                                                    Item#: 0
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0 text-center">
                                    <h6 class="auction">Auction in 0D 5H 42min</h6>
                                </div>

                            </div>


                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 my-auto">
                                <div class="car">
                                    <div class="car-header button text-center">
                                        <a href="detail_page.php" class="btn btn-primary text-white">Bid Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- WRAP ONE END -->
                        <!-- WRAP TWO START -->
                        <div class="wrap row col-md-12 col-sm-5 d-flex">
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 p-0">
                                <div class="car">
                                    <div class="car-header">
                                        <img src="./img/vehical_1.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0">
                                <div class="car">
                                    <div class="car_header text-center">
                                        <h1 class="title_cl8">2015 LEXUS RX 350</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 d-flex">
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="v_info text-center">
                                                Odometer
                                                <span class="v_info_span">
                                                    77616
                                                    (ACTUAL)
                                                </span>

                                                Estimated Retail Value
                                                <span class="v_info_span"> $27,884.45 USD </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car">
                                        <div class="car-header">
                                            <p class="condition text-center">
                                                Salvage Title
                                                Front End Damage
                                                Keys Available
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2 d-flex d_xs_flex  flex-md-column flex-sm-row justify-content-around">
                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0">
                                    <div class="car-header">
                                        <p class="m-0 s_info text-center">
                                            <span class="s_info_span">
                                                AL - BIRMINGHAM
                                                <!-- <i class="fa-solid fa-caret-right"><i> -->
                                                <span>
                                                    - / - / SB004
                                                    Item#: 0
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 search_inventory_cl8_row_cl2 p-0 text-center">
                                    <h6 class="auction">Auction in 0D 5H 42min</h6>
                                </div>

                            </div>

                            <div class="col-md-2 search_inventory_cl8_row_cl2 p-0 my-auto">
                                <div class="car">
                                    <div class="car-header button text-center">
                                        <a href="detail_page.php" class="btn btn-primary text-white">Bid Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- WRAP TWO END -->
                    </div>
                </div>
            </div>

            <!-- COL_MD_8 END -->
        </div>

    </section>

    <!-- search_inventory end -->
    <?php include "footer.php" ?>

    <script>
        /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
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

    <script src="libs/jquery.tickerNews.min.js"></script>
    <script type="text/javascript">
        $(function() {
            _Ticker = $(".TickerNews").newsTicker();
        });
    </script>
    <script>
        (function($) {
            $.fn.newsTicker = function(options) {
                if ($(this).length < 1) return this;

                var opt = $.extend(true, {
                    base: {
                        width: 2100,
                        time: 40000
                    },
                    itemWidth: "auto",
                    ticker: ".ti_news",
                    tickerClone: "ti_clone",
                    wrapper: ".ti_wrapper",
                    slide: ".ti_slide",
                    content: ".ti_content",

                    callbacks: {
                        beforeLoad: function($Ticker) {},
                        onLoad: function($current, $Ticker) {},
                        beforeAnimation: function($old, $current) {},
                        completeAnimation: function($old, $current) {},
                        isPaused: function($current, $Ticker) {},
                        isResumed: function($current, $Ticker) {}
                    },

                    core: {
                        _getTime: function(w) {
                            baseMargin = (typeof $contentTickers === "undefined") ? 0 : $contentTickers
                                .first().css("margin-left");
                            baseMargin = (baseMargin < 0) ? baseMargin : 0;
                            return opt.base.time * (w / (baseMargin + opt.base.width));
                        },

                        _contentWidth: function($tickers) {
                            var w = 0;
                            if (opt.itemWidth !== "auto" && opt.itemWidth !== 0) {
                                w = $tickers.length * opt.itemWidth;
                                $tickers.width(opt.itemWidth);
                            } else {
                                $tickers.each(function() {
                                    w = w + $(this).width()
                                });
                            }
                            return Math.ceil(w + 2);
                        }
                    }

                }, options);

                $(this).each(function() {
                    var $Ticker = $(this);

                    $Ticker.data("ticker", {
                        stop: true,
                        animation: null
                    });

                    opt.callbacks.beforeLoad($(this));

                    var $notizieTicker = $Ticker.find(opt.ticker),
                        $wrapperTicker = $Ticker.find(opt.wrapper),
                        $ti_slide = $Ticker.find(opt.slide),
                        $contentTicker = $Ticker.find(opt.content);

                    var width_content = opt.core._contentWidth($notizieTicker),
                        wrapper_width = $wrapperTicker.width(),
                        $current,
                        $old = $();

                    if (width_content < wrapper_width) {
                        var x = Math.ceil(wrapper_width / width_content),
                            $clone = $contentTicker.children().clone();
                        for (var i = 1; i <= x; i++) {
                            $contentTicker.append($clone.clone());
                        }
                        if (!opt.itemWidth || opt.itemWidth == "auto") {
                            width_content = width_content * i;
                        } else {
                            width_content = ($contentTicker.children().length * opt.itemWidth);
                        }
                    }

                    if (width_content * 3 > $ti_slide.width()) $ti_slide.width((width_content * 3) + 100);

                    $ti_slide.append($contentTicker.clone().addClass(opt.tickerClone));
                    $ti_slide.append($contentTicker.clone().addClass(opt.tickerClone));

                    var $contentTickers = $Ticker.find(opt.content);
                    $contentTickers.width(width_content);

                    $current = $contentTickers.first();

                    opt.callbacks.onLoad($current, $(this));

                    var animateTicker = function(m) {
                        $ti_slide.append($old);
                        var m = (typeof m == "undefined") ? 0 : m;
                        $old.css("margin-left", m);

                        opt.callbacks.beforeAnimation($old, $current);

                        $Ticker.data("stop", false);
                        var tickerAnimation = $current.animate({
                            "margin-left": -width_content,
                        }, {
                            easing: "linear",
                            duration: opt.core._getTime(width_content),
                            complete: function() {
                                $old = $current;
                                $current = $current.next();
                                opt.callbacks.completeAnimation($old, $current);
                                animateTicker.call($Ticker);
                            }
                        });
                        $Ticker.data("animation", tickerAnimation);
                    }

                    animateTicker.call(this);

                    $Ticker[0].pauseTicker = function() {
                        $Ticker.each(function() {
                            var _anim = $Ticker.data("animation"),
                                _stop = $Ticker.data("stop");
                            if (!!_stop || !_anim) return;
                            _anim.stop();
                            $Ticker.data("stop", true);
                            opt.callbacks.isPaused();
                        });
                    }

                    $Ticker[0].startTicker = function() {
                        $Ticker.each(function() {
                            if (!$Ticker.data("stop")) return;
                            animateTicker($Ticker);
                            $Ticker.data("stop", false);
                            opt.callbacks.isResumed();
                        });
                    }
                });

                return this;
            };

            $.fn.newsTickerPause = function() {
                $(this).each(function() {
                    if ("pauseTicker" in $(this)[0]) $(this)[0].pauseTicker();
                });
            }

            $.fn.newsTickerResume = function() {
                $(this).each(function() {
                    if ("startTicker" in $(this)[0]) $(this)[0].startTicker();
                });
            }

        }(jQuery));
    </script>


</body>

</html>