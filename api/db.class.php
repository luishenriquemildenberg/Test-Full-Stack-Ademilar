<?php 

	class DataBase 
	{	
		private $connect = false;

		function __construct()
		{
			$arr = [
				'host' => 'localhost'
				, 'dbname' => 'testeademilar'
				, 'user' => 'root'
				, 'pass' => ''
			];
			try{
			$this->connect = new PDO("mysql:host=".$arr['host'].";dbname=".$arr['dbname'], $arr['user'], $arr['pass']);
			}catch(PDOException $e)
			{
				echo 'erro <script>setTimeout(() => {location.reload();},10000)</script>';
				die();
			}
		}

		public function getRow($sql,$arr = [])
		{
			$q = $this->connect->prepare($sql);
			$q->execute($arr);
			return $q->fetch(PDO::FETCH_ASSOC);
		}

		public function getAll($sql,$arr = [])
		{
			$q = $this->connect->prepare($sql);
			$q->execute($arr);
			return $q->fetchAll(PDO::FETCH_ASSOC);
		}

		public function execute($sql)
		{
			$q = $this->connect->prepare($sql);
			return $q->execute();
		}
		
		public function save($sql,$data)
		{
			try { 
				$c = $this->connect;
				$q = $c->prepare($sql);
				$q->execute($data); 
				//$deb = $q->debugDumpParams();
				return $c->lastInsertId();
			}
			catch (PDOException $e){
				//echo $e->getMessage();
			}
		}
		
		private function debug_($q)
		{
			echo '<pre>';
			$q->debugDumpParams();
			die();
		}

	}