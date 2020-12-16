<?php
    include('./api/db.class.php');

    $dbClass = new DataBase(); //instanciando a classe

	if (isset($_POST['email']) && empty(!$_POST['email'])) { 

		// echo'<pre>';
		// print_r($_POST);
		// die();

		$nome  = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['pass'];

		try {

			$sql = "INSERT INTO cliente 
					(nome, email, senha) 
					VALUES 
					('{$nome}', '{$email}', '{$senha}')
				";
				
			$q = $dbClass->execute($sql);
			   
			header("Location: cliente.html");
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
