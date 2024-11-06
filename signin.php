<?php
include("conf.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <center><h1>Sign In</h1></center>
    <form action="" name="login" method="post">
        <div class="row">

                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" title="Please enter a valid email address avec  @emsi.ma">

            <span style="color:red"> <?php echo $emptyemail ?></span>
            <div class="form-group mb-3">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" >
            </div>
            <span style="color:red"> <?php echo $emptypass ?> </span>
        </div>
        <center><button type="Submit" name = "Submit" class="btn btn-primary">Sign In</button></center>
    </form>
</div>
</body>
</html>