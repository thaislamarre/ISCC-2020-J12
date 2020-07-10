<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="vitrine.css"/>
        <meta charset="utf-8">
        <title>mini-site-routing</title>  
    </head>

 <body>   
    <nav><a href="accueil.php">Accueil</a>
            <a href="page1.php">Page 1</a>
            <a href="page2.php">Page 2</a>
    </nav>

<?php
     if($page=1) 
         echo  "Accueil !";

     if($page=2) 
         echo "Page 2 !";
         
     if($page=3) 
         echo "Page 3 !";   
?>

</body>
</html>

