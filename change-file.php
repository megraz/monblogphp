<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier fichier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="css/create.css">

    <style>
        body {
            margin-top:30px;
            background: #ffff32;
        }

        button{
            margin-top: 30px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body class="container">
<?php
/*
On s'occupe ici de la modification du fichier par
le php. On test donc si on est arrivé avec un post
contenant nom de fichier et contenu
*/
if(isset($_POST['fichier']) 
        && isset($_POST['contenu'])) {
    //On stock les infos du post dans des variables
$fileName = filter_input(INPUT_POST, 'fichier', FILTER_SANITIZE_URL);
        $content = filter_input(INPUT_POST, 'contenu', FILTER_SANITIZE_URL);
        
    $fileName = htmlspecialchars($_POST['fichier']);
    $content = htmlspecialchars($_POST['contenu']);
    //On vérifie que le fichier existe bien
    if(is_file('post/'.$fileName)) {
        //On remplace le contenu du fichier comme on avait fait pour la création de celui ci
        $file = fopen('post/'.$fileName, 'w');
        fwrite($file, $content);
        fclose($file);
        //feedback utilisateur
        echo 'vous avez modifié le fichier.';
    }
    
}
/*
Ici, on affiche les informations actuelles du fichier et de son contenu pour le modifier via
un formulaire et un textarea
*/
if(isset($_GET['fichier'])) {
    $file = $_GET['fichier'];
    //On vérifie que le fichier existe bien
    if(is_file('post/'.$file)) {
        //On affiche son titre et on récupère son contenu comme sur l'index.php
        echo '<h2>'.basename($file, ".txt").'</h2>';
        $content = file_get_contents('post/'.$file);
        //On crée un formulaire de type post qui redirigera vers la même page pour traiter
        //la modification du fichier
        echo '<form method="post" action="">';
        //On indique le nom du fichier à modifier dans un input caché (type="hidden")
        echo '<input type="hidden" name="fichier" '
        .'value="'.$file.'">';
        echo '<textarea name="contenu" class="form-control" rows="10" cols="40">'
                .$content.'</textarea>';
        echo '<button class="btn btn-secondary">Modifier</button>';
        echo '</form>';
    }
    
}
?>

<a href="index.php" style="color: #df247c;">Retour</a>


    
</body>
</html>