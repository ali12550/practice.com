<!DOCTYPE html>
<html lang="en">

<head>
    <title>Help</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

</head>

<body>
    <?php include "header.php" ?>

    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Help</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->

    <!-- Help Setting Section start -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center my_order_cl_12">
                <h1 class="my_order_title">Help</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-md-6 border_right_customize px-md-5">
                <h1 class="">Contact Info</h1>
                <h6 class="h6_text_contact">Phone</h6>
                <p class="para_contact_info"><i class="fa-solid fa-phone mx-2"></i><a href="tel:03000000000">03000000000</a></p>
                <h6 class="h6_text_contact">Email</h6>
                <p class="para_contact_info"><i class="fa-solid fa-envelope mx-2"></i><a href="mailto:sajjadali@gmail.com">sajjadali@gmail.com</a></p>
            </div>
            <div class="col-md-6 px-md-5">
                <h1 class="">Submit Request</h1>
                <label for="name_contact">Name</label>
                <input class="form-control" type="text">
                <label for="name_contact">Subject</label>
                <input class="form-control" type="text">
                <label for="name_contact">Message</label>
                <textarea class="form-control" name="" id="" cols="" rows="2" style="resize:none;"></textarea>
            </div>
            <div class="text-end">
                <a href="" class="btn bg-primary px-3 my-4 mx-5 text-white ">Submit</a>
            </div>
        </div>
    </div>

    <!-- Help Setting Section end -->



    <?php include "footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js">
</script>


</html>