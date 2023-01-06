<?php include 'config.php';?>

<?php

$name=htmlspecialchars($_POST['name']);
$image=htmlspecialchars($_POST['image']);

 $sql="insert into gull(name,photo) VALUES ('$name','$image')";
if (mysqli_query($db,$sql)) {
	
}else{
	echo "Failed Insert In To Database";
}



echo "<h1><script>alert('Welcome IN New ')</script></h1>";
echo "Welcom To Here";
?>