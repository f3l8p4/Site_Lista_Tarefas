<?php

class Conexao {

	private $host = 'sql205.epizy.com';
	private $dbname = 'epiz_28831750_Banco_Site_Tarefa';
	private $user = 'epiz_28831750';
	private $pass = 'j82r1PCw9zLU';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>