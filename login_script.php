



<?php

$conn = mysqli_connect("localhost","root","","hazze");



if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    

    $password = $_POST['password'];
   


    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    //$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $query = "SELECT  email FROM user WHERE email='" . $email . "' AND password='" . $password . "'";
    $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
    $num = mysqli_num_rows($result);




 // If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
    if ($num == 0) {
        echo "<span class='red'>Please enter correct E-mail id and Password</span>";
        header('location: login.php');
    } else {
        
        header('location: home.php');
    }
}
?>