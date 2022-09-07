<?php
   include'2_trycatch.php';
   
   $query ="insert into teste (nome, email) values ('Thainá', 'thainá.nunes.barbosa@escola.pr
   //$query ="update ...";
   
   $sql = $conexão->prepare($query);
   $resultado = $sql->execute();
 echo 'testa';
 
?>