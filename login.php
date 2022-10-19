<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

</head>

<body>
    <?php include "header.php" ?>
    <section>
        <div class="container">


            <div class="form-signin bg-light ">
                <form>
                    <!-- <img class="mb-4" src="https://www.dropbox.com/s/zgbbayj1iqd9fjf/CF_Mark.jpg?raw=1" alt="" width="72"> -->
                    <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

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
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
                </form>
            </div>




        </div>
    </section>

    <!-- footer -->
    <?php include "footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>

</html>