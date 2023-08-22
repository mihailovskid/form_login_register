<?php
// username|password
// magdalena|password
// aleksandar|password
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exercise 1/2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 px-5">
                <h1 class="text-center">Register</h1>
                <div class="text-success">
                    <?php
                    $registerMessage = $_GET['registerMessage'] ?? '';
                    if (!empty($registerMessage)) {
                        echo $registerMessage;
                    }
                    ?>

                </div>
                <div class="text-danger">
                    <?php
                    $registerError = $_GET['registerError'] ?? '';
                    if (!empty($registerError)) {
                        echo $registerError;
                    }
                    ?>
                </div>
                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input class="form-control" type="text" id="username" placeholder="Username" name="username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="pw">Password</label>
                        <input class="form-control" type="password" id="pw" placeholder="Password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-6 px-5">
                <h1 class="text-center">Login</h1>
                <div class="text-danger">
                    <?php
                    $loginError = $_GET['loginError'] ?? '';
                    if (!empty($loginError)) {
                        echo $loginError;
                    }
                    ?>
                </div>
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="usernameLogin">Username</label>
                        <input class="form-control" type="text" id="usernameLogin" placeholder="Username" name="username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="pwLogin">Password</label>
                        <input class="form-control" type="password" id="pwLogin" placeholder="Password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>