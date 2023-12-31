<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDBtest";

$conn = new mysqli($sername, $username,$password,$dbname);

if($conn -> connect_error){
    die("Falha na conexão" . $conn ->connect_error);

}
//esta apenas apresentando os dados que será pegos do bando de dados da tabela
$sql = "SELECT ID,nomeTeste,enderecoTeste,e_mailTeste value FROM Exemplo01";
$result = $conn ->query($sql);
if($result->num_rows > 0){
       echo "
       <table>
           <tr>
            <th>ID</th>
           </tr>

           <tr>
            <th>nomeTeste</th>
           </tr>

           <tr>
            <th>enderecoTeste</th>
           </tr>
            
           <tr>
            <th>e_mailTeste</th>
           </tr>
       </table>"; //deixei desse formato para ficar visivel o meu codigo, mas se quiserem fazer um uma unica linha tambem funciona.
}else{
}

