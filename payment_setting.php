<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment Setting</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

</head>

<body>
    <?php include "header.php" ?>

    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Payment Setting</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->

    <!-- Profile Setting Section start -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center my_order_cl_12">
                <h1 class="my_order_title">Payment Setting</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid  mx-0 p-0 my-6">
        <div class="row mx-0 justify-content-around">
            <div class="col-md-6">
                <div class="px-md-5 px-3 border box_shadow_form pb-4">
                    <div class="text-end mt-5">
                        <a href="" type="button" data-toggle="modal" data-target="#exampleModal12555" class="btn bg-primary w-25 text-white" style="font-size: 20px; font-weight: 500; font-family: var(--red); width: auto !important;">Add new card</a>
                    </div>
                    <h1 class="saved_card my-5 text-center">Saved Card</h1>
                    <div class="">
                        <div class="main main_one my-5 d-flex justify-content-center">
                            <div class="center">
                                <div class="top">
                                    <h2 class="creadit">Credit</h2>
                                    <h1 class="visa">Visa</h1>
                                </div>
                                <div class="bottom">
                                    <h2 class="bottom_h2">Taha Nadeem</h2>
                                    <p class="bottom_p">6233 - 5901 - 0902 - 5805</p>
                                    <p class="bottom_p">02 / 25</p>
                                </div>
                                <div class="text-end mt-5 mx-3 remove_card_on_click_one">
                                    <img src="./img/remove.webp" alt="" class="img-fluid mt-4" width="10%" style="cursor: pointer; z-index: 999;">
                                </div>
                            </div>
                        </div>
                        <div class="main main_two my-5 d-flex justify-content-center">
                            <div class="center">
                                <div class="top">
                                    <h2 class="creadit">Credit</h2>
                                    <h1 class="visa">Visa</h1>
                                </div>
                                <div class="bottom">
                                    <h2 class="bottom_h2">Taha Nadeem</h2>
                                    <p class="bottom_p">6233 - 5901 - 0902 - 5805</p>
                                    <p class="bottom_p">02 / 25</p>
                                </div>
                                <div class="text-end mt-5 mx-3">
                                    <img src="./img/remove.webp" alt="" class="img-fluid mt-4 remove_card_on_click_two" width="10%" style="cursor: pointer; z-index: 999;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-3 mt-md-0">
                <div class="border px-md-5 px-3 box_shadow_form">
                    <div class="text-end mt-5">
                        <a href="" type="button" class="btn bg-primary w-25 text-white pay_balance mx-2" style="font-size: 20px; font-weight: 500; font-family: var(--red); width: auto !important;" type="button" data-toggle="modal" data-target="#exampleModal1122323231212">Add
                            Method
                        </a>
                    </div>

                    <h1 class="saved_card mt-5 text-center">Withdraw Methods</h1>
                    <h6 class="no_method_found text-center pb-3">No Method Found</h6>

                    <div class="text-center my-4">
                        <a href="" type="button" data-toggle="modal" data-target="#exampleModal1122323231212" class="btn text-white bg-primary px-3">Add Now</a>
                    </div>
                    <div class="row my-5">
                        <div class="col-sm-2 text-center">
                            <img class="img-fluid mx-2" src="./img/jazzcash.jpg" alt="">
                        </div>
                        <div class="col-sm-10 d-md-flex justify-content-between">
                            <div class="">
                                <h1 class="account_name_text">Name: TAHA NADEEM</h1>
                                <h1 class="account_name_text">Account: XXX XXXXX XXXX</h1>
                            </div>
                            <div class="my-auto">
                                <button href="" class="btn bg-danger text-white px-1 disconnected">Disconnect</butt>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-sm-2 text-center">
                            <img class="img-fluid mx-2" src="./img/easypaisa.png" alt="">
                        </div>
                        <div class="col-sm-10 d-md-flex justify-content-between">
                            <div class="">
                                <h1 class="account_name_text">Name: TAHA NADEEM</h1>
                                <h1 class="account_name_text">Account: XXX XXXXX XXXX</h1>
                            </div>
                            <div class="my-auto">
                                <button href="" class="btn bg-danger text-white px-1 disconnected">Disconnect</button>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-sm-2 text-center">
                            <img class="img-fluid ali mt-5 mx-2" src="./img/master_card.png" alt="">
                        </div>
                        <div class="col-sm-10 d-md-flex justify-content-between">
                            <div class="">
                                <h1 class="account_name_text">Bank: HBL</h1>
                                <h1 class="account_name_text">Account: XXX XXXXX XXXX</h1>
                                <h1 class="account_name_text">Title: TAHA NADEEM</h1>
                                <h1 class="account_name_text">IBAN: XXX XXXX XXXX</h1>
                            </div>
                            <div class="my-auto">
                                <button href="" class="btn bg-danger text-white px-1 disconnected">Disconnect</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Setting Section end -->


    <div class="container mt-5">
        <!-- Modal -->
        <div class="modal fade px-5" id="exampleModal1122323231212" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal_dialog_customize">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-end mb-2">
                            <button type="button" class="close close_btn_modal" data-dismiss="modal">&times;</button>
                        </div>
                        <h1 class="text-center payment_details_h1 mt-1 mb-3">Withdraw Methods</h1>

                        <h6>Choose Withdraw Method</h6>
                        <select name="" id="" class="form-control mb-4">
                            <option value="1" selected>Choose Method</option>
                            <option value="2" id="bank_id">Bank</option>
                            <option value="3" id="easypaisa_id">easypaisa</option>
                            <option value="4" id="jazzcash_id">JazzCash</option>
                        </select>

                        <div id="bank_ids">
                            <form action="">
                                <div class="row">
                                    <div class="col-3">
                                        <h6>Choose Bank</h6>
                                    </div>
                                    <div class="col-9">
                                        <select name="" id="" class="form-control mb-3">
                                            <option value="1" selected>Choose Bank</option>
                                            <option value="2">HBL</option>
                                            <option value="3">ALLIED</option>
                                            <option value="4">UBL</option>
                                            <option value="5">ASKRI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-3">Account Title:</div>
                                    <div class="col-9"><input type="text" class="form-control"></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-3">Account #</div>
                                    <div class="col-9"><input type="number" class="form-control"></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-3">IBAN:</div>
                                    <div class="col-9"><input type="number" class="form-control"></div>
                                </div>
                            </form>
                            <div class="text-center">
                                <button class="btn text-white px-2 bg-primary my-3 px-3 show-message" id="liveToastBtn" onclick="myFunction()">Add</button>
                            </div>
                            <div id="snackbar">Add Payment Method Successfully</div>
                        </div>
                        <div id="easypaisa_ids">
                            <form action="">
                                <div class="row mb-3">
                                    <div class="col-3">Title Name</div>
                                    <div class="col-9"><input type="text" class="form-control"></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-3">Account Number</div>
                                    <div class="col-9"><input type="number" class="form-control"></div>
                                </div>

                            </form>
                            <div class="text-center">
                                <a href="payment_setting.php" class="btn text-white px-2 bg-primary my-3 px-3">Add</a>
                            </div>
                        </div>
                        <div id="jazzcash_ids">
                            <form action="">
                                <div class="row mb-3">
                                    <div class="col-3">Title Name</div>
                                    <div class="col-9"><input type="text" class="form-control"></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-3">Account Number</div>
                                    <div class="col-9"><input type="number" class="form-control"></div>
                                </div>

                            </form>
                            <div class="text-center">
                                <a href="payment_setting.php" class="btn text-white px-2 bg-primary my-3 px-3">Add</a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="container mt-5">
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal12555" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center" id="exampleModalLabel">Add Card</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="py-md-5">
                                <div class="col-md-12 my-2 ">
                                    <div class="row">

                                        <div class="col-sm-10 mb-3 padding_left_0">
                                            <label for="card_name1">Name on Card</label>
                                            <input type="number" id="card_name1" class="form-control border_radius_customize_css" placeholder="Sajjad Ali">
                                        </div>
                                        <div class="col-sm-2 padding_right_0 d-none d-sm-block">
                                            <div class="imgs mt-4 border d-flex justify-content-around border_radius_imgs">
                                                <img src="./img/name_on_card.png" alt="" class="imgfluid" width="50%" style="height: 37px;">
                                            </div>
                                        </div>

                                        <div class="col-sm-9 padding_left_0">
                                            <label for="card_name">Card Number</label>
                                            <input type="number" id="card_name" class="form-control border_radius_customize_css" placeholder="1234-1234-1234 -1234">
                                        </div>
                                        <div class="col-sm-3 padding_right_0 d-none d-sm-block">
                                            <div class="imgs mt-4 border d-flex justify-content-around border_radius_imgs">
                                                <img src="./img/method.png" alt="" class="imgfluid" width="100%" style="height: 37px;">
                                            </div>
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">Add Card</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php include "footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    $(document).ready(function() {
        function myFunction() {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
        }
    });
    $('.remove_card_on_click_one').click(function() {
        $('.main_one').addClass('d-none');
    });
    $('.remove_card_on_click_two').click(function() {
        $('.main_two').addClass('d-none');
    });
</script>

<script>
    $('.disconnected').click(function() {
        // Swal.fire('Are you sure you want to disconnect ?')
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "Are you sure you want to disconnect ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, disconnect it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire(
                    'disconnected',
                    'Your file has been disconnected.',
                    'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                )
            }
        })
    });
</script>



</html>