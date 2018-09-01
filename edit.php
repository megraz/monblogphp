<!--je copie colle create-file.php sauf if is_diret je crée une variable $previous_title et supp son contenu ac unlink-->
<?php 
if (isset($_POST['create'])) {
    $titre = htmlspecialchars($_POST ["titre"]);
    $message = htmlspecialchars($_POST ["message"]); 
    $previoustitle= htmlspecialchars($_POST["previoustitle"]); 

    unlink("post/" .$previoustitle. ".txt");

$fichier = fopen('post/' .$titre. ".txt", "w");
fwrite($fichier, $message);
fclose($fichier);

header("location: index.php");

} else {
    echo '<p>formulaire non envoyé</p>';
}

?>
