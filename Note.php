<?php
session_start();







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
	<h1 class='card-title ms-5'> FlashCard</h1></label>
	<button class="button" id="show-btn">adicionar flashcard</button>
	

	<form class='cartao flexBox flexCenter flexCol flexColCenter w-75 mx-auto' action="<?php echo $_SERVER['PHP_SELF'] ?>" method='post'>
		<label for='mail'><h1 class='card-title ms-5' required >Digite seu email</h1></label>
		<input type='email' id='mail' name='mail' placeholder='usuario@email.com' required class='form-label entrada mt-5 ml-5'/>
		<label for='pass2'><h1 class='card-title ms-5'>Digite sua Senha</h1></label>
		<input type='password' id='pass' name='pass' placeholder='Confirme a senha ' minlength='8' pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" class='form-label entrada mt-5 ml-5 '/>
		<input type='submit' class='button' value='Entrar'/>
		<span class='text-danger bg-dark'>texto</span>
	</form>
	
</main>
</body>
</html>
<!--https://bushansirgur.in/javascript-flash-card-project-for-beginners/
https://javascript.plainenglish.io/make-a-rich-text-editor-with-javascript-in-5-minutes-ee8025694e76
-->