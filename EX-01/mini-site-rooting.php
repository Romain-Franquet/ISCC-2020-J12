<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html>

 

<head>
    <header>
    
</header>
</head>
<body>

<title>ACCUEIL</title>
<h1> Accueil</h1>
<nav>
    <a href="http://localhost/ISCC/Jour-09/mini-site.rooting.php"class="en-cours">ACCUEIL</a>
    <a href="http://localhost/ISCC/Jour-09/Connexion.php">Connexion</a>
   
</nav>
<?php
            if(isset($_COOKIE['user_id'])){
                echo 'Votre ID de session est le ' .$_COOKIE['user_id'];
            }
            if(isset($_FILES['image'])){
                echo $_FILES
        ?>
<?php
if(isset($_COOKIE)){   
 $_SESSION = $_COOKIE + $_SESSION;   
}else{   
    header ("connexion.php");  
}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileUpload">Fichier:</label>
        <input type="file" name="photo" id="fileUpload">
        <input type="submit" name="submit" value="Upload">

</body>



<footer>
  




</footer>
