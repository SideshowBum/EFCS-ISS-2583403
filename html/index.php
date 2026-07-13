<h1> Examen Finale ISS</h1>
<h4> Connexion MySQL depuis PHP...</h4>
<?php
#creation d'une connexion utilisateur a la BD.
$host = 'mysql';
$user = $_ENV["DB_USER"];
$pass = $_ENV["DB_PASSWD"];
$conn = new mysqli($host, $user, $pass);

#boucle qui verifis si la connexion a la BD  a reussi
if ($conn->connect_error) {
	die("la connexion a echoue: " . $conn->connect_error);
}
echo "Connexion reussie a MySQL";
?>

