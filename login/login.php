
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   

  
</head>
<nav>
    <ul class="top_menu">
       <a href="../index.php">Home</a>
    </ul>
</nav>

<br><br>

<body id="corpo">

    <div class="tela_login">
        <form action="../autentica.php" method="post">
        <h1>Login</h1>
        <input class="caixa" name="txtUsername" type="text" placeholder="email">
        <br><br>
        <input class="caixa" name="txtPassword" type="password" placeholder="Senha">
        <br><br>
        <button  class="botao" type="submit" >Acessar</button>
       
        </form>
    </div>    
    

</body>
</html>