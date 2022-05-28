<?php

include ("../conexao.php");
ob_start();

if(isset($_POST['btnCadastro'])){
	if($_POST['txtSenha']){   

        $query = mysqli_query($conecta, 
            "INSERT INTO usuarios
            (nome, senha, email) 
            VALUES (
             '". trim($_POST['txtNome']) ."',
             '". trim($_POST['txtSenha']) ."',
             '". trim($_POST['txtEmail']) ."'
                  )");



    }
    
	
 } 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <ul class="top_menu">
       <a href="../index.php">Home</a>
    </ul>
</nav>

    <br><br>
    <form method="post">
     <div class="tela_cadastro">
        <h1>Cadastro</h1>
        <input class="caixa" type="text" name="txtNome" placeholder="Nome">
        <br><br>
        <input class="caixa" type="text" name="txtEmail" placeholder="Email">
        <br><br>
        <input class="caixa" type="password" name="txtSenha" placeholder="Senha">
        <br><br>
     
        <button class="botao" name="btnCadastro" type="submit">Cadastro</button>
       
     </div>
    </form>
    
</body>
</html>