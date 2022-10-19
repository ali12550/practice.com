<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Produuct Detail</title>
    <link href="css/product_detail.css" rel="stylesheet">

<body>
    <?php include "header.php"?>

    
    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="inventory.php">Search Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Page</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->


    <!-- Product Detail Start -->

    <section class="product_detail bg-light">
        <div class="container">


            <div class="super_container">
               
                <div class="single_product">
                    <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
                        <div class="row">
                            <div class="col-lg-2 order-lg-1 order-2">
                                <div class="column border">
                                    <img src="img/about-1.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                                </div>
                                <div class="column border">
                                    <img src="img/courses-1.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                                </div>
                                <div class="column border">
                                    <img src="img/about-2.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                                </div>
                                <div class="column border">
                                    <img src="img/vehical_1.jpg" alt="" style="width:100%" onclick="myFunction(this);">
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-2 order-1">
                                <div class="image_selected">
                                    <span onclick="this.parentElement.style.display='none'" class="closebtn">×</span>
                                    <img id="expandedImg" style="width:100%">
                                    <div id="imgtext"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-3">
                                <div class="product_description">

                                    <div class="product_name">Acer Aspire 3 Celeron Dual Core - (2 GB/500 GB HDD/Windows
                                        10
                                        Home)
                                        A315-33 Laptop (15.6 inch, Black, 2.1 kg)</div>
                                    <div class="product-rating"><span class="badge badge-success"><i
                                                class="fa fa-star"></i> 4.5
                                            Star</span> <span class="rating-review">35 Ratings &amp; 45 Reviews</span>
                                    </div>
                                    <div> <span class="product_price">₹ 29,000</span> <strike class="product_discount">
                                            <span style="color:black">₹ 2,000<span> </span></span></strike> </div>
                                    <div> <span class="product_saved">You Saved:</span> <span style="color:black">₹
                                            2,000<span>
                                            </span></span></div>
                                    <hr class="singleline">
                                    <div> <span class="product_info">EMI starts at ₹ 2,000. No Cost EMI
                                            Available<span><br>
                                                <span class="product_info">Warranty: 6 months warranty<span><br> <span
                                                            class="product_info">7 Days easy return policy<span><br>
                                                                <span class="product_info">7 Days easy return
                                                                    policy<span><br>
                                                                        <span class="product_info">In Stock: 25 units
                                                                            sold this
                                                                            week<span>
                                                                            </span></span></span></span></span></span></span></span></span></span>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="br-dashed">
                                                    <div class="row">
                                                        <div class="col-md-3 col-xs-3"> <img
                                                                src="https://img.icons8.com/color/48/000000/price-tag.png">
                                                        </div>
                                                        <div class="col-md-9 col-xs-9">
                                                            <div class="pr-info"> <span class="break-all">Get 5% instant
                                                                    discount +
                                                                    10X rewards @ RENTOPC</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7"> </div>
                                        </div>

                                    </div>
                                    <hr class="singleline">
                                    <div class="order_info d-flex flex-row">
                                        <form action="#">
                                        </form>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6" style="margin-left: 13px;">
                                            <!-- <div class="product_quantity">
                                                
                                            </div> -->
                                        </div>
                                        <div class="col-xs-6"> <button type="button"
                                                class="btn btn-primary shop-button">Add to
                                                Cart</button> <button type="button"
                                                class="btn btn-success shop-button">Buy
                                                Now</button>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-underline">
                            <div class="col-md-6"> <span class=" deal-text">Combo Offers</span> </div>
                            <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row padding-2">
                                    <div class="col-md-5 padding-0">
                                        <div class="bbb_combo">
                                            <div class="bbb_combo_image"><img class="bbb_combo_image"
                                                    src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg"
                                                    alt=""></div>
                                            <div class="d-flex flex-row justify-content-start"> <strike
                                                    style="color:red;">
                                                    <span class="fs-10" style="color:black;">₹ 32,000<span>
                                                        </span></span></strike>
                                                <span class="ml-auto"><i class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating"></i></span>
                                            </div>
                                            <div class="d-flex flex-row justify-content-start"
                                                style=" margin-bottom: 13px; ">
                                                <span style="margin-top: -4px;">₹30,000</span> <span
                                                    class="ml-auto fs-10">23
                                                    Reviews</span>
                                            </div> <span>Acer laptop with 10GB RAM + 500 GB Hard
                                                Disk</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center"> <span class="step">+</span> </div>
                                    <div class="col-md-5 padding-0">
                                        <div class="bbb_combo">
                                            <div class="bbb_combo_image"><img class="bbb_combo_image"
                                                    src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg"
                                                    alt=""></div>
                                            <div class="d-flex flex-row justify-content-start"> <strike
                                                    style="color:red;">
                                                    <span class="fs-10" style="color:black;">₹ 32,000<span>
                                                        </span></span></strike>
                                                <span class="ml-auto"><i class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating"></i></span>
                                            </div>
                                            <div class="d-flex flex-row justify-content-start"
                                                style=" margin-bottom: 13px; ">
                                                <span style="margin-top: -4px;">₹30,000</span> <span
                                                    class="ml-auto fs-10">23
                                                    Reviews</span>
                                            </div> <span>Acer laptop with 10GB RAM + 500 GB Hard
                                                Disk</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12" style="margin-left: 36px;">
                                        <div class="boxo-pricing-items">
                                            <div class="combo-pricing-item"> <span class="items_text">1 Item</span>
                                                <span class="combo_item_price">₹13,200</span>
                                            </div>
                                            <div class="combo-plus"> <span class="plus-sign">+</span> </div>
                                            <div class="combo-pricing-item"> <span class="items_text">1 Add-on</span>
                                                <span class="combo_item_price">₹500</span>
                                            </div>
                                            <div class="combo-plus"> <span class="plus-sign">=</span> </div>
                                            <div class="combo-pricing-item"> <span class="items_text">Total</span> <span
                                                    class="combo_item_price">₹13,700</span> </div>
                                            <div class="add-both-cart-button"> <button type="button"
                                                    class="btn btn-primary shop-button">Add to Cart</button> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center"> <span class="vertical-line"></span> </div>
                            <div class="col-md-5" style=" margin-left: -27px;">
                                <div class="row padding-2">
                                    <div class="col-md-5 padding-0">
                                        <div class="bbb_combo">
                                            <div class="bbb_combo_image"><img class="bbb_combo_image"
                                                    src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg"
                                                    alt=""></div>
                                            <div class="d-flex flex-row justify-content-start"> <strike
                                                    style="color:red;">
                                                    <span class="fs-10" style="color:black;">₹ 32,000<span>
                                                        </span></span></strike>
                                                <span class="ml-auto"><i class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating p-rating"></i><i
                                                        class="fa fa-star p-rating"></i></span>
                                            </div>
                                            <div class="d-flex flex-row justify-content-start"
                                                style=" margin-bottom: 13px; ">
                                                <span style="margin-top: -4px;">₹30,000</span> <span
                                                    class="ml-auto fs-10">23
                                                    Reviews</span>
                                            </div> <span>Acer laptop with 10GB RAM + 500 GB Hard
                                                Disk</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center"> <span class="step">+</span> </div>
                                    <div class="col-md-5 padding-0">
                                        <div class="bbb_combo">
                                            <div class="bbb_combo_image"><img class="bbb_combo_image"
                                                    src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg"
                                                    alt=""></div>
                                            <div class="d-flex flex-row justify-content-start"> <strike
                                                    style="color:red;">
                                                    <span class="fs-10" style="color:black;">₹ 32,000<span>
                                                        </span></span></strike>
                                                <span class="ml-auto"><i class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating"></i><i
                                                        class="fa fa-star p-rating"></i></span>
                                            </div>
                                            <div class="d-flex flex-row justify-content-start"
                                                style=" margin-bottom: 13px; ">
                                                <span style="margin-top: -4px;">₹30,000</span> <span
                                                    class="ml-auto fs-10">23
                                                    Reviews</span>
                                            </div> <span>Acer laptop with 10GB RAM + 500 GB Hard
                                                Disk</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12" style="margin-left: 36px;">
                                        <div class="boxo-pricing-items">
                                            <div class="combo-pricing-item"> <span class="items_text">1 Item</span>
                                                <span class="combo_item_price">₹13,200</span>
                                            </div>
                                            <div class="combo-plus"> <span class="plus-sign">+</span> </div>
                                            <div class="combo-pricing-item"> <span class="items_text">1 Add-on</span>
                                                <span class="combo_item_price">₹500</span>
                                            </div>
                                            <div class="combo-plus"> <span class="plus-sign">=</span> </div>
                                            <div class="combo-pricing-item"> <span class="items_text">Total</span> <span
                                                    class="combo_item_price">₹13,700</span> </div>
                                            <div class="add-both-cart-button"> <button type="button"
                                                    class="btn btn-primary shop-button">Add to Cart</button> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-underline">
                            <div class="col-md-6"> <span class=" deal-text">Specifications</span> </div>
                            <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="col-md-12">
                                    <tbody>
                                        <tr class="row mt-10">
                                            <td class="col-md-4"><span class="p_specification">Sales Package :</span>
                                            </td>
                                            <td class="col-md-8">
                                                <ul>
                                                    <li>2 in 1 Laptop, Power Adaptor, Active Stylus Pen, User Guide,
                                                        Warranty
                                                        Documents</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="row mt-10">
                                            <td class="col-md-4"><span class="p_specification">Model Number :</span>
                                            </td>
                                            <td class="col-md-8">
                                                <ul>
                                                    <li> 14-dh0107TU </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="row mt-10">
                                            <td class="col-md-4"><span class="p_specification">Part Number :</span>
                                            </td>
                                            <td class="col-md-8">
                                                <ul>
                                                    <li>7AL87PA</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="row mt-10">
                                            <td class="col-md-4"><span class="p_specification">Color :</span> </td>
                                            <td class="col-md-8">
                                                <ul>
                                                    <li>Black</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="row mt-10">
                                            <td class="col-md-4"><span class="p_specification">Suitable for :</span>
                                            </td>
                                            <td class="col-md-8">
                                                <ul>
                                                    <li>Processing &amp; Multitasking</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="row mt-10">
                                            <td class="col-md-4"><span class="p_specification">Processor Brand :</span>
                                            </td>
                                            <td class="col-md-8">
                                                <ul>
                                                    <li>Intel</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Detail End -->

    <?php include "footer.php"?>
</body>
<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
</script>

</html>