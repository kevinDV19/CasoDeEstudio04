<?php

include ('db.php');

$id=$_GET['eid'];
if($id=="")
{
echo '<script>alert("Lo siento ! Entrada incorrecta") </script>' ;
		header("Location: messages.php");


}

else{
$view="DELETE FROM `contact` WHERE id ='$id' ";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Subscriptor eliminado") </script>' ;
		header("Location: messages.php");
	}


}







?>