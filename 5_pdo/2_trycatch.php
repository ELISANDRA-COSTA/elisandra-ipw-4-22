<?php
   
   try{
   $conexao = new PDO("mysql:host=localhost;dbname=pdo","root","");
   
 }
    catch(\PDOExceptipon $e){
		echo 'Não foi possivel realiza a conexao';
		echo $e->getCode();
	    echo $e->getMessage();
	}
		
?>