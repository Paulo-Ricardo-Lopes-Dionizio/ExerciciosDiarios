<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
  
    <form action="processar.php" method="post"> <!-- Aqui será a "ancora" que puxará os dados desse arquivo para outro -->

    <label>Nome</label>Name: <input type ="text" name="nomeTeste"><br><!-- Será o titulo e dados que vai ser colocado, podendo armazenar e mandar para o outro arquivo -->
    <label>Endereço</label>endereço: <input type ="text" name="enderecoTeste"><br><!-- Será o titulo e dados que vai ser colocado, podendo armazenar e mandar para o outro arquivo -->
    <label>E-mail</label> e-mail: <input type="text" name="e_mailTeste"><br><!-- Será o titulo e dados que vai ser colocado, podendo armazenar e mandar para o outro arquivo -->
    <input type="submit" value="enviar"/><!-- aqui será como o dado sera enviado para o outro arquivo -->
</form>

    
</body>
</html>