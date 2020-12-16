<?php 

	include('./db.class.php');
	
	$db = new DataBase();
    
    $post = $_POST;
 
    $sql = 'SELECT * FROM cliente WHERE email = :email AND senha = :pass';

    $dados = [
        ':email' => $post['email']
        , ':pass' => $post['pass']
    ];
 
    $cliente = $db->getRow($sql,$dados);

    header('Content-Type: application/json');
    echo json_encode(['cliente'=>$cliente]);
 
    ?>
