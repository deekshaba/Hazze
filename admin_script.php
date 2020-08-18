



<?php

$conn = mysqli_connect("localhost","root","","hazze");



if (isset($_POST['submit'])) {
    $aemail = $_POST['aemail'];
    

    $apassword = $_POST['apass'];
   


    $_SESSION['aemail'] = $aemail;
    $_SESSION['apass'] = $apassword;

    //$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $query = "SELECT  aemail FROM admin WHERE aemail='" . $aemail . "' AND apass='" . $apassword . "'";
    $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
    $num = mysqli_num_rows($result);

    


 // If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
    if ($num == 0) {
        echo "<span class='red'>Please enter correct E-mail id and Password</span>";
        header('location: admin.php');
    } else {
        
        header('location: dashboard.php');
    }
}
?>