<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost = "localhost";
$dbname = "db_gestioncr";
$dbuser = "root";
$dbpass = "root";
// database connection
$conn = new
PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
// new data
$matricule = $_POST['mat'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$codePostal = $_POST['cpostal'];
$ville = $_POST['ville'];
$dateEmbauche = $_POST['dateEmb'];
$secteurCode = $_POST['codesec'];
$laboCode = $_POST['labcode'];
$deptCode = $_POST['depcode'];
$mdp = $_POST['mdp'];
$grainsel = $_POST['grsel'];

if (empty($nom)) {
	$errmsg_arr[] = 'Vous devez mettre votre nom.';
	$errflag = true;
}
if(empty($mdp)) {
	$errmsg_arr[] = 'Vous devez mettre votre mot de passe.';
	$errflag = true;
}

if (empty($grainsel)) {
	$errmsg_arr[] = 'Vous devez mettre votre grainsel.';
	$errflag = true;
}
// préparation de la requête SQL
$result = $conn->prepare("INSERT INTO visiteur VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$result->bindParam(1, $matricule);
$result->bindParam(2, $nom);
$result->bindParam(3, $prenom);
$result->bindParam(4, $adresse);
$result->bindParam(5, $codePostal);
$result->bindParam(6, $ville);
$result->bindParam(7, $dateEmbauche);
$result->bindParam(8, $secteurCode);
$result->bindParam(9, $laboCode);
$result->bindParam(10, $deptCode);
$result->bindParam(11, $mdp);
$result->bindParam(12, $grainsel);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
header("location: formAUTHENTIFICATION.html");
}
else{
$errmsg_arr[] = 'veuillez verifier les informations entrees.';
$errflag = true;
}
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: formINSCRIPTION.html");
exit();
}
?>