<?php
//recuperar dados
$name=$_POST['nomeTeste'];//irá pegar os dados do arquivo anterior para passar aqui e armazenar
$endress=$_POST['enderecoTeste'];//irá pegar os dados do arquivo anterior para passar aqui e armazenar
$email=$_POST['e_mailTeste'];//irá pegar os dados do arquivo anterior para passar aqui e armazenar
//configurando conexão com o banco
$servername = "localhost"; // esta declarando qual sera o servidor, nesse caso vai ser pelo XAMPP, então usamos o localhost, mas se tivesse um servidor pago ou mesmo que seja gratuito, deve colocar o endereço dele
$username = "root"; // e a "senha" do usuario do qual vai conseguir acessar os dados interno da página.
$password = ""; // e uma senha, que pode ser opcional coloca-la para evitar acesso indevidos.
$dbname = "MyDBtest"; // ira pegar do banco de dados que vc criou com o mysql(deve usar o xampp e ativar o mysql para conseguir acessar isso, depois aperta em "admin" para ser direcionado para o site e criar um novo bando de dados com o mesmo nome que vc colocou aqui)


//Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
//check de conexão
if (!$conn){
    die("Falha na conexão :". mysqli_error($conn));//quando der error na conexão vai passar essa mensagem do erro e junto o motivo do qual foi o error...o "die" para tudo oque tiver fazendo no site
}
//INSERT INTO NOME_TABELA( CAMPOS_DADOS ...)//não esquecer de adicionar mais uma coluna para colocar a chave primaria(chave que liga o banco e o programa em resumo). clique no botão do A_I para criar a chave primaria e coloque o nome de "ID"
$sql = "INSERT INTO Exemplo01 (nomeTeste,enderecoTeste,e_mailTeste,value) 
VALUES ('$name,'$endress,'$email')";// isso serve para basicamente botar os dados do php pra o  banco de dados do sql, o "Exemplo01" e o nome da tabela criada no sql.
//O VALUES são os valore que vai mandar no bando de dados.

//executar SQL
if (mysqli_query($conn, $sql)){// esta mandando conexão do conn para o sql
    //echo "Registrado no sistema";
    header("Location: Lista.php");//redirecionando para o arquivo
} else{
   echo "ERROR :" .$sql . "<br>" . mysqli_error($conn);// caos de um erro, ele irá aparecer
}
mysqli_close($conn);// fechar a conexão do local, padrão isso fazer no final