<?php 
include 'connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$sql='SELECT * FROM data';
	$result=$conn->query($sql);
	if($result==TRUE){
		foreach ($result as $key) { ?>
<tr>
	<td><?php 	echo $key['name']; ?> </td>
	<td><?php 	echo $key['email']; ?> </td>	
	<td><?php 	echo $key['mobile']; ?> </td>
	<input type="text" name="id" value=" <?php 	echo $key['mobile']; ?> ">
	<td  style="display: inline-flex;"><button class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span></button>
	&nbsp;	<button type="submit" id="delete" value="<?php 	echo $key['id']; ?>"   class="btn btn-sm btn-danger"><span  class="glyphicon glyphicon-trash"></span></button>
	</td>
	</tr>
 <?php }
	}
}
else{
	echo "not post";
}
?>