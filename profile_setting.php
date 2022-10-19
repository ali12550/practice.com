<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile Setting</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

</head>

<body>
    <?php include "header.php" ?>

    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile Setting</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->

    <!-- Profile Setting Section start -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center my_order_cl_12">
                <h1 class="my_order_title">Profile Setting</h1>
            </div>
        </div>
    </div>
    <div class="container my-6">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 justify-content-around border box_shadow_form">
                <div class="text-center mt-5">
                    <div class="wrap_div border">
                        <span class="user_edit user_edit_icon">
                            <i class="fa-solid fa-user ml_customize"></i>
                        </span>
                        <span class="ml_custom mt-5">
                            <i class="fa-solid fa-camera"></i>
                        </span>
                    </div>
                </div>

                <form action="" class="mt-5 profile_setting_form my-5 px-4">
                    <h6 class="mt-3 font_styling_profile_setting">Full Name</h6>
                    <input type="text" class="form-control profile_setting_input">
                    <h6 class="mt-3 font_styling_profile_setting">Phone Number</h6>
                    <input type="number" class="form-control profile_setting_input">
                    <h6 class="mt-3 font_styling_profile_setting">Address (Line 1)</h6>
                    <textarea class="form-control profile_setting_input" name="" id="" cols="50" rows="2" style="resize: none;"></textarea>
                    <h6 class="mt-3 font_styling_profile_setting">City</h6>
                    <select name="" id="" class="form-control profile_setting_input">
                        <option value="1">Lahore</option>
                        <option value="2">Islamabad</option>
                        <option value="3">Karachi</option>
                        <option value="4">Multan</option>
                    </select>
                    <h6 class="mt-3 font_styling_profile_setting">Country</h6>
                    <select name="" id="" class="form-control profile_setting_input">
                        <option value="1">Pakistan</option>
                        <option value="2">Indea</option>
                        <option value="3">South Africa</option>
                        <option value="4">Bangladesh</option>
                    </select>
                </form>
                <div class="text-center my-3">
                    <span href="" class="btn bg-primary text-white py-2 rounded-5 font_size_button" id="liveToastBtn" onclick="myFunction()">SUBMIT TO VERIFY</span>
                </div>
                <div id="snackbar">Successfully submitted.</div>
            </div>
        </div>
    </div>

    <!-- Profile Setting Section end -->





    <?php include "footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    function myFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 3000);
    }
</script>

</html>