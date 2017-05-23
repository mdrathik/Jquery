<?php 
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$deleteID=$_POST['id'];
	$sql="DELETE FROM data WHERE id='$deleteID' ";

	$result=$conn->query($sql);

	if($result==TRUE){
		echo "deleted";
	}

}
else
{
   echo "Error";
}


?>