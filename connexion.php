<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="vitrine.css"/>
        <meta charset="utf-8">
        <title>mini-site-routing</title>  
    </head>

<body>
<form>
        <input name="login" type="text"
        value="login" size="40"/>
        <input name="password" type="text"
        value="password" size="40"/>
        <input type="submit" value="POST" link href="securite.php">       
</form>

<?php
require("./chemin/vers/mini-site-routing.php");
?>