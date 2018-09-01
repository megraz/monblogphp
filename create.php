<!--le php est lu en premier par le navigateur dc le mettre en haut-->
<?php
include("header.php");
// verification si l'utilisateur est bien passé par la page pour se connecter
if(!isset($_SESSION['utilisateur'])) 
{
    echo '<center><font size="5"><b>Vous devez vous connecter pour acceder à la page</center></font><br/>';
 
} 
else {

$title="";
// on declare la variable titre vide du formulaire idem pr contenu //
$content="";
// isset = test le formulaire ; is_dir= verifie si la variable correspond à isset
if (isset($_POST['filename'])){ //on utilise isset pr vérifier que le fichier existe//

    $title = htmlspecialchars(basename($_POST['filename'], ".txt")); //on récupère les données titre du fichier et on rajoute basename([], ".txt") pr supp le txt qui s'ecrit en plus//
    $content = htmlspecialchars(file_get_contents('post/'.$_POST['filename'])); // on recup le contenu et on y accède//
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

    <link rel="stylesheet" href="css/create.css">
    <title>New article</title>
</head>
<body class="container">
<?php include("header2.php"); ?>
    <!--<h1>Nouvel article</h1>-->
    <?php
    if (isset($_SESSION['nom'])){ ;?>
    <form action="edit.php" method="POST">
        <!--pr modifier le fichier qui ne va pas en creer un autre on crée une pg edit.php-->
    <div class="form-group">
    <p><input type="text" name="titre" id="titre" value="<?php echo $title;?>" placeholder="titre"/></p>
        <!--on remplace la valeur de l'input par une balise php pr afficher la variable qu'on a déclaré pr le titre-->
        <input type="hidden" name="previoustitle" value="<?php echo $title;?>"/>
        <!--on crée un bouton hidden pr recup la valeur du titre cf ac pg edit.php-->
        </div>
        <div class="form-group">
        <p><textarea name="message" ><?php echo $content; ?></textarea></p>
        <input type="submit" class="btn btn-info" value="submit" name="create" id="submit" />
        </div>
    </form>
        <?php } //else {
        //echo '<p class="connection">Connection</p><p class="inscrivezvous">ou <a href="inscription.html">inscrivez-vous</a>.</p>';
        //}
        
    }
        
        
        
        ?>
</body>
</html>