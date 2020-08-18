<?php

$conn = mysqli_connect("localhost","root","","hazze");

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin:9px;
  background-color:white;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  padding-bottom: 10px;
  color: white;
  background-color: blue;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body style="margin-left:80px;align:center; background-color:black;">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


<div class="row">
<div class="col m4"><br><button onClick="location.href='dashboard.php'" class="btn-large blue waves-effect waves-dark"  style="width:20%" name="button">Back&nbsp;</button></div>
<div class="col m8"><h3 style="text-align:left;margin-left:10px;color:white;">User Profile Cards</h3></div>
</div>
<?php
  $result = mysqli_query($conn," SELECT * FROM user ");
  while ($row = $result->fetch_assoc()){
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $gender = $row["gender"]; 

?>
<!-- put the whole form inside php while loop to print cards of all users-->
<form action="" >
<div class="row" style="" >
      <div class="col s4">
<div class="card">

  <h5><?php echo "$name" ?></h5>
  <p class="title"><?php echo "$email" ?></p>
  <p><?php echo "$phone" ?></p>
  <p><?php echo "$gender" ?></p>
  
  
 
</div>
</div>

</form>
<?php
  }
?>
</div>

</body>
</html>
