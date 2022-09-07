<?php
   include'2_trycatch.php';
   
 //  $query ="insert into teste (nome, email) values ('Thainá', 'thainá.nunes.barbosa@escola.pr')";
   $query ="update teste set nome = 'gracas a deus pai', where id = 1 ";
   $query = "delete";
   $sql = $conexao->prepare($query);
   $resultado = $sql->execute();
 echo 'testa';
 
?>