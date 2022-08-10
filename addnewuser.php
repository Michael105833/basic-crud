<?php
require_once 'php/init.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <div class ="container">
    <div class="row">
        <div class="col-md-12">
            <h3> PHP CRUD </h3>
        </div>
    </div>
    <br>
    <?php add(); ?>
    <form name="insertrecord" method="GET">
        <div class="row">
            <div class="col-md-4">
                <b>First Name</b>
                <input type = "text" name="firstname" class="form-control" required>
            </div>
            <div class="col-md-4">
                <b>Last Name</b>
                <input type = "text" name="lastname" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <b>Email Address</b>
                <input type = "text" name="email" class="form-control" required>
            </div>
            <div class="col-md-4">
                <b>Contact Number</b>
                <input type = "text" name="contactno" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <b>Address</b>
                <textarea type = "text" name="address" class="form-control" required></textarea>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-md-8">
                <input type = "submit" name="submit" class="btn btn-success" value="Submit">
                <a href="viewalluser.php" class="btn btn-danger">Back</a>
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>