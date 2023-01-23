<?php
   if (isset($_POST['nom']) && isset($_POST['pass'])) {    #--> Si la variable avec le "nom" et le "pass" est correct (donc TRUE)
      echo "<h1>Bienvenue ".$_POST['nom'].", sur le site !</h1>";   # --> alors ma variable me renvoie le message "bienvenue "nom" sur le site!

   }
?>
