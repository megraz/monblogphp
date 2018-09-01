<?php

if (isset($_POST['create'])) {
    $titre = htmlspecialchars($_POST['titre']);
    $message = htmlspecialchars($_POST['message']);
    
    if(!is_dir('post')) {
        mkdir('post');
    }



$fichier = fopen('post/' .$titre. ".txt", "w");
fwrite($fichier, $message);
fclose($fichier);
echo '<p>Bravo</p>';
header("location: index.php");

} else {
    echo '<p>formulaire non envoyé</p>';
}

?>