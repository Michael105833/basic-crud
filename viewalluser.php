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
             <div class="cold-md-12">
                 <h3> PHP CRUD </h3>
                 <a href ="addnewuser.php" class="btn btn-primary">Add New Record</a>
                 <br>
                 <br>
                 <?php delete(); ?>
                 <div class="table-responsive">
                     <table id="datatableid" class="table table-bordered table-striped">
                         <thead>
                             <th>Id</th>
                             <th>Photo</th>
                             <th>First Name</th>
                             <th>Last Name</th>
                             <th>Email</th>
                             <th>Contact Number</th>
                             <th>Address</th>
                             <th>Posting Date</th>
                             <th>Tools</th>
                         </thead>
                         <tbody>
                            <?php $crud = new crud();
                            $result = $crud->viewData();
                            foreach($result as $r){
                            ?>
                            <tr>
                            <td><?php echo $r['id'] ?></td>
                            <td><img src="<?php echo (!empty($r['photo']))?''.$r['photo']: 'upload/no image.jpg'?>" class="img-circle" width="80" height="80"></td>
                            <td><?php echo $r['first_name'] ?> </td>
                            <td><?php echo $r['last_name'] ?> </td>
                            <td><?php echo $r['email'] ?> </td>
                            <td><?php echo $r['contactno'] ?></td>
                            <td><?php echo $r['address'] ?> </td>
                            <td><?php echo $r['posting_date'] ?> </td>
                            <td>
                            <a href ="profile.php?profile=<?php echo $r['id'] ?>" class= "btn btn-primary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>View Profile</a> 
                            <a href ="updateuser.php?update=<?php echo $r['id'] ?>" class= "btn btn-success" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>Edit</a>
                            <a href ="viewalluser.php?delete=<?php echo $r['id'] ?>" onClick = "return confirm('Do you really want to delete this record')" class= "btn btn-danger" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>Delete</a>
                            </td>
                            </tr>
                            <?php }?>
                         </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
 </script>
 </body>
 </html>
 
