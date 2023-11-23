<!-- ////////////////////////////////////////// PHP ////////////////////////////////////////// -->

<?php
session_start();
$password =  $_SESSION["password"];
?>

<!-- ////////////////////////////////////////// HTML ////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-success bg-gradient bg-opacity-75 vh-100 overflow-hidden">
    <div class="container p-5 my-5 text-center w-75">
        <h1 class="text-uppercase fw-semibold display-5 mb-3 text-white">Generated Password</h1>
        <div class="container bg-white border rounded rounded-5 p-5 shadow">

            <h2 class="display-6 mb-5"><?= $password ?></h2>
            <p class="text-secondary">Contains <?= strlen($password) ?> characters</p>

        </div>
    </div>
</body>

</html>