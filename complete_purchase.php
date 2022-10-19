<!DOCTYPE html>
<html lang="en">

<head>
    <title>Complete Purchase</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

</head>

<body>
    <?php include "header.php" ?>

    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Complete Purchase</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="perchase_title_h1">Congrats! you have won the auction</h1>
            </div>
            <div class="col-md-12 text-center display_block">
                <p class="m-0 perchase_sub_title_p">You have <b>4 hours</b> to compelete the purchase, pay online to get a discont </p>
                <span class="perchase_sub_title_span">or pay offline contacting the seller</span>
            </div>

            <div class="col-md-12 text-center">
                <h1 class="auction_sumary_h1">Auction Summary</h1>
                <table>
                    <thead>
                        <tr>
                            <th class="set_width_table_sr">Sr #</th>
                            <th class="set_width_table_pro"> Product Name </th>
                            <th class="set_width_table_qty"> Qty</th>
                            <th class="set_width_table_amm"> Wining amount</th>
                            <th class="set_width_table_total"> Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center"> 1 </th>
                            <th> 1 </th>
                            <td class="text-center"> 1 </td>
                            <td class="text-center"> 1 </td>
                            <td class="text-center"> 1 </td>
                        </tr>
                    </tbody>

                </table>
                <p class="text-end sub_total_p">Sub total: <span>PKR 123</span></p>
                <p class="text-end sub_total_p"><span class="will_be_text">Will be applied incase of online payment </span> Delivery Fee: <span>PKR 123</span></p>
                <p class="text-end sub_total_p"><span class="background_color"><span class="sub_total_pay">Total payable:</span> <span class="sub_total_pkr">PKR 123</span></span></p>

            </div>

            <div class="col-md-12 text-center display_block">
                <p class="m-0 perchase_payment_method_p">Choose your payment method</p>
            </div>

            <div class="row my-5 mx-0">

                <div class="col-md-4 section-one">
                    <div class="car border car_border_radius mx-1 active">
                        <div class="card_header text-center">
                            <h1 class="paymen_title_h1">Debit / Credit Card</h1>
                        </div>
                        <div class="card_body  d-flex justify-content-around">
                            <img src="./img/method.png" alt="" class="img-fluid margin_top_img" width="100%">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 section-two">
                    <div class="car border car_border_radius mx-1">
                        <div class="card_header text-center">
                            <h1 class="paymen_title_h1">JazzCash / easypaisa</h1>
                        </div>
                        <div class="card_body  d-flex justify-content-around">
                            <img src="./img/mobilewallets.png" alt="" class="img-fluid" width="80%">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 section-three">
                    <div class="car border car_border_radius mx-1">
                        <div class="card_header text-center">
                            <h1 class="paymen_title_h1">Pay offline to seller personally</h1>
                        </div>
                        <div class="card_body  d-flex justify-content-around">
                            <img src="./img/money.png" alt="" class="img-fluid" width="32%">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row p-0 m-0">

                <div class="col-md-12">
                    <div class="row section-cnt1 my-5 justify-content-around mx-0">
                        <div class="section-cnt-child col-md-5 border p-md-5 p-sm-2 box_shadow_form">
                            <div class="row">
                                <h1 class="text-center payment_details_h1 mb-3 mt-4">Billing details</h1>
                                <div class="col-md-6 mt-5 mb-3">
                                    <label for="">Full Name</label>
                                    <input type="text" id="" class="form-control" placeholder="Full Name">
                                    <div class="d-flex justify-content-between mt-3">
                                        <p class="mt-2"><b>I have Whatsapp on same number. </b></p>
                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" name="graduate" type="checkbox" id="flexSwitchCheckDefault">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5 mb-0">
                                    <label for="contact_numner">Contact Number</label>
                                    <input type="number" id="contact_numner" class="form-control" placeholder="Contact Number">
                                    <div class="col-md-12 ug mb-4 mt-3">
                                        <label for="Whatsapp_numner">Whatsapp Number</label>
                                        <input type="number" id="Whatsapp_numner" class="form-control" placeholder="Whatsapp Number">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="">Delivery address</label>
                                    <textarea class="form-control" name="" id="" cols="80" rows="2" style="resize:none;" placeholder="Delivery adress"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="section-cnt-child col-md-5 border px-md-5 py-md-5 p-sm-2 box_shadow_form display_none_on_click debit_credit">
                            <div class="col-md-12 my-2 ">
                                <div class="row">
                                    <h1 class="text-center payment_details_h1 pb-5">Payment details</h1>


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
                    <div class="row section-cnt2 my-5 justify-content-around mx-0">

                        <div class="section-cnt-child col-md-5 border p-md-5 p-sm-2 box_shadow_form">
                            <div class="row">
                                <h1 class="text-center payment_details_h1 mb-3 mt-4">Billing details</h1>
                                <div class="col-md-6 mt-5 mb-3">
                                    <label for="">Full Name</label>
                                    <input type="text" id="" class="form-control" placeholder="Full Name">
                                    <div class="d-flex justify-content-between mt-3">
                                        <p class="mt-2"><b>I have Whatsapp on same number. </b></p>
                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" name="graduate" type="checkbox" id="flexSwitchCheckDefault">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5 mb-0">
                                    <label for="contact_numner">Contact Number</label>
                                    <input type="number" id="contact_numner" class="form-control" placeholder="Contact Number">
                                    <div class="col-md-12 ug mb-4 mt-3">
                                        <label for="Whatsapp_numner">Whatsapp Number</label>
                                        <input type="number" id="Whatsapp_numner" class="form-control" placeholder="Whatsapp Number">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="">Delivery address</label>
                                    <textarea class="form-control" name="" id="" cols="80" rows="7" style="resize:none;" placeholder="Delivery adress"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="section-cnt-child col-md-5 border px-md-5 py-md-5 p-sm-2 box_shadow_form display_none_on_click debit_credit">
                            <div class="col-md-12 my-2 ">
                                <div class="row">
                                    <h1 class="text-center payment_details_h1 pb-1">Mobile Wallet details</h1>
                                    <!-- easypaisa&jazzcash tabs start -->

                                    <ul class="nav nav-tabs py-3 mx-0 px-1">
                                        <div class="col-6 text-center d-flex p-0 m-0 justify-content-around border_right border">
                                            <li class="active for_active active_tabs py-2">
                                                <a class="easypaisa_text" data-toggle="tab" href="#home"><img src="./img/easypaisa.png" alt="" class="img-fluid" width="10%"> EasyPaisa</a>
                                            </li>
                                        </div>

                                        <div class="col-6 text-center d-flex p-0 m-0 justify-content-around border">
                                            <li class="for_active py-2"><a class="easypaisa_text" data-toggle="tab" href="#menujazzcash"><img src="./img/jazzcash.jpg" alt="" class="img-fluid" width="10%"> JazzCash</a></li>
                                        </div>

                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane active">
                                            <!-- 1st tabe easypaisa start -->

                                            <div class="row">
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

                                            <div class="col-md-12 text-center">
                                                <a href="#" class="btn w-25 bg-primary text-white rounded-5 mt-3">Submit</a>
                                            </div>

                                            <!-- 1st tabe easypaisa end -->
                                        </div>
                                        <div id="menujazzcash" class="tab-pane fade">
                                            <!-- 2nd jazzcsh start -->

                                            <div class="row">
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
                                                    <label for="instructions">Instructions:</label>
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam itaque et nulla magni recusandae praesentium odio hic dolorem! Quod atque illum itaque vitae ducimus nisi consectetur asperiores nobis totam autem.</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 padding_left_0">
                                                    <h1 class="upload_screenshot">Upload Screenshot / Receipt</h1>
                                                    <input type="file">
                                                    <!-- <span>Upload</span> -->
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-center">
                                                <a href="#" class="btn w-25 bg-primary text-white rounded-5 mt-3">Submit</a>
                                            </div>
                                        </div>
                                        <!-- 2nd jazzcsh end -->
                                    </div>
                                </div>

                                <!-- easypaisa&jazzcash tabs end -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row section-cnt3 px-2 mb-5 mx-0">
                    <div class="row px-2 mx-1 mb-5">
                    </div>
                    <div class="col-md-5 section-cnt-child border p-md-5 p-sm-2 box_shadow_form">
                        <div class="row">
                            <h1 class="text-center payment_details_h1 mb-3 mt-4">Billing details</h1>
                            <div class="col-md-6 mt-5 mb-3">
                                <label for="">Full Name</label>
                                <input type="text" id="" class="form-control" placeholder="Full Name">
                                <div class="d-flex justify-content-between mt-3">
                                    <p class="mt-2"><b>I have Whatsapp on same number. </b></p>
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" name="graduate" type="checkbox" id="flexSwitchCheckDefault">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 mb-0">
                                <label for="contact_numner">Contact Number</label>
                                <input type="number" id="contact_numner" class="form-control" placeholder="Contact Number">
                                <div class="col-md-12 ug mb-4 mt-3">
                                    <label for="Whatsapp_numner">Whatsapp Number</label>
                                    <input type="number" id="Whatsapp_numner" class="form-control" placeholder="Whatsapp Number">
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="">Delivery address</label>
                                <textarea class="form-control" name="" id="" cols="80" rows="2" style="resize:none;" placeholder="Delivery adress"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-end">
                            <span class="btn see_seller_detail border">See Seller Detail ></span>
                        </div>
                    </div>
                    <div class="col-md-5 section-cnt-child border px-md-5 py-md-5 p-sm-2 box_shadow_form display_none_on_click debit_credit" id="display_none_id">
                        <div class="col-md-12 my-2 ">
                            <div class="row">
                                <h1 class="text-center payment_details_h1 pb-5">Seller details</h1>

                                <div class="col-sm-6 mb-3 padding_left_0">
                                    <label for="card_name1">Name</label>
                                    <h6 class="seller_detail_h1">Sajjad Ali</h6>
                                </div>
                                <div class="col-sm-6 padding_right_0 d-none d-sm-block">
                                    <label for="card_number1">Seller Number</label>
                                    <h6 class="seller_detail_h1">0300 0000 000</h6>
                                </div>

                                <div class="col-sm-6 padding_left_0">
                                    <label for="card_location">Location</label>
                                    <h6 class="seller_detail_h1">Defence zblock</h6>
                                </div>
                                <div class="col-sm-6 padding_right_0 d-none d-sm-block">
                                    <label for="">City</label>
                                    <h6 class="seller_detail_h1">Lahore </h6>
                                </div>
                                <div class="col-sm-6 padding_right_0 px-2 d-none d-sm-block my-4">
                                    <label for="">Product Location</label>
                                    <h6 class="seller_detail_h1">Defence Zblock </h6>
                                </div>
                                <div class="col-sm-12 padding_left_0">
                                    <label for="instructions" style="font-size: 20px;"><b>Instructions:</b></label>
                                    <p style="font-size: 15px; font-family: var(--red);">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam itaque et nulla magni recusandae praesentium odio hic dolorem! Quod atque illum itaque vitae ducimus nisi consectetur asperiores nobis totam autem.</p>
                                </div>
                            </div>
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
        $('[name="graduate"]').change(function() {
            if ($('[name="graduate"]:checked').is(":checked")) {
                $('.ug').hide();
                $('.phd').show();
            } else {
                $('.ug').show();
                $('.phd').hide();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(".section").on("click", function() {
            $(".section").removeClass("active");
            $(this).addClass("active");
        });
        $(".section-one").on("click", function() {
            $(".section-cnt1").css({
                "display": "block",
                "float": "left",
                "width": "100%"
            });
            $(".section-cnt2").css("display", "none");
            $(".section-cnt3").css("display", "none");
        });
        $(".section-two").on("click", function() {
            $(".section-cnt1").css("display", "none");
            $(".section-cnt2").css({
                "display": "block",
                "float": "left",
                "width": "100%"
            });
            $(".section-cnt3").css("display", "none");
        });
        $(".section-three").on("click", function() {
            $(".section-cnt1").css("display", "none");
            $(".section-cnt2").css("display", "none");
            $(".section-cnt3").css({
                "display": "block",
                "float": "left",
                "width": "100%"
            });
        });

        $('.car_border_radius').on('click', function() {
            $('.car_border_radius').removeClass('active');
            $(this).addClass('active');
        });

        $('.for_active').on('click', function() {
            $('.for_active').removeClass('active_tabs');
            $(this).addClass('active_tabs');
        });
        $('.see_seller_detail').on('click', function() {
            $(this).addClass('active_seller');
        });
        $('.see_seller_detail').on('click', function() {
            $('#display_none_id').css("display", "block");
        });
    });
</script>

</html>