<?php
require_once 'php/init.php';
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <?php 
    $crud = new crud();
    $crud->viewprofile();
    $crud->updateprofile();
    ?>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Profile Upload</h3>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <lable>Upload Here</lable>
                    <input type="file" name="file" class="form-control" required>
                </div>
                <button type="submit" name="upload" class="btn btn-danger">Upload</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>