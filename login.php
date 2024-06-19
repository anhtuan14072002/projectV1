<?php 
session_start();
$_SESSION['auth'] = $user; // Set the user details in the session

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/navbar2.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">
    <?php include_once("styles/styles.php") ?>
</head>

<body>
    <div class="nav">
        <?php include_once("header_footer/navbar2.php") ?>
    </div>
    <section>
        <div class="container">
            <h1 class="text-center">Login</h1>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                <form action="/login_user.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
    <div class="footer">
        <?php include_once("header_footer/footer.php")?>
    </div>
</body>

</html>