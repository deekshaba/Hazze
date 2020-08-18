<?php
 
 
 $conn = mysqli_connect("localhost","root","","hazze");

 if ($conn->connect_error) {
     die("Connection failed: ". $conn->connect_error);
 }
 if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $dob=$_POST['dob'];
     $phone=$_POST['phone'];
     $gender=$_POST['gender'];
     $sql="INSERT INTO user (name,email,password,phone,dob,gender)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $phone . "','" . $dob . "','" . $gender ."')";
     mysqli_query($conn,$sql) or die(mysqli_error($conn));
     $uid=mysqli_insert_id($conn);
     $_SESSION['email']=$email;
     $_SESSION['uid']=$uid;

     header("Location:home.php");
    }
     $conn->close();
?>
