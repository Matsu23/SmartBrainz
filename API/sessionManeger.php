
<?php



function testLogin(){	
	if(isset($_SESSION["User"])){
			
			 return true;
		}
};

function loginSession($sessionIndex,$user){
	$_SESSION["ID"] = $sessionIndex;
	$_SESSION["User"] = $user;
	
	
};


function logOut(){
	session_destroy();
	header('location:/Index.php');
	
};

?>
