<?php
   $dbHost = 'Localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'formulario-teste';

   $conexao = new mysqli( $dbHost,$dbUsername,$dbPassword,$dbName);

   /* TESTANDO A CONEXÃO E MOSTRANDO MENSAGEM NA TELA SE DER SUCESSO
   if($conexao->connect_errno)
   {
       echo "Erro";
   }
   else
   {
       echo "Conexão efetuada com sucesso!";
   }*/

?>