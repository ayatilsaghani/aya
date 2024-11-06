
<?php
include("conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <center><h1>Sign Up</h1></center>
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="FName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="FName" placeholder="First Name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lName" placeholder="Last Name" required>
                </div>
                <div class="col-md-6 mb-3">

                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <span style="color:red"><?php  echo $emptyemail ?></span>
                <div class="col-md-6 mb-3">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password"  name="password"  class="form-control" id="inputPassword4" placeholder="Password" >
                </div>
                <span style="color:red"><?php  echo $emptypass ?></span>
                <div class="col-md-6 mb-3">
                    <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                    <input type="password"  name="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password" >
                </div>
                <span style="color:red"><?php  echo $emptypass ?></span>
            </div>
            <center><button type="Submit"  name="Submit" class="btn btn-primary">Sign Up</button></center>
        </form>
    </div>
</body>
</html>