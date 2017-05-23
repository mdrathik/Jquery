<?php 
include 'connect.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {
		if($_POST==true){
		foreach($_POST["name"] as $key=>$value){
			$name=$_POST['name'][$key];
		$sql="INSERT INTO data (name) values ('$name')";
		$result=$conn->query($sql);

	}
	echo "data Submitted";
}
else
{
	echo "method not work";
}
} 
else {
	echo "failed";
}


 ?>