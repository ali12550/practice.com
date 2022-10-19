<!DOCTYPE html>
<html lang="en">

<head>
    <title>Transaction History</title>
    <link rel="stylesheet" href="./js/credit_card.js">

</head>

<body>
    <?php include "header.php" ?>

    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Transaction History</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->

    <!-- Profile Setting Section start -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center my_order_cl_12">
                <h1 class="my_order_title">Transaction History</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 my-5">
                <div class="text-end available_balance">
                    Available Balance
                    <span class="pkr_balance mx-1">PKR 200</span>
                    <span class="bg-success text-white py-1 px-2 rounded btn" type="button" data-toggle="modal" data-target="#exampleModal112233" class="pay_balance mx-2">Pay</span>
                    <span class="bg-success text-white py-1 px-2 rounded btn pay_balance my-1 mx-md-2" type="button" data-toggle="modal" data-target="#exampleModal112232323">Withdraw</span>
                </div>
                <div class="col-md-12 px-5 py-5">
                    <div class="row border p-5 justify-content-around  box_shadow_form">
                        <div class="col-md-2 text-center border_right_transaction">
                            <h1 class="pkr_transaction_title">PKR 20,735</h1>
                            <h6 class="sub_title_transaction">EARNED</h6>
                        </div>
                        <div class="col-md-2 text-center border_right_transaction">
                            <h1 class="pkr_transaction_title">PKR 20,735</h1>
                            <h6 class="sub_title_transaction">WITHDRAWS</h6>
                        </div>
                        <div class="col-md-2 text-center border_right_transaction">
                            <h1 class="pkr_transaction_title">PKR 20,735</h1>
                            <h6 class="sub_title_transaction">Service Charges</h6>
                        </div>
                        <div class="col-md-2 text-center border_right_transaction">
                            <h1 class="pkr_transaction_title">PKR 20,735</h1>
                            <h6 class="sub_title_transaction">PENDING CLEARANCE</h6>
                        </div>
                        <div class="col-md-2 text-center">
                            <h1 class="pkr_transaction_title">PKR 20,735</h1>
                            <h6 class="sub_title_transaction">AVAILABLE FUNDS</h6>
                        </div>
                    </div>
                </div>
                <table class="width_customize my-5">
                    <thead>
                        <tr>
                            <th class="set_width_table_dete">Date</th>
                            <th class="set_width_table_status">Status</th>
                            <th class="set_width_table_for"> For</th>
                            <th class="set_width_table_amount"> Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 01 / JAN/ 26 </th>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 123</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 134</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 134</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 134</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 134</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 134</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 134</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 134</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 134</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 134</span> </td>
                        </tr>
                        <tr>
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 134</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_green">PKR 111</span> </td>
                        </tr>
                        <tr class="display_none_for_see">
                            <td> 01 / JAN/ 26 </td>
                            <td><span class="clearing_td card-ani">Clearing</span></td>
                            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus dolore.</td>
                            <td><span class="PKR_styling_red">PKR 111</span> </td>
                        </tr>

                    </tbody>

                </table>
                <div class="text-center">
                    <button id="see_more_btn" class="btn see_more_button">See more <i class="fa-solid fa-arrow-down"></i></button>
                    <button id="see_less_btn" class="btn see_more_button">See less <i class="fa-solid fa-arrow-up"></i></button>
                </div>
            </div>
        </div>

    </div>

    <!-- MODAL START -->
    <div class="container mt-5">
        <!-- Modal -->
        <div class="modal fade px-5" id="exampleModal112233" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal_dialog_customize">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-end mb-2">
                            <button type="button" class="close close_btn_modal" data-dismiss="modal">&times;</button>
                        </div>
                        <ul class="nav nav-tabs d-flex justify-content-between">
                            <li class="col-6 active tabs_button_customize pay_transaction text-center py-1"><a class="text-decoration-none text-black padding_x_tran_c" data-toggle="tab" href="#home">Credit / debit</a></li>
                            <li class="col-6 tabs_button_customize pay_transaction py-1 text-center"><a class="text-decoration-none text-black padding_x_tran_d" data-toggle="tab" href="#menu1">easypaisa / JazzCash</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <div class="my-5">
                                    <div class="col-md-12 my-2 ">
                                        <div class="row">
                                            <h1 class="text-center payment_details_h1 pb-5">Payment details</h1>
                                            <div class="col-sm-10 mb-3 padding_left_0">
                                                <label for="card_name2"> Name on Card</label>
                                                <input type="text" id="card_name2" class="form-control border_radius_customize_css" placeholder="Sajjad Ali">

                                            </div>
                                            <div class="col-sm-2 padding_right_0 d-none d-sm-block">
                                                <div class="imgs mt-4 border d-flex justify-content-around border_radius_imgs">
                                                    <img src="./img/name_on_card.png" alt="" class="imgfluid" width="auto" style="height: auto;">
                                                </div>
                                            </div>

                                            <div class="col-sm-9 padding_left_0">
                                                <label for="card_name">Card Number</label>
                                                <input type="text" maxlength="19" id="card_name1" class="form-control border_radius_customize_css cc-number-input" placeholder="XXXX XXXX XXXX XXXX">
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

                                            <input id="cvv" placeholder="123" type="text" maxlength="3" class="cc-cvc-input form-control">
                                        </div>
                                        <div class="col-md-6 my-2">
                                            <label for="expiry_date">Expiry date</label>
                                            <input type="text" id="expiry_date" maxlength="5" class="form-control cc-expiry-input" placeholder="MM / YYYY">
                                        </div>
                                        <div class="col-md-12 text-center mb-3">
                                            <a href="" class="btn text-white bg-primary px-5 py-1 mt-4 rounded-5">Submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="my-5">
                                    <div class="row">
                                        <div class="text-center my-3">
                                            <img src="./img/mobilewallets.png" alt="" class="img-fluid" width="20%">
                                        </div>
                                        <div class="col-sm-10 mb-3 padding_left_0">
                                            <label for="acc_numbrt">Account Number </label>
                                            <h3 class="border sajjad_ali_text_style py-1 px-2">03123123123</h3>
                                        </div>
                                        <div class="col-sm-2 padding_right_0 d-none d-sm-block">
                                            <div class="imgs mt-4 border border_radius_imgs text-center">
                                                <i class="fa-solid fa-copy" style="height: 34px; font-size: 30px; cursor:pointer;"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 padding_left_0">
                                            <label for="card_name">Account Name</label>
                                            <h3 class="border sajjad_ali_text_style px-2">Sajjad Ali</h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 padding_left_0">
                                            <label for="instructions" style="font-size: 20px;"><b>Instructions:</b></label>
                                            <p style="font-size: 15px; font-family: var(--red);">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam itaque et nulla magni recusandae praesentium odio hic dolorem! Quod atque illum itaque vitae ducimus nisi consectetur asperiores nobis totam autem.</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 padding_left_0">
                                            <h1 class="upload_screenshot">Upload Screenshot / Receipt</h1>
                                            <input type="file">
                                            <!-- <span>Upload</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL END -->

    <!-- MODAL START -->

    <div class="container mt-5">
        <!-- Modal -->
        <div class="modal fade px-5" id="exampleModal112232323" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal_dialog_customize">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-end mb-2">
                            <button type="button" class="close close_btn_modal" data-dismiss="modal">&times;</button>
                        </div>
                        <h1 class="text-center payment_details_h1 mt-1 mb-3">Withdraw Details</h1>
                        <div class="text-end available_balance">
                            Available Balance
                            <span class="pkr_balance mx-1">PKR 200</span>
                        </div>
                        <form action="" class="mx-3">
                            <label for="widraw1">Ammount to Withdraw</label>
                            <input type="number" class="form-control py-2 pkr_placeholder_styling" placeholder="PKR ...">
                        </form>
                        <div class="row my-3 mx-2">
                            <h1 class="withdraw_details_h1">Withdraw Channel</h1>
                            <div class="col-md-4 text-center">
                                <div class="border p-3 for_active_class active box_shadow_form">
                                    <img class="img-fluid" src="./img/1.png" alt="" width="36%">
                                    <h1 class="banktransfer_h1 my-2">Bank Transfer</h1>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="border p-3 for_active_class box_shadow_form">
                                    <img class="img-fluid" src="./img/jazzcash.jpg" alt="" width="40%">
                                    <h1 class="banktransfer_h1 my-2">JazzCash</h1>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="border p-3 for_active_class box_shadow_form">
                                    <img class="img-fluid" src="./img/easypaisa.png" alt="" width="32%">
                                    <h1 class="banktransfer_h1 my-2">easypaisa</h1>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="payment_setting.php" class="add_detail"><i class="fa-solid fa-star-of-life"></i> Please add your detail here.</a>
                            </div>

                            <div class="text-center">
                                <a href="payment_setting.php" class="btn text-white px-2 bg-primary my-3">WITHDRAW</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL END -->




    <!-- Profile Setting Section end -->



    <?php include "footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    $(document).ready(function() {
        $('.pay_transaction').on('click', function() {
            $('.pay_transaction').removeClass('active');
            $(this).addClass('active');
        });

        $('.see_more_button').click(function() {
            $('.display_none_for_see').toggleClass('display_block_for_see');
            $('#see_more_btn').toggleClass('see-more');
            $('#see_less_btn').toggleClass('see-less');

        });

        $(document).ready(function() {
            $('.for_active_class').click(function() {
                $('.for_active_class').removeClass("active");
                $(this).addClass("active");
            });
        });

    });
</script>



</html>