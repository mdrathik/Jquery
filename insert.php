<?php include 'connect.php'; 

if($_SERVER["REQUEST_METHOD"]=="POST"){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile= $_POST['mobile'];
  $message=$_POST['message'];

  $sql= "INSERT INTO data (name,email,mobile,message) VALUES('$name','$email','$mobile','$message')";
  $result=$conn->query($sql);
    if($result==TRUE) {
      echo "<strong>Success!</strong>  Data Sauccfully saved";
  } 
  else {
     echo "Error: " . $sql . "<br>" . $conn->error;
  }

  }
 /*   $conn->close();*/
?>