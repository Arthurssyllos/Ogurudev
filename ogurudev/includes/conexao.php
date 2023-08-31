<?php
   // Simulação de conexão com o banco de dados
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "ogurudev";

   // Cria a conexão
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Verifica a conexão
   if ($conn->connect_error) {
       die("Conexão falhou: " . $conn->connect_error);
   }

   ?>