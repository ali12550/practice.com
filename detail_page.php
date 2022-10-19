<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Page</title>

</head>

<body>


    <?php include "header.php" ?>

    <!-- detail page -->
    <section class="section_detail bg-light ">
        <div class="container-fluid">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="inventory.php">Search Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Page</li>
                </ol>
            </nav>
            <div class="row row_detail_main gap-3 justify-content-center    position-relative">
                <div class=" col-md-4 flex_sm justify-content-center   align-items-center gap-3 s_md_100 col-sm-12 text-white">
                    <div class="detail_slider">
                        <!-- <img class="img-fluid" src="img/about-1.jpg" alt=""> -->
                        <div class="slideshow-container">
                            <div class="mySlides1">
                                <img src="img/copart-auction.png" style="width:100%">
                            </div>

                            <div class="mySlides1">
                                <img src="img/testimonial-1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides1">
                                <img src="img/testimonial-1.jpg" style="width:100%">
                            </div>

                            <a class="prev_detail" onclick="plusSlides(-1, 0)">&#10094;</a>
                            <a class="next_detail" onclick="plusSlides(1, 0)">&#10095;</a>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center shadow mt-3 order-sm-3 d_s bg-white">
                        <img class="img-fluid" src="img/sign_up-bid.jpg" alt="">
                    </div>

                </div>
                <div class=" col-md-4 s_md_100 col-sm-12">
                    <div class="row rounded-top">

                        <h3 class="bg-primary text-center text-white fs-4 py-1 rounded-top mb-0">Product ID # 52467362</h3>
                        <div class="border shadow  bg-white">
                            <div class="d-flex justify-content-between pt-2">
                                <p class="m-0 ">Name:</p>

                                <p class="text-end d-flex fw-semibold fs_14 mb-0">
                                    John Doe
                                </p>

                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p class="m-0 ">Quantity available:</p>

                                <p class="text-end d-flex fw-semibold fs_14 mb-0">77 pcs<span>

                                    </span>
                                </p>

                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p class="m-0 ">Location:</p>

                                <p class="text-end d-flex fw-semibold fs_14 mb-0">Pak Arab
                                </p>

                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p class="m-0 ">City:</p>

                                <p class="text-end d-flex fw-semibold fs_14 mb-0">Lahore
                                </p>

                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p class="m-0 ">Deliverable to:</p>

                                <p class="text-end d-flex fw-semibold fs_14 mb-0">Lahore, Karachi
                                </p>

                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p class="m-0 ">Delivery fee:</p>

                                <p class="text-end d-flex fw-semibold fs_14 mb-0">PKR 200
                                </p>

                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p class="m-0 ">Base Price:</p>

                                <p class="text-end d-flex fw-semibold fs_14 mb-0">PKR 200 </p>

                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p class="m-0 ">Seller Name:</p>

                                <p class="text-end d-flex fw-semibold fs_14 mb-0">Taha Nadeem </p>

                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="m-0 py-1">Upload Date:</p>
                                <p class="fw-semibold fs_14 mb-0">02-dec-2022 12:30PM</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0 py-1">Status:</p>
                                <p class="fw-semibold fs_14 mb-0 text-primary">VERIFIED</p>
                            </div>

                        </div>



                        <!-- details fields -->
                        <div class="">

                            <div class="row shadow  mt-5">
                                <div class=" bg-primary text-center rounded-top">
                                    <h3 class="fs-4 text-white py-1 m-0">Description</h3>

                                </div>
                                <div class="border  bg-white">

                                    <div class="d-flex  justify-content-around gap-4 pt-2">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis ipsa aliquid corporis commodi tempora, ad quisquam enim? Eius assumenda sit nisi aliquam aspernatur reiciendis blanditiis culpa deserunt consectetur alias magni, eum dolorem excepturi, consequatur atque adipisci vero natus! Tenetur voluptas dolorum repellat similique optio eligendi cupiditate, tempora vero numquam nemo consectetur cumque rem, ex molestias veritatis voluptatem fugit sapiente. Quos dolore harum fugit pariatur quidem veniam culpa ipsum itaque ad quam nesciunt aperiam architecto delectus, nemo natus enim provident laborum. Dolore quae facilis ea molestias perspiciatis quasi aperiam officiis molestiae, ducimus accusantium quaerat quo magnam saepe ratione, quas cum cumque beatae ex, sit distinctio vitae. Atque dignissimos laudantium distinctio, quos quisquam provident eligendi fuga minima ab perspiciatis quod, officiis ad eaque sit doloribus expedita ipsum vel esse. Rerum, autem, facilis sapiente dolore unde doloribus ipsam, obcaecati quibusdam nesciunt recusandae explicabo. Tenetur excepturi ducimus voluptatum in qui aliquid dignissimos. Tempora odio velit eos dolorem consequuntur nisi animi, sunt vero nesciunt adipisci repellendus vitae suscipit voluptatem magni deserunt, facere fugit deleniti nihil quaerat alias aut sint atque! Quod quam optio nostrum tenetur inventore provident, dolorum fugiat incidunt id, sunt recusandae. Explicabo, vero.</p>

                                    </div>


                                </div>



                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 s_md_100 ">

                    <div class="row rounded-top shadow  bg-white">
                        <div class="d-flex bg-primary justify-content-between align-items-center rounded-top">
                            <h3 class="fs-4 text-white py-1 m-0">Bid Information</h3>
                        </div>
                        <div class="border">
                            <div class="d-flex justify-content-between mt-1">
                                <p class="mb-0 py-1">Bid Status:</p>
                                <div class="p-0 m-0">
                                    <a class="text-decoration-none text-primary" href="#">
                                        <p class="fw-semibold fs_14 mb-0 mt-1 "><i class="fa-solid fa-circle online_green_circle"></i> <span class="live_animation">LIVE</span>
                                            <p>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mt-1">
                                <p class="mb-0 py-1">Starting in:</p>
                                <div>
                                    <a class="text-decoration-none text-primary" href="#">
                                        <p class="fw-semibold fs_14 mb-0 mt-1">6hrs 23min 40sec<p>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mt-1">
                                <p class="mb-0 py-1">Base Price:</p>
                                <p class="d-flexfw-semibold fs_14 mb-0">PKR 200
                                </p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mt-1">
                                <p class="mb-0 py-1">Current Bid:</p>
                                <div class="d-flex flex-column ">
                                    <p class="text-end fw-semibold fs_14 mb-0"><i class="fa-solid fa-arrows-rotate rotate_animation"></i> PKR 220</p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mt-1">
                                <p class="mb-0 py-1">Place Bid:</p>
                                <div class="d-flex flex-column max_bid">
                                    <div class="text-end gap-1">PKR <input class="py-3 px-1 rounded-1 border" type="number"></div>
                                    <div class="text-end my-2"> <button class="btn btn-primary">Place Bid</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mt-1">
                                <p class="mb-0 py-1">Auto Bid:</p>
                                <div class="d-flex flex-column ">

                                    <div class="text-end fw-semibold fs_14 mb-0 d-flex justify-content-around">
                                        <span type="button" class="pointer-event px-1 mx-1  p-0" data-toggle="modal" data-target="#myModal">Set</span>
                                        <span class="mt_2px">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                            </div>
                                        </span>
                                        <span>
                                            <div class="fa-solid-drop dropdown dropdown_sell_product p-0">
                                                <a class="fa-solid p_5px" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-circle-info"></i>
                                                </a>
                                                <ul class="dropdown-menu fa-solid-drop-menu color_customize" aria-labelledby="dropdownMenuButton1">
                                                    <li class="p-1 some_update_styling">Enable auto bid so your bid will auto placed if old one if old bidded</li>
                                                </ul>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>





                    <div class="">

                        <div class="row rounded-top  mt-3 bg-white shadow">
                            <div class="d-flex bg-primary justify-content-between align-items-center rounded-top">
                                <h3 class="fs-4 text-white py-1 m-0">Seller Information</h3>
                            </div>
                            <div class="border">
                                <div class="d-flex justify-content-between mt-1 pt-2">
                                    <p class="mb-0 py-1">Seller Name:</p>
                                    <div>
                                        <a class="text-decoration-none text-primary" href="#">
                                            <h6>Taha Nadeem<h6>
                                        </a>
                                    </div>
                                </div>

                                <hr>
                                <div class="d-flex justify-content-between mt-1">
                                    <p class="mb-0 py-1">Reviews:</p>
                                    <div>
                                        <a class="text-decoration-none" href="#">
                                            <h6><i class="fa-solid fa-star text-warning"></i> 4.9 <a href="">(213 Reviews)</a>
                                                <h6>
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between mt-1">
                                    <p class="mb-0 py-1">Joined date:</p>
                                    <p class="d-flex fw-semibold fs_14 mb-0">12-dec-2022
                                    </p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between mt-1">
                                    <p class="mb-0 py-1">Goverment ID:
                                    <p>
                                    <p class="fw-semibold fs_14 mb-0 text-danger">Verified</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between mt-1">
                                    <p class="mb-0 py-1">Payment Method:
                                    <p>
                                    <p class="fw-semibold fs_14 mb-0">Not Verified</p>
                                </div>

                            </div>
                        </div>
                        <div class="p-0 mt-3">
                            <img class="img-fluid" src="./img/miror.jpg" alt="">
                        </div>

                    </div>
                </div>
                <!-- help in detail -->
                <div class="row rounded-top shadow my-5  col-md-8 col-sm-12  help_detail p-0">
                    <h3 class="bg-greay m-0 rounded-top px-4 py-2">Questions About This Product</h3>
                    <div class="border">
                        <div class="px-2 py-2">
                            <span class="px-2"><a href="">Login</a> or <a href="">Register</a> to ask questions to seller</span>
                            <p class="px-2">Other questions answered by Ali Designers</p>

                            <div class="ask_question_styling p-0 m-0">
                                <input type="text" class="ask_question_input_styling" placeholder="Ask seller a question">
                                <span class="ask_question_styling_btn">ASK QUESTION</span>
                            </div>

                            <hr>

                            <div class="wrap_message">
                                <div class="row mt-2 p-0">
                                    <div class="col-1 text-center my-auto text-info">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <div class="col-11">
                                        <span>is this available?</span><br>
                                        <span>Ali Designer</span>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-3">
                                    <div class="col-1 text-center my-auto">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <div class="col-11">
                                        <span>Yes Available.</span><br>
                                        <span>Ali Designer</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="wrap_message">
                                <div class="row mt-2 p-0">
                                    <div class="col-1 text-center my-auto text-info">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <div class="col-11">
                                        <span>is this available?</span><br>
                                        <span>Ali Designer</span>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-3">
                                    <div class="col-1 text-center my-auto">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <div class="col-11">
                                        <span>Yes Available.</span><br>
                                        <span>Ali Designer</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="wrap_message">
                                <div class="row mt-2 p-0">
                                    <div class="col-1 text-center my-auto text-info">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <div class="col-11">
                                        <span>is this available?</span><br>
                                        <span>Ali Designer</span>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-3">
                                    <div class="col-1 text-center my-auto">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <div class="col-11">
                                        <span>Yes Available.</span><br>
                                        <span>Ali Designer</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="wrap_message">
                                <div class="row mt-2 p-0">
                                    <div class="col-1 text-center my-auto text-info">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <div class="col-11">
                                        <span>is this available?</span><br>
                                        <span>Ali Designer</span>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-3">
                                    <div class="col-1 text-center my-auto">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <div class="col-11">
                                        <span>Yes Available.</span><br>
                                        <span>Ali Designer</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="wrap_message">
                                <div class="row mt-2 p-0">
                                    <div class="col-1 text-center my-auto text-info">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <div class="col-11">
                                        <span>is this available?</span><br>
                                        <span>Ali Designer</span>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-3">
                                    <div class="col-1 text-center my-auto">
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <div class="col-11">
                                        <span>Yes Available.</span><br>
                                        <span>Ali Designer</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close border-0 bg-white" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-center">Set Auto Bid</h4>
                        </div>
                        <div class="modal-body">
                            <p class="text-center">Stay at the top to win.</p>
                            <div class="d-flex justify-content-around">
                                <p class="pt-2">How much increment on bid</p>
                                <div class="">
                                    <span>PKR</span>
                                    <input class="p-1" type="number" placeholder="220">
                                    <div class="text-end mt-2">
                                        <a href="" class="btn bg-primary text-white">Set Bid</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- <div class="modal-footer">
                            <a href="" class="btn bg-primary text-white">Set Bid</a>
                        </div> -->

                    </div>
                </div>

            </div>
        </div>

    </section>
</body>
<?php include "footer.php" ?>


<script>
    let slideIndex = [1, 1];
    let slideId = ["mySlides1", "mySlides2"]
    showSlides(1, 0);
    showSlides(1, 1);

    function plusSlides(n, no) {
        showSlides(slideIndex[no] += n, no);
    }

    function showSlides(n, no) {
        let i;
        let x = document.getElementsByClassName(slideId[no]);
        if (n > x.length) {
            slideIndex[no] = 1
        }
        if (n < 1) {
            slideIndex[no] = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex[no] - 1].style.display = "block";
    }
</script>

<script>
    $(document).on("click", "#cust_btn", function() {

        $("#myModal").modal("toggle");

    })
</script>

<script>
    $(document).ready(function() {
        $(".rotate_animation").click(function() {
            $(".rotate_animation").toggleClass("image-fade");
        });
    });
</script>

</html>