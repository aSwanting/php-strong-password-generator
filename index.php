<!-- ////////////////////////////////////////// PHP ////////////////////////////////////////// -->
<?php
$password_length = $_GET["password_length"] ?? 8;
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

<body>
    <div class="container border border rounded p-5 my-5 shadow">
        <h1 class="display-5 text-center">Password Generator</h1>
        <div class="container border border rounded p-5 my-5 shadow">

            <!-- Form Start -->
            <form class="row g-3 align-items-end" method="get">

                <div class="col-auto">
                    <label class="form-label" for="password_length">Choose password length between 8 and 32 characters</label>
                    <input class="form-control" type="number" name="password_length" placeholder="Length between 8 and 32" value="8" min="8" max="32">
                </div>

                <div class="col-auto">
                    <input class="btn btn-outline-secondary" type="submit" value="Generate">
                </div>


                <p>Password Length = <?= $password_length; ?></p>


            </form>
            <!-- Form End -->

        </div>
    </div>
</body>

</html>