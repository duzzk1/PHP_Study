<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulários PHP</title>
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <?php 
    $nome = "";
    $email = "";
    $password = "";
    if (isset($_POST["enviar"])){
      if ($_POST["name"] !== ""){
      $nome = $_POST["name"];
      }else {
        $nome = "DIGITE UM NOME!";
      };
      if ($_POST["email"] !== ""){
        $email = $_POST["email"];
        }else{
          $email = "DIGITE UM EMAIL!";
        };
        if ($_POST["password"] !== ""){
          $password = $_POST["password"];
          }else{
            $password = "DIGITE UMA SENHA!";
          };
      
     
    };
  ?>
  <h1>Formulário de aprendizado PHP</h1>
  <div>
  
  <form method="post">
    <label for="name">Nome</label>
    <input type="text" id="name" name="name">
    <label for="email">Email</label>
    <input type="email" id="email" name="email">
    <label for="password">Senha</label>
    <input type="password" id="password" name="password">
    <input type="submit" value="Enviar" id="enviar" name="enviar">
  </form>
  </div>
  <div id="para">
  <p>
     <?php 
     echo "O nome inserido foi: $nome"; 
     ?>
  </p>
  <p>
    <?php 
     echo "O Email inserido foi: $email";
    ?>
  </p>
  <p>
    <?php 
     echo "A senha inserida foi: <span class='spans'>$password</span>";
    ?>
  </p>
  </div>
</body>
</html>