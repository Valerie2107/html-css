<?php
    if ( isset($_POST['nom']) ) {
        echo "<h1>Bienvenue ".$_POST['nom']." !</h1>";
		echo "<p>Votre message : ".$_POST['msg']."</p>";
		echo "<p>Votre langue : ".$_POST['langues']."</p>";
		$prefs = $_POST['pref'];
		echo "<p>Vos préférences : ".implode(" ",$prefs)."</p>";
    }
//code php donné par Pierre et qu'on verra après avec Michael
?>