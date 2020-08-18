<?php
 
 
 $conn = mysqli_connect("localhost","root","","hazze");

 if ($conn->connect_error) {
     die("Connection failed: ". $conn->connect_error);
 }
 if(isset($_POST['submit'])){
     $bname=$_POST['bname'];
     $bemail=$_POST['bemail'];
     $bphone=$_POST['bphone'];
     $bdate=$_POST['bdate'];
     $btime=$_POST['btime'];
     $sql="INSERT INTO booking (bname,bemail,bphone,bdate,btime)VALUES('" . $bname . "','" . $bemail . "','" . $bphone . "','" . $bdate . "','" . $btime . "')";
     mysqli_query($conn,$sql) or die(mysqli_error($conn));
     $bid=mysqli_insert_id($conn);
     

     header("Location: confirmation.php");
    }
     $conn->close();
?>

