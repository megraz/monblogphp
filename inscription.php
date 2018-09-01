<?php
// echo "CREATION DU COMPTE";
//test le formulaire l'entree pseudo et mdp.
if(isset($_POST['pseudo']) && isset($_POST['mdp'])) {
    //On récupère les variables
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
    //On encrypte en md5 ou en sha1 (sha256 c'est mieux)
    $crypt = md5($mdp);
    // $crypt2 = sha1($mdp);

   // On vérifie si le dossier utilisateur existe.
    if(!is_dir("utilisateur")) {
    // Sinon on crée un dossier utilisateur.
    mkdir("utilisateur");

   }
    //Crée un fichier pr l'utilisateur dans le dossier et écrit le contenu puis ferme le fichier.
    $new_file = fopen("utilisateur/" . $pseudo. ".txt" , "w");
    //On met son mdp encrypté dedans
    fwrite($new_file, $crypt);
    //on ferme le fichier
    fclose($new_file);
    echo '<p>Vous avez bien été inscrit.e</p>';
    //On lance la session à l'inscription et on y stock le nom d'utilisateur
    session_start();
    $_SESSION['utilisateur'] = $pseudo;
    }
    header("location: index.php");
    echo '<a href="index.php">retour</a>';

    ?>
