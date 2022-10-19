<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>

<body>
    <?php include "header.php" ?>


    <!-- breadcrum section start -->

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>

    <!-- breadcrum section End -->


    <!-- Contact Start -->
    <section class="section_contact bg-light py-4">
        <div class="container">

            <div class="row d-flex justify-content-center py-5">
                <h1 class="text-center pb-4 ml-5">Get In Touch</h1>
                <div class="col-md-5 col-sm-12">
                    <div class=" d-flex flex-column gap-1">
                        <h1 class=" mb-3">Contact Us</h1>
                        <p class="pb-4">Need to speak share details of your project like scope, timeframes
                            you’d like to solve..</p>
                        <p> <i class="fa fa-envelope-open me-2 text-primary" aria-hidden="true"></i>
                            alk@gmail.com</p>
                        <p> <i class="fa fa-location-arrow me-2 text-danger" aria-hidden="true"></i>
                            Town, Lahore, Punjab 52051 </p>
                        <p><i class="fa fa-phone me-2 text-info" aria-hidden="true"></i> 023232323 </p>

                        <div class="d-flex align-items-center gap-2 pt-4">
                            <img src="img/twitter_soc.png" class="" alt="...">
                            <img src="img/facebook_soc.png" class="" alt="...">
                            <img src="img/linkedin_soc.png" class="" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 cotact_form d-flex flex-column">
                    <div class="row g-3">
                        <div class="col">
                            <input type="text" class="form-control sell_input shadow rounded" placeholder="Name" aria-label="First name">
                        </div>
                        <div class="col mb-3">
                            <input type="email" class="form-control sell_input shadow rounded" placeholder="Email" aria-label="Last name">
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <input type="text" class="form-control sell_input shadow rounded" id="inputAddress2" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label ">Message</label>
                        <textarea class="form-control shadow" id="exampleFormControlTextarea1" rows="7"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary w-100 py-2">SUBMIT</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Contact End -->

    <?php include "footer.php" ?>
</body>

</html>