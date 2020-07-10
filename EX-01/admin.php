<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html>

 

<head>
    <header>
    
</header>
</head>
<body>

<title>ADMIN</title>
<h1> Admin</h1>
<?php
session_start();

 
if($_SESSION['key'] >= 1)
{
 
echo ('admin.php');
 
}
?>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $file_name = strlen(<4)
      $file_size = max_file_uploads(20M)
      $file_type = array("jpeg","jpg","png");

      
      echo ($_FILES)
      file_put_contents('http://localhost/ISCC/Jour-09/admin.php')
      move_uploaded_file($fichier, $_SESSION["image"]);
   }
?>
</body>



<footer>
  




</footer>
