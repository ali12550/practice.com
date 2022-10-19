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
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_demo">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal_demo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog width_custom_category">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button " class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 px-2 border py-3">
                                <h1 class="choose_categories my-auto">CHOOSE A CATEGORIES</h1>
                            </div>
                            <div class="col-md-4 border mt-5 mt-md-0">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-between my-2 biding_cat_parent">
                                        <h1 class="mobile_categories my-auto">MOBILES</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">COMPUTER</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">LAPTOPS</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">TABLETES</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">TABLETES</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">TABLETES</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">TABLETES</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">TABLETES</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">TABLETES</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border mt-5 mt-md-0">
                                <div class="row display_none_1">
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">MOBILES1</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">COMPUTER</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">LAPTOPS</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">TABLETES</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border mt-5 mt-md-0">
                                <div class="row display_none_1">
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">MOBILES3</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">COMPUTER</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">LAPTOPS</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 d-flex justify-content-between my-2">
                                        <h1 class="mobile_categories my-auto">TABLETES</h1><span class="font_size_adjust my-auto">></span>
                                    </div>
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

    });
</script>

</html>