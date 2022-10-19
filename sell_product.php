<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php include "header.php" ?>

    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sell Product</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->



    <!-- section sell production -->

    <section class="my-5">
        <div class="container py-5 shadow_sell_products border">


            <h1 class="text-center mb-3">Product Information</h1>
            <form>
                <div class="row   mb-3 ">
                    <div class="col col-md-6 ">
                        <label class="form-label">Name</label>
                        <input type="text" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Name" aria-label="First name" required>
                    </div>
                    <div class="col col-md-6 ">
                        <label class="form-label">Basic Price</label>
                        <input type="number" name="lastName" class="form-control shadow_sell_products sell_input" placeholder="Basic Price" aria-label="Last name" required>
                    </div>
                </div>
                <div class="row   mb-3 ">
                    <div class="col col-md-6">
                        <label class="form-label">Quantity Available</label>
                        <div class="d-flex">
                            <input type="number" name="lastName" class="form-control input_border_radius  shadow_sell_products sell_input" placeholder="1" aria-label="Last name" required>

                            <select name="" id="" class="select_option">
                                <option value="1">PCS</option>
                                <option value="2">KG</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-md-6 ">
                        <label class="form-label">Add Categories</label>
                        <div class="dropdown open border editing_custom_css">
                            <button class="btn border-0 dropdown-toggle" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu multi-level" aria-labelledby="dLabel">
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

                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Description</label>
                        <textarea class="form-control shadow_sell_products sell_input desc_sell_products" name="firstName" id="" cols="30" rows="5" placeholder="Detail Description Of Your Product" required></textarea>
                    </div>
                    <div class="col-6">
                        <div class="row">

                            <div class="col-12">
                                <label class="form-label mt-3">Current Location</label>
                                <input type="text" name="lastName" class="form-control shadow_sell_products sell_input" placeholder="Current Location" aria-label="Last name" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label mt-2">Deliver To Cites</label>
                                <select class="js-example-basic-single form-control shadow_sell_products sell_input" name="state" placeholder="Deliver To Cites" multiple>
                                    <option value="select1">Lahore</option>
                                    <option value="select2">Islamabad</option>
                                    <option value="select3">Karachi</option>
                                    <option value="select4">Quetta</option>
                                </select>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Bidding Starts At</label>
                                <input type="date" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Description" aria-label="First name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Time</label>
                                <input type="time" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Description" aria-label="First name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Bidding Ends At</label>
                                <input type="date" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Description" aria-label="First name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Time</label>
                                <input type="time" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Description" aria-label="First name" required>
                            </div>
                        </div>
                    </div>

                    <div class="row add_row">
                        <div class="col-md-6 add_first_cl_6 my-5">
                            <h1 class="add_first_images_h1 ">Images</h1>
                            <div class="add_first_image d-flex justify-content-around mt-5">
                                <label for="img"><span class="add_dotted_border">Add</span></label>
                                <label for="img"><span class="add_dotted_border">Add</span></label>
                                <label for="img"><span class="add_dotted_border">Add</span></label>
                                <input class="d-none" type="file" id="img" name="img" accept="image/.jpg">
                            </div>

                        </div>

                        <div class="col-md-6 add_second_cl_6 my-5">

                            <div class="d-flex">
                                <h1 class="add_second_images_h1">Files</h1>
                                <span>
                                    <div class="fa-solid-drop dropdown dropdown_sell_product p-0">
                                        <a class="fa-solid p_5px" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-circle-info"></i>
                                        </a>
                                        <ul class="dropdown-menu fa-solid-drop-menu" aria-labelledby="dropdownMenuButton1">
                                            <li class="p-1 some_update_styling">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere error necessitatibus perspiciatis, veniam, aut laboriosam minus.</li>
                                        </ul>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="text-center d-flex justify-content-center mt-2">
                        <button type="submit" class="btn btn-primary mt-2 w-25">SUBMIT</button>
                    </div>
            </form>
        </div>
    </section>



    <?php include "footer.php" ?>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                placeholder: "Select Current Location",
                allowClear: true
            });
        });
    </script>

</html>