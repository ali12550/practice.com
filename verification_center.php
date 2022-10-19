<!DOCTYPE html>
<html lang="en">

<head>
    <title>Verification</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

</head>

<body>
    <?php include "header.php" ?>

    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Verification</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->

    <!-- Profile Setting Section start -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center my_order_cl_12">
                <h1 class="my_order_title">Verification</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row my-5 justify-content-around">

            <div class="col-md-8 p-0 m-0">

                <div class="box_shadow_form px-4">
                    <div class="d-flex justify-content-between pt-3">
                        <h1 style="font-size:30px;font-family:var(--red);">ID Verification</h1>
                        <span>
                            <div class="fa-solid-drop dropdown dropdown_sell_product p-0 ">
                                <a class="fa-solid p_5px" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-circle-info fs-4 my-2"></i>
                                </a>
                                <ul class="dropdown-menu fa-solid-drop-menu" aria-labelledby="dropdownMenuButton1">
                                    <li class="p-1 some_update_styling">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere error necessitatibus perspiciatis, veniam, aut laboriosam minus.</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                    <hr>

                    <div class="col-sm-12 px-md-5 text-center pt-5">
                        <label for="instructions" style="font-size: 20px;"><b>Instructions:</b></label>
                        <p style="font-size: 15px; font-family: var(--red);">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam itaque et nulla magni recusandae praesentium odio hic dolorem! Quod atque illum itaque vitae ducimus nisi consectetur asperiores nobis totam autem.</p>
                    </div>

                    <div class="row my-5 d-flex justify-content-center">
                        <div class="col-md-6 d-flex flex-column">
                            <h6 class="my-2" style="font-size: 20px; font-weight: 500; font-family: var(--red);">Front</h6>
                            <label for="front" class="verifi_label"><span class="sizing_label_file border_doted">
                                    <i class="fa-solid fa-plus"></i>
                                </span></label>
                            <input class="d-none" id="front" type="file">
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <h6 class="my-2" style="font-size: 20px; font-weight: 500; font-family: var(--red);">Back</h6>
                            <label for="front" class="verifi_label"><span class="sizing_label_file border_doted">
                                    <i class="fa-solid fa-plus"></i>
                                </span></label>
                            <input class="d-none" id="front" type="file">
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="" class="btn text-white bg-primary rounded-3 mb-5 px-4">Submit</a>
                    </div>
                </div>

                <div class="box_shadow_form mt-3 px-4">
                    <div class="pt-3">
                        <h1 style="font-size:30px;font-family:var(--red);">Payment Verification</h1>
                        <hr>

                    </div>

                    <div class="col-sm-12 px-md-5 text-center py-5">
                        <label for="instructions" style="font-size: 20px;"><b>Instructions:</b></label>
                        <p style="font-size: 15px; font-family: var(--red);">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam itaque et nulla magni recusandae praesentium odio hic dolorem! Quod atque illum itaque vitae ducimus nisi consectetur asperiores nobis totam autem.</p>
                    </div>

                    <div class="row">
                        <div class="col-sm-11 mb-3 padding_left_0">
                            <label for="card_name1">Name on Card</label>
                            <input type="text" id="card_name1" class="form-control border_radius_customize_css" placeholder="Sajjad Ali">
                        </div>
                        <div class="col-sm-1 padding_right_0 d-none d-sm-block">
                            <div class="imgs p-1 mt-4 border d-flex justify-content-around border_radius_imgs">
                                <img src="./img/name_on_card.png" alt="" class="imgfluid" width="auto%" style="height: auto;">
                            </div>
                        </div>

                        <div class="col-sm-10 padding_left_0">
                            <label for="card_name">Card Number</label>
                            <input type="number" id="card_name" class="form-control border_radius_customize_css" placeholder="1234-1234-1234 -1234">
                        </div>
                        <div class="col-sm-2 padding_right_0 d-none d-sm-block">
                            <div class="imgs mt-4 border d-flex justify-content-around border_radius_imgs">
                                <img src="./img/method.png" alt="" class="imgfluid" width="auto" style="height: auto;">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 my-2">
                            <div class="d-flex">
                                <label for="cvv">CVV</label>

                                <span>
                                    <div class="fa-solid-drop dropdown dropdown_sell_product p-0">
                                        <a class="fa-solid p_5px" type="button" id="dropdownMenuButton1111" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-circle-info"></i>
                                        </a>
                                        <ul class="dropdown-menu fa-solid-drop-menu background_img" aria-labelledby="dropdownMenuButton1111">
                                            <li class="p-1 some_update_styling_2">
                                                <img class="img-fluid" src="./img/i_background.webp" alt="" width="auto">
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                            </li>
                                        </ul>
                                    </div>
                                </span>
                            </div>

                            <input type="number" id="cvv" class="form-control" placeholder="123">
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="expiry_date">Expiry date</label>
                            <input type="number" id="expiry_date" class="form-control" placeholder="MM / YYYY">
                        </div>
                    </div>


                    <div class="text-center">
                        <a href="" class="btn text-white bg-primary rounded-3 my-4 px-4">Submit</a>
                    </div>
                </div>
            </div>



            <div class="col-md-3 box_shadow_form">
                <div class="text-center pt-3">
                    <h1 class="mt-1" style="font-size:30px;font-family:var(--red);">Logs</h1>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 my-auto">
                        <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">23-Jul</span><br>
                        <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">12:08 PM</span>
                    </div>
                    <div class="col-6 my-auto">
                        <span style="font-size:18px; color: black; font-family: var(--red);font-weight: 500;">ID Verified</span>
                    </div>
                    <div class="col-2 my-auto">
                        <span><i class="fa-solid fa-circle-check text-success" style="font-size:20px;"></i></span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 my-auto">
                        <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">23-Jul</span><br>
                        <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">12:08 PM</span>
                    </div>
                    <div class="col-6 my-auto">
                        <span style="font-size:18px; color: black; font-family: var(--red);font-weight: 500;">Payment Verification Rejected</span>
                    </div>
                    <div class="col-2 my-auto">
                        <span><i class="fa-solid fa-circle-xmark text-danger" style="font-size:20px;"></i></span>
                    </div>
                </div>

                <hr>
            </div>
        </div>
        <div class="row p-0 m-0 my-5 justify-content-around">

            <div class="col-md-8 p-0 m-0">

                <div class="box_shadow_form px-4">
                    <div class="pt-3">
                        <h1 style="font-size:30px;font-family:var(--red);">ID Verification</h1>
                    </div>
                    <hr>

                    <div class="text-center pb-5">
                        <h1 class="" style="font-size:30px;font-family:var(--red);">Verified</h1>
                        <i class="fa-solid fa-circle-check text-success" style="font-size:100px;"></i>
                    </div>

                </div>

                <div class="box_shadow_form mt-3 px-4">
                    <div class="pt-3">
                        <h1 style="font-size:30px;font-family:var(--red);">Payment Verification</h1>
                        <hr>


                        <div class="text-center rejected">
                            <h1 style="font-size:30px;font-family:var(--red);">Rejected</h1>
                            <i class="fa-solid fa-circle-xmark text-danger" style="font-size:100px;"></i>
                        </div>

                    </div>

                    <div class="display_none_for_function">
                        <div class="col-sm-12 px-md-5 text-center py-5">
                            <label for="instructions" style="font-size: 20px;"><b>Instructions:</b></label>
                            <p style="font-size: 15px; font-family: var(--red);">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam itaque et nulla magni recusandae praesentium odio hic dolorem! Quod atque illum itaque vitae ducimus nisi consectetur asperiores nobis totam autem.</p>
                        </div>

                        <div class="row">
                            <div class="col-sm-11 mb-3 padding_left_0">
                                <label for="card_name1">Name on Card</label>
                                <input type="text" id="card_name1" class="form-control border_radius_customize_css" placeholder="Sajjad Ali">
                            </div>
                            <div class="col-sm-1 padding_right_0 d-none d-sm-block">
                                <div class="imgs p-1 mt-4 border d-flex justify-content-around border_radius_imgs">
                                    <img src="./img/name_on_card.png" alt="" class="imgfluid" width="auto" style="height: 37px;">
                                </div>
                            </div>

                            <div class="col-sm-10 padding_left_0">
                                <label for="card_name">Card Number</label>
                                <input type="number" id="card_name" class="form-control border_radius_customize_css" placeholder="1234-1234-1234 -1234">
                            </div>
                            <div class="col-sm-2 padding_right_0 d-none d-sm-block">
                                <div class="imgs mt-4 border d-flex justify-content-around border_radius_imgs">
                                    <img src="./img/method.png" alt="" class="imgfluid" width="100%" style="height: auto">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 my-2">
                                <div class="d-flex">
                                    <label for="cvv">CVV</label>

                                    <span>
                                        <div class="fa-solid-drop dropdown dropdown_sell_product p-0">
                                            <a class="fa-solid p_5px" type="button" id="dropdownMenuButton1111" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-circle-info"></i>
                                            </a>
                                            <ul class="dropdown-menu fa-solid-drop-menu background_img" aria-labelledby="dropdownMenuButton1111">
                                                <li class="p-1 some_update_styling_2">
                                                    <img class="img-fluid" src="./img/i_background.webp" alt="" width="100%">
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                </li>
                                            </ul>
                                        </div>
                                    </span>
                                </div>

                                <input type="number" id="cvv" class="form-control" placeholder="123">
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="expiry_date">Expiry date</label>
                                <input type="number" id="expiry_date" class="form-control" placeholder="MM / YYYY">
                            </div>
                        </div>

                    </div>



                    <div class="text-center">
                        <button href="" class="re_submit btn text-white bg-primary rounded-3 my-4 px-4">Re Submit</button>
                    </div>
                    <div class="text-center">
                        <button href="" class="submit_d_none btn text-white bg-primary rounded-3 my-4 px-4">Submit</button>
                    </div>
                </div>
            </div>



            <div class="col-md-3 box_shadow_form">
                <div class="text-center pt-3">
                    <h1 style="font-size:30px;font-family:var(--red);">Logs</h1>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 my-auto">
                        <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">23-Jul</span><br>
                        <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">12:08 PM</span>
                    </div>
                    <div class="col-6 my-auto">
                        <span style="font-size:18px; color: black; font-family: var(--red);font-weight: 500;">ID Verified</span>
                    </div>
                    <div class="col-2 my-auto">
                        <span><i class="fa-solid fa-circle-check text-success" style="font-size:20px;"></i></span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 my-auto">
                        <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">23-Jul</span><br>
                        <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">12:08 PM</span>
                    </div>
                    <div class="col-6 my-auto">
                        <span style="font-size:18px; color: black; font-family: var(--red);font-weight: 500;">Payment Verification Rejected</span>
                    </div>
                    <div class="col-2 my-auto">
                        <span><i class="fa-solid fa-circle-xmark text-danger" style="font-size:20px;"></i></span>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="row p-0 m-0 my-5 justify-content-around">

        <div class="col-md-8 p-0 m-0">

            <div class="box_shadow_form px-4">
                <div class="pt-3">
                    <h1 style="font-size:30px;font-family:var(--red);">ID Verification</h1>
                </div>
                <hr>

                <div class="text-center pb-5">
                    <h1 class="" style="font-size:30px;font-family:var(--red);">Verified</h1>
                    <i class="fa-solid fa-circle-check text-success" style="font-size:100px;"></i>
                </div>

            </div>

            <div class="box_shadow_form mt-4 px-4">
                <div class="pt-3">
                    <h1 style="font-size:30px;font-family:var(--red);">Payment Verification</h1>

                </div>
                <hr>

                <div class="text-center pb-5">
                    <h1 class="" style="font-size:30px;font-family:var(--red);">Verified</h1>
                    <i class="fa-solid fa-circle-check text-success" style="font-size:100px;"></i>
                </div>
            </div>
        </div>



        <div class="col-md-3 box_shadow_form">
            <div class="text-center pt-3">
                <h1 style="font-size:30px;font-family:var(--red);">Logs</h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-4 my-auto">
                    <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">23-Jul</span><br>
                    <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">12:08 PM</span>
                </div>
                <div class="col-6 my-auto">
                    <span style="font-size:18px; color: black; font-family: var(--red);font-weight: 500;">ID Verified</span>
                </div>
                <div class="col-2 my-auto">
                    <span><i class="fa-solid fa-circle-check text-success" style="font-size:20px;"></i></span>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4 my-auto">
                    <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">23-Jul</span><br>
                    <span style="font-size:16px; color: black; font-family: var(--red);font-weight: 500;">12:08 PM</span>
                </div>
                <div class="col-6 my-auto">
                    <span style="font-size:18px; color: black; font-family: var(--red);font-weight: 500;">Payment Verification Rejected</span>
                </div>
                <div class="col-2 my-auto">
                    <span><i class="fa-solid fa-circle-xmark text-danger" style="font-size:20px;"></i></span>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <!-- Profile Setting Section end -->



    <?php include "footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    $(document).ready(function() {
        $('.re_submit').click(function() {
            $('.display_none_for_function').css("display", "block");
            $('.rejected').css("display", "none");
            $('.submit_d_none').css("display", "inline");
            $('.re_submit').css("display", "none");
        });
    });
</script>

</html>