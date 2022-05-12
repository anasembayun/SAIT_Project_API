<?php
	require_once "config.php";
	
	header("content-type:application/json");
	
	$sql = "SELECT * FROM film";
    $result = mysqli_query($mysqli, $sql);
    
	while($row = mysqli_fetch_assoc($result)){
		$item[] = $row;
    }
                    
		
	echo json_encode($item, JSON_PRETTY_PRINT);
	
	mysqli_close($mysqli);
?>
