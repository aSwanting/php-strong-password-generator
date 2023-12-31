<!-- ////////////////////////////////////////// PHP ////////////////////////////////////////// -->

<?php

session_start();
include __DIR__ . "/partials/functions/functions.php";
$password_length = $_GET["password_length"] ?? null;

if ($password_length) {
    $_SESSION["password"] = generateSecurePassword($password_length);
    header("location: ./partials/server/password.php");
    die();
    // $_SESSION["password"] = "pippo";
}

?>

<!-- ////////////////////////////////////////// HTML ////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-success bg-gradient bg-opacity-75 vh-100 overflow-hidden">
    <div class="container p-5 my-5 text-center w-75">
        <h1 class="text-uppercase fw-semibold display-5 mb-3 text-white">Password Generator</h1>
        <div class="container bg-white border rounded rounded-5 p-5 shadow">

            <!-- Form Start -->
            <form class="row g-4 justify-content-center align-items-end" method="get">

                <div class="col-auto">
                    <label class="form-label mb-3" for="password-length">Choose password length between 8 and 32 characters</label>
                    <input class="form-control" type="number" name="password_length" id="password-length" placeholder="Length between 8 and 32" value="<?= $password_length; ?>" min="8" max="32" required>
                </div>

                <div class="col-auto">
                    <input class="btn btn-outline-secondary" type="submit" value="Generate">
                </div>

            </form>
            <!-- Form End -->

        </div>
    </div>
</body>

</html>