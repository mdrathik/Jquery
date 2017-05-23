<?php 
include 'connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$mobile=$_POST['mobile'];

$sql="SELECT * FROM mobile Where mobile like 
      '%$mobile%'  ";
$result=$conn->query($sql);
foreach ($result as $key) {
	echo $data='<li>'.$key['mobile'].'</li>';
}

}

?>