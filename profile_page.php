<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <link rel="stylesheet" href="./js/credit_card.js">

</head>

<body>
    <?php include "header.php" ?>

    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->

    <!-- Profile page Section start -->

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="container my-3">
                    <div class="row">
                        <div class="col-md-12 justify-content-around border rounded">
                            <div class="text-center mt-5">
                                <div class="wrap_div border">
                                    <span class="user_edit user_edit_icon">
                                        <i class="fa-solid fa-user ml_customize"></i>
                                    </span>
                                    <span class="ml_custom mt-5">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                </div>
                                <h1 class="profile_page_title">Sajjad Ali</h1>
                                <div class="stars_profile_page">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <span><a href="">5.9</a></span>
                                    <span><a href="">10 Reviews</a></span>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between align-baseline mt-5 mb-4">
                                <h1 class="verified_profile_h1">Payment Method:</h1>
                                <h6 class="verified_profile_h6 my-auto"><i class="fa-solid fa-circle-check text-primary"></i> Verified</h6>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between align-baseline my-4">
                                <h1 class="verified_profile_h1">Goverment ID:</h1>
                                <h6 class="verified_profile_h6 my-auto"><i class="fa-solid fa-circle-check text-primary"></i> Verified</h6>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between align-baseline my-4">
                                <h1 class="verified_profile_h1">Joining Date:</h1>
                                <h6 class="verified_profile_h6 my-auto">11/6/1955</h6>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between align-baseline my-4">
                                <h1 class="verified_profile_h1">Successful Auction:</h1>
                                <h6 class="verified_profile_h6 my-auto">5</h6>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between align-baseline my-4">
                                <h1 class="verified_profile_h1">Total Listing:</h1>
                                <h6 class="verified_profile_h6 my-auto">12</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container my-3">
                    <div class="row">
                        <div class="col-md-12 border rounded p-0">
                            <div class="bg-primary stlyling_border">
                                <h1 class="verified_profile_cl8_h1 text-white px-3 py-2">Listings</h1>
                            </div>
                            <div class="px-3">
                                <div class="text-end">
                                    <div class="dropdown">
                                        <button class="btn border dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sort By: <span class="newly_listed">Newly listed
                                        </button>
                                        <div class="dropdown-menu w-25" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Newly listed</a>
                                            <a class="dropdown-item" href="#">Most relevant</a>
                                            <a class="dropdown-item" href="#">Lowest Price</a>
                                            <a class="dropdown-item" href="#">Highest Price</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row product_display_none">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item py-3">
                                            <div class="card h-100 card_vehical card_vehical_">
                                                <img src="img/vehical_1.jpg"  class="card-img-top" alt="...">
                                                <div class="card-body fw-bold">
                                                    <div class="my-2 text-start">
                                                        <span class="fw-bold">2015 BMW XDRIVE35I</span>
                                                    </div>
                                                    <div class="my-2 text-start">
                                                        <div class="mb-10">
                                                            <strong class="clotno">
                                                                <span class="">Product ID</span>
                                                                <span class="text-primary">44539872</span>
                                                            </strong>
                                                        </div>
                                                        <div class="my-1 text-start">Current Bid:
                                                            <span class="cbid-value"><span class="text-success fw-bolder">$7,500.00</span>
                                                                <span class="currencyCode">USD</span></span>
                                                        </div>
                                                        <div class="text-start">
                                                            Location:<span class="fw-normal">MA NORTH BOSTON</span>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-3">
                                                        <a href="product_detail.php" class="btn btn-primary rounded-pill px-lg-5 py-1"> View
                                                            Details</a>
                                                    </div>
                                                    <div class="d-flex text-center justify-content-center mt-lg-3">
                                                        <span><i class="fa fa-star me-2" aria-hidden="true"></i></span>
                                                        <h4>Watch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center my-3">
                                    <span href="" class="btn display_block_product">See More <i class="fa-solid fa-arrow-down"></i></span>
                                    <span href="" class="btn display_block_seeless">See Less <i class="fa-solid fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="bg-primary p-0 rounded mx-2">
                                <h1 class="verified_profile_cl8_h1 text-white px-3">Reviews</h1>
                            </div>
                            <div class="stars_profile_page px-sm-3 px-1">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <span><a href="">4.9</a></span>
                                <span><a href="">10 Reviews</a></span>
                            </div>
                            <div class="px-sm-3 px-1">
                                <div class="row comment_row mt-2">
                                    <div class="col-md-1 text-center col-2 comment_cl_1 mt-md-3">
                                        <img class="img-fluid comment_cl_1_img" src="./img/about-1.jpg" alt="">
                                    </div>
                                    <div class="col-md-11 col-10 comment_cl_10">
                                        <div class="row comment_sec_row">
                                            <div class="col-md-12 comment_cl_12">
                                                <span class="user_name">Sajjad Ali</span>
                                                <i class="fa-solid fa-circle-check text-primary"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <a class="color_yellow" href="">5</a>
                                            </div>
                                            <div class="col-md-12 comment_sec_cl_12">
                                                <div id="section">
                                                    <div class="article">
                                                        <p>Bacon ipsum dolor amet sirloin jowl turducken pork loin pig pork belly, chuck cupim tongue beef doner tri-tip pancetta spare ribs porchetta.
                                                        </p>
                                                        <p class="moretext1">
                                                            Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork chop doner sirloin, bacon beef brisket ball tip short ribs.
                                                        </p>
                                                    </div>
                                                    <span class="moreless-button1 read_more_btn">Read more</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row comment_row mt-3">
                                    <div class="col-md-1 text-center col-2 comment_cl_1 mt-md-3">
                                        <img class="img-fluid comment_cl_1_img" src="./img/about-1.jpg" alt="">
                                    </div>
                                    <div class="col-md-11 col-10 comment_cl_10">
                                        <div class="row comment_sec_row">
                                            <div class="col-md-12 comment_cl_12">
                                                <span class="user_name">Sajjad Ali</span>
                                                <i class="fa-solid fa-circle-check text-primary"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <a class="color_yellow" href="">5</a>
                                            </div>
                                            <div class="col-md-12 comment_sec_cl_12">
                                                <div id="section">
                                                    <div class="article">
                                                        <p>Bacon ipsum dolor amet sirloin jowl turducken pork loin pig pork belly, chuck cupim tongue beef doner tri-tip pancetta spare ribs porchetta.
                                                        </p>
                                                        <p class="moretext2">
                                                            Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork chop doner sirloin, bacon beef brisket ball tip short ribs.
                                                        </p>
                                                    </div>
                                                    <span class="moreless-button2 read_more_btn">Read more</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row comment_row mt-2">
                                    <div class="col-md-1 text-center col-2 comment_cl_1 mt-md-3">
                                        <img class="img-fluid comment_cl_1_img" src="./img/about-1.jpg" alt="">
                                    </div>
                                    <div class="col-md-11 col-10 comment_cl_10">
                                        <div class="row comment_sec_row">
                                            <div class="col-md-12 comment_cl_12">
                                                <span class="user_name">Sajjad Ali</span>
                                                <i class="fa-solid fa-circle-check text-primary"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <i class="fa-solid fa-star review_start"></i>
                                                <a class="color_yellow" href="">5</a>
                                            </div>
                                            <div class="col-md-12 comment_sec_cl_12">
                                                <div id="section">
                                                    <div class="article">
                                                        <p>Bacon ipsum dolor amet sirloin jowl turducken pork loin pig pork belly, chuck cupim tongue beef doner tri-tip pancetta spare ribs porchetta.
                                                        </p>
                                                        <p class="moretext3">
                                                            Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork chop doner sirloin, bacon beef brisket ball tip short ribs.
                                                        </p>
                                                    </div>
                                                    <span class="moreless-button3 read_more_btn">Read more</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="comments-show-hide">
                                    <div class="row comment_row mt-3 d_none_show_more px-sm-3 px-1">
                                        <div class="col-md-1 text-center col-2 comment_cl_1">
                                            <img class="img-fluid comment_cl_1_img" src="./img/about-1.jpg" alt="">
                                        </div>
                                        <div class="col-md-11 col-10 comment_cl_10">
                                            <div class="row comment_sec_row">
                                                <div class="col-md-12 comment_cl_12">
                                                    <span class="user_name">Sajjad Ali</span>
                                                    <i class="fa-solid fa-circle-check text-primary"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <a class="color_yellow" href="">5</a>
                                                </div>
                                                <div class="col-md-12 comment_sec_cl_12">
                                                    <div id="section">
                                                        <div class="article">
                                                            <p>Bacon ipsum dolor amet sirloin jowl turducken pork loin pig pork belly, chuck cupim tongue beef doner tri-tip pancetta spare ribs porchetta.
                                                            </p>
                                                            <p class="moretext4">
                                                                Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork chop doner sirloin, bacon beef brisket ball tip short ribs.
                                                            </p>
                                                        </div>
                                                        <span class="moreless-button4 read_more_btn">Read more</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row comment_row mt-3 d_none_show_more px-sm-3 px-1">
                                        <div class="col-md-1 text-center col-2 comment_cl_1">
                                            <img class="img-fluid comment_cl_1_img" src="./img/about-1.jpg" alt="">
                                        </div>
                                        <div class="col-md-11 col-10 comment_cl_10">
                                            <div class="row comment_sec_row">
                                                <div class="col-md-12 comment_cl_12">
                                                    <span class="user_name">Sajjad Ali</span>
                                                    <i class="fa-solid fa-circle-check text-primary"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <a class="color_yellow" href="">5</a>
                                                </div>
                                                <div class="col-md-12 comment_sec_cl_12">
                                                    <div id="section">
                                                        <div class="article">
                                                            <p>Bacon ipsum dolor amet sirloin jowl turducken pork loin pig pork belly, chuck cupim tongue beef doner tri-tip pancetta spare ribs porchetta.
                                                            </p>
                                                            <p class="moretext5">
                                                                Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork chop doner sirloin, bacon beef brisket ball tip short ribs.
                                                            </p>
                                                        </div>
                                                        <span class="moreless-button5 read_more_btn">Read more</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row comment_row mt-3 d_none_show_more px-sm-3 px-1">
                                        <div class="col-md-1 text-center col-2 comment_cl_1">
                                            <img class="img-fluid comment_cl_1_img" src="./img/about-1.jpg" alt="">
                                        </div>
                                        <div class="col-md-11 col-10 comment_cl_10">
                                            <div class="row comment_sec_row">
                                                <div class="col-md-12 comment_cl_12">
                                                    <span class="user_name">Sajjad Ali</span>
                                                    <i class="fa-solid fa-circle-check text-primary"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <i class="fa-solid fa-star review_start"></i>
                                                    <a class="color_yellow" href="">5</a>
                                                </div>
                                                <div class="col-md-12 comment_sec_cl_12">
                                                    <div id="section">
                                                        <div class="article">
                                                            <p>Bacon ipsum dolor amet sirloin jowl turducken pork loin pig pork belly, chuck cupim tongue beef doner tri-tip pancetta spare ribs porchetta.
                                                            </p>
                                                            <p class="moretext6">
                                                                Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork chop doner sirloin, bacon beef brisket ball tip short ribs.
                                                            </p>
                                                        </div>
                                                        <span class="moreless-button6 read_more_btn">Read more</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-3" id="show_more_comments">
                                    <button class="show_more_comments border-0 bg-white text-primary my-3">Read All Comments</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Profile page Section end -->



    <?php include "footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    $(document).ready(function() {
        $('.display_block_product').click(function() {

            $('.product_display_none').toggleClass('product_display_show');
            $(this).addClass('product_seemore_btn');
            $(".display_block_seeless").addClass("seeless_show");
        });
        $('.display_block_seeless').click(function() {

            $('.product_display_none').toggleClass('product_display_show');
            $(this).addClass('seeless_hide');
            $(".display_block_product").addClass("seemore_show");
        });



        $('.moreless-button1').click(function() {
            $('.moretext1').slideToggle();
            if ($('.moreless-button1').text() == "Read more") {
                $(this).text("Read less")
            } else {
                $(this).text("Read more")
            }
        });



        $('.moreless-button2').click(function() {
            $('.moretext2').slideToggle();
            if ($('.moreless-button2').text() == "Read more") {
                $(this).text("Read less")
            } else {
                $(this).text("Read more")
            }
        });



        $('.moreless-button3').click(function() {
            $('.moretext3').slideToggle();
            if ($('.moreless-button3').text() == "Read more") {
                $(this).text("Read less")
            } else {
                $(this).text("Read more")
            }
        });

        $('.moreless-button4').click(function() {
            $('.moretext4').slideToggle();
            if ($('.moreless-button4').text() == "Read more") {
                $(this).text("Read less")
            } else {
                $(this).text("Read more")
            }
        });

        $('.moreless-button5').click(function() {
            $('.moretext5').slideToggle();
            if ($('.moreless-button5').text() == "Read more") {
                $(this).text("Read less")
            } else {
                $(this).text("Read more")
            }
        });

        $('.moreless-button6').click(function() {
            $('.moretext6').slideToggle();
            if ($('.moreless-button6').text() == "Read more") {
                $(this).text("Read less")
            } else {
                $(this).text("Read more")
            }
        });

        $('.show_more_comments').click(function() {
            $('.comments-show-hide').slideToggle();
            if ($('.show_more_comments').text() == "Read All Comments") {
                $(this).text("Hide Comments")
            } else {
                $(this).text("Read All Comments")
            }
        });
    });
</script>



</html>