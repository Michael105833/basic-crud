<?php

class crud extends config{

public function addData(){

    if(isset($_GET['submit'])){

        $fname = $_GET['firstname'];
        $lname = $_GET['lastname'];
        $email = $_GET['email'];
        $contact = $_GET['contactno'];
        $address = $_GET['address'];

        $con = $this->con();
        $sql = "INSERT INTO `practice_crud`(`first_name`, `last_name`, `email`, `contactno`, `address`) VALUES (?,?,?,?,?)";
        $data = $con->prepare($sql);
        if($data->execute([$fname,$lname,$email,$contact,$address])){
          echo "<script>alert('Record inserted successfully!');</script>";
          echo "<script>window.location.href='viewalluser.php'</script>";;
        }else{
          echo "<script>alert('Record inserted unsuccessfully!');</script>";
          echo "<script>window.location.href='viewalluser.php'</script>";
        }
    }
}

public function viewData(){

        $con = $this->con();
        $sql = "SELECT * FROM `practice_crud`";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll();
        return $result;
}

public function view1Data(){

    if(isset($_GET['update'])){
      $id = $_GET['update'];

        $con = $this->con();
        $sql = "SELECT * FROM `practice_crud` WHERE `id` = ?";
        $data = $con->prepare($sql);
        $data->execute([$id]);
        $result = $data->fetch();
        return $result;
  }
}

public function updateData(){
    if(isset($_GET['Update'])){

        $stdid = $_GET['studentid'];
        $fname = $_GET['firstname'];
        $lname = $_GET['lastname'];
        $email = $_GET['email'];
        $contact = $_GET['contactno'];
        $address = $_GET['address'];

        $con = $this->con();
        $sql = "UPDATE practice_crud SET `first_name` = '$fname', `last_name` = '$lname', `email` = '$email', `contactno` = '$contact', `address` = '$address' WHERE `id` = ?";
        $data = $con->prepare($sql);
        if($data->execute([$stdid])){
          echo "<script>alert('Record updated successfully!');</script>";
          echo "<script>window.location.href='viewalluser.php'</script>";
        }else{
          echo "<script>alert('Record deleted unsuccessfully!');</script>";
          echo "<script>window.location.href='viewalluser.php'</script>";
        }
    }
}

public function deleteData(){

    if(isset($_GET['delete'])){
      $id = $_GET['delete'];

        $con = $this->con();
        $sql = "DELETE FROM `practice_crud` WHERE `id` = ?";
        $data = $con->prepare($sql);
        if($data->execute([$id])){
          echo "<script>alert('Record deleted successfully!');</script>";
          echo "<script>window.location.href='viewalluser.php'</script>";
        }else{
          echo "<script>alert('Record deleted unsuccessfully!');</script>";
          echo "<script>window.location.href='viewalluser.php'</script>";
        }
      }
    }


public function viewprofile(){

    if(isset($_GET['profile'])){
      $id = $_GET['profile'];

        $con = $this->con();
        $sql = "SELECT * FROM `practice_crud` WHERE `id` = ?";
        $data = $con->prepare($sql);
        $data->execute([$id]);
        $result = $data->fetch();
        return $result;
    }
  }

public function updateprofile(){
  if(isset($_POST['upload'])){
    $id = $_GET['profile'];

    $file_name = $_FILES['file']['name'];
    $file_temp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];

    $location="upload/".$file_name;

    if($file_size < 524880){
      if(move_uploaded_file($file_temp,$location)){

        $con = $this->con();
        $sql = "UPDATE `practice_crud` SET `photo` = '$location' WHERE `id` = ?";
        $data = $con->prepare($sql);
        if($data->execute([$id])){
          echo "<script>alert('Uploaded Photo Successfully!!')</script>";
          echo "<script>window.location.href='viewalluser.php'</script>";
      }else{
          echo "<script>alert('File size is to large to upload')</script>";
      }
      }
    }
  }
}
}



?>
