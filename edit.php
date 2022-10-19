<!DOCTYPE html>
<html>

<head>
    <title>Edit Information</title>
</head>

<body>
    <?php include "header.php" ?>


    <!-- section sell production -->

    <section class="my-5">
        <div class="container py-5 shadow_sell_products border">


            <h1 class="text-center mb-3">Edit Information</h1>
            <form>
                <div class="row   mb-3 ">
                    <div class="col col-md-6 ">
                        <label class="form-label">Name</label>
                        <input type="text" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Name" aria-label="First name" required>
                    </div>
                    <div class="col col-md-6 ">
                        <label class="form-label">Basic Price</label>
                        <input type="number" name="lastName" class="form-control shadow_sell_products sell_input" placeholder="Basic Price" aria-label="Last name" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Description</label>
                        <!-- <input type="text" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Description"
                            aria-label="First name" required> -->
                        <textarea class="form-control shadow_sell_products sell_input desc_sell_products" name="firstName" id="" cols="30" rows="5" placeholder="Detail Description Of Your Product" required></textarea>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label mt-2">Current Location</label>
                                <!-- <input type="text" name="lastName" class="form-control shadow_sell_products sell_input" placeholder="Current Location"
                                aria-label="Last name" required> -->
                                <!-- <select class="form-select shadow_sell_products sell_input" aria-label="Default select example" placeholder="Current Location" required>
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select> -->
                                <select class="js-example-basic-single form-control shadow_sell_products sell_input" name="state" placeholder="Current Location" multiple>
                                    <option value="select1">Lahore</option>
                                    <option value="select2">Islamabad</option>
                                    <option value="select3">Karachi</option>
                                    <option value="select4">Quetta</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label mt-3">Deliver To Cites</label>
                                <input type="text" name="lastName" class="form-control shadow_sell_products sell_input" placeholder="Deliver To Cites" aria-label="Last name" required>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Bidding Starts At</label>
                                <input type="date" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Description" aria-label="First name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Time</label>
                                <input type="time" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Description" aria-label="First name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Bidding Ends At</label>
                                <input type="date" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Description" aria-label="First name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Time</label>
                                <input type="time" name="firstName" class="form-control sell_input shadow_sell_products" placeholder="Description" aria-label="First name" required>
                            </div>
                        </div>
                    </div>

                    <div class="text-center d-flex justify-content-center mt-2">
                        <button type="submit" class="btn btn-primary mt-2 w-50" style="width: 20% !important;">SEND YOUR APPROVAL</button>
                    </div>
            </form>
        </div>
    </section>



    <?php include "footer.php" ?>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                placeholder: "Select Current Location",
                allowClear: true
            });
        });
    </script>

</html>