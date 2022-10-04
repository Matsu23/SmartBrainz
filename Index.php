<?php
session_start();
include('API/sessionManeger.php');


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
	<div class='cardsContainer '>
		<div class='mx-auto  cartao'>
			<img src='Media/noteMakingIcon.png' class="card-img-top w-75 ms-5"alt='logo de criação de notas'>
			<a href='#'><h1 class='card-title ms-5'>Criar anotação</h1></a>
			<p class='card-text'>Crie anotações usando metodologias inteligentes
		</div>
		<div class='mx-auto  cartao'>
			<img src='Media/noteMakingIcon.png'  class="card-img-top  w-75 ms-5" alt='logo de criação de notas'>
			<a href='note.php'><h1 class='card-title ms-5'>Criar anotação</h1></a>
			<p class='card-text'>Crie anotações usando metodologias inteligentes
		</div>
		<div class='mx-auto  cartao'>
			<img src='Media/noteMakingIcon.png'  class="card-img-top w-75 ms-5" alt='logo de criação de notas'>
			<a href='#'><h1 class='card-title ms-5'>Criar anotação</h1></a>
			<p class='card-text'>Crie anotações usando metodologias inteligentes
		</div>
		
	</div>
	
<?php	
if( testLogin()==true){
		echo("<div class='m-5 flexBox flexCenter '>
		<button class='button'><a href='API/sair.php'>SAIR</button>
		</div> ");
}else{
	echo("<div class='m-5 flexBox flexCenter '>
		<button class=''><a href='CriarConta.php'>Criar uma conta</a></button><span style='color:white;' class='baselineText'>ou, <a href='Entrar.php' style='color:white'>entrar agora</a></span>
		</div>" );
}

	 ?>
</main>
</body>
</html>