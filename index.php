<?php
	session_start();
?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul style="padding:0; color:red;">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>AUTHENTIFICATION</title>
		<style type="text/css">
		<!-- body {background-color: white; color:5599EE; } 
			.titre { width : 180 ;  clear:left; float:left; } 
			.zone { width : 30car ; float : left; color:7091BB } -->
		</style>
	</head>
	<body bgcolor="white" text="5599EE">
		<div name="haut" style="margin: 2 2 2 2 ;height:6%;"><h1><img src="logo.jpg" width="100" height="60"/>Gestion des visites</h1></div>
		<div name="gauche" style="float:left;width:18%; background-color:white; height:100%;"></div>
		<div name="droite" style="float:left;width:80%;">
		<div name="bas" style="margin : 10 2 2 2;clear:left;background-color:77AADD;height:88%;">
			<form name="formAUTHENTIFICATION" method="POST" action="reg.php">
				<h1>Authentification</h1>
				<label class="titre">NOM D'UTILISATEUR : </label>
				<input type="text" name="identifiant" /><br>
				<label class="titre">MOT DE PASSE : </label>
				<input type="password" name="mdp" /><br>
				<button name="login" />OK</button>
			</form>
			<h4><a href="./formINSCRIPTION.html">Si vous n'avez pas de compte, cliquez ici pour vous inscrire.</a></h4>
		</div>
		</div>
	</body>
</html>

