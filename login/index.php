<?php 

session_start();

if(!isset($_SESSION['username'])){
	include('verifica.php');
}

//$_SESSION['nome']='Gabriel'; Declara variavel sessao (GLOBAL)
//session_destroy(); quebra a sessao


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
		<ul>
			<span class="bem">Seja Bem-Vindo <br>
		
				
		
		
			</span>	
		
			<div class="centro_login">
				<?php echo substr($_SESSION["username"], 0, 30)?>

				</div>
    
   
		</ul>
    </nav>


	
	<form method="post">
     <div class="tela_login2">
        <h1 class="centro">Usuários</h1>
        <input class="caixa" type="text" name="txtNome" placeholder="Nome">
         <table>
          <thead>
	          <tr>
	            <th>Nome</th>
             </tr>
	       </thead>
         </table>

       
    </form>

        
    <div >
				<div >
	                <table >
	                    <thead>
	                        <tr>
	                            <th>Nome</th>
	                            <th>Email</th>
	                        
	                        </tr>
	                    </thead>
	                    <tbody>
							<?php
							include('../conexao.php');
							$query = mysqli_query($conecta, "SELECT * FROM usuarios ORDER BY nome");
							if(mysqli_num_rows($query) > 0) {
								while($result = mysqli_fetch_assoc($query)) {
									echo "<tr>";
									echo "<td>" . $result['nome'] . "</td>";
									echo "<td class='text-center'>" . $result['email']. "</td>";
					
							
								}
							}
							?>
	                        
	                    </tbody>
	                </table>
	            </div>
	        </div>
     </div>

  
       
       
         
                           
 


              
     
 
      
    </div>

</body>
</html>