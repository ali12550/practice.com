<!doctype html>
<html lang="en">

<head>
    <title>Register</title>


</head>

<body class="">
    <?php include "header.php" ?>
    <div class="form-signin bg-light ">
        <form>
            <h1 class="h3 mb-3 fw-normal text-center">Please sign Up</h1>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name">
                <label for="floatingInput">User Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="Terms"> Terms And Conditions
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
            <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
        </form>
    </div>
    <?php include "footer.php" ?>
</body>

</html>