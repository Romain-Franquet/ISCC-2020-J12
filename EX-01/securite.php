<?php
session_start();
$_SESSION["Login"] = 'admin';
$_SESSION["Password"] = '2020';

?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="connexion.php">
<html>

 

<head>
    <header>
    
</header>
</head>
<body>

<title>Securite</title>

<?php
function connect_to_database(){
$servername = "localhost" ; 
$username = "admin";
$password = "2020"; 
$databasename = "base-site-rooting";

try {
$pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connected seccessfully";
return $pdo;
} catch (PDOException $e){
echo "Connection failed : ". $e->getMessage(); 

}

}
?>
<?php 

if ($_SESSION["Login"] = "Romain") 
$_SESSION ['Key'] = "id";
header ("mini-site-rooting.php");;
var_dump(password_verify($password));

if ($_SESSION["Password"] <> 2020) 
echo "Mauvais couple identifiant / mot de passe";
if ($_SESSION["Login"] <> "admin") 
echo "Mauvais couple identifiant / mot de passe";


if(isset($_SESSION['Key'])){  
    echo ("<p> Login $_SESSION['Login'] </p>" )


?>


</body>



<footer>
  




</footer>
