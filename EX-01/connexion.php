<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html>

 

<head>
    <header>
    
</header>
</head>
<body>

<title>Connexion</title>
<h1> Connexion </h1>
<nav>
    <a href="http://localhost/ISCC/Jour-09/mini-site.rooting.php">ACCUEIL</a>
    <a href="http://localhost/ISCC/Jour-09/Connexion.php"class="en-cours">Connexion</a>
    
</nav>


<form action="cible.php" method="post">
<p>
    <input type="text" Login="Login" placeholder="Login"/> <br>
    <input type="text" Password="Password" placeholder="Password"/> <br>
    <input type="submit" value="Valider" />
</p>
</form>

<?php
echo 'Login : '.$_POST["Login"].'<br>';
echo 'Password : ' .$_POST["Password"].'<br>';
header ("securite.php")
?>

<?php
    setcookie('user_id', 'id');
    setcookie('user_pref', 'dark_theme', time()+3600*24, '/', '', true, true);
?>
<form action="http://localhost/ISCC/Jour-09/securite.php">



</body>



<footer>
  




</footer>




