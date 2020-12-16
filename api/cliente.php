<?php 

	include('./db.class.php');
	
	$db = new DataBase();
	
    header('Content-Type: application/json');
    
    echo json_encode(['clientes'=>$db->getAll('SELECT * FROM cliente')]);
    
    
    ?>
