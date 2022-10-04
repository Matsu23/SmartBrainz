<?php
session_start();
include('API/cadastrar.php');

cadastro();

?>


<!DOCTYPE html>
<html>
<head>

<link rel='stylesheet' href='CSS/normalize.css'>
<link rel='stylesheet' href='CSS/style.css'>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="UTF-8">
</head>
<body>
<header class=''>
	<nav class='mb-5 clearfix border-bottom '>
		<a href='Index.php'><img src='Media/brainZtorm.svg' class=' logo m-2  ' alt='logo da brainstorm'/></a>
		<form class=''>
			<input class=' form-label search mt-5 ml-5' type='search' placeholder='Buscar notas,respostas ou cartões'/>
		</form>
	</nav>
	
</header>

<main class='centerDiv'>
	<form class='cartao flexBox flexCenter flexCol flexColCenter w-75 mx-auto' action="<?php echo $_SERVER['PHP_SELF'] ?>" method='post'>
		<label for='mail'><h1 class='card-title ms-5' required >Cadastrar email</h1></label>
		<input type='email' id='mail' name='mail' placeholder='usuario@email.com' required class='form-label entrada mt-5 ml-5'/>
		<label for='user'><h1 class='card-title ms-5' >Cadastrar Nome de usuario</h1></label>
		<input type='text' id='user' name='user' placeholder='Nome do usuario' required class='form-label entrada mt-5 ml-5'/>
		
		<label for='pass1'><h1 class='card-title ms-5'>Cadastrar Senha</h1></label>
		<input type='password' id='pass1 ' name='pass' required placeholder='Digite sua senha' minlength='8' pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" class='form-label entrada mt-5 ml-5 '/>
		

		<label for='pass2'><h1 class='card-title ms-5'>Confirmar Senha</h1></label>
		<input type='password' id='pass2' placeholder='Confirme a senha ' minlength='8' pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" class='form-label entrada mt-5 ml-5 '/>
		
		<input type='submit' class='button' value='cadastrar'/>
		<span class='text-danger bg-dark'>texto</span>
	</form>
	
</main>
</body>
</html>