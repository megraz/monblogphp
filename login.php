<?php 
    if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
             //On stock les infos du form en variable//
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars(md5($_POST['mdp']));
        //un utilisateur existe si le fichier correspondant existe (on teste dc avec is_file)
        if(is_file('utilisateur/'.$pseudo.'.txt')){
            $contenu = file_get_contents('utilisateur/'.$pseudo.'.txt'); //On récupère le contenu du fichier, le mdp crypté//
            //Si le contenu correspond au mdp entré par l'utilisateur, la connexion est effective//
            if($contenu == $mdp) {
                //on lance la session avec //
                session_start();
                //On stock le nom de l'utilisateur dans celle ci//
                $_SESSION['utilisateur'] = $pseudo;
                echo 'vous êtes bien connecté.e';
                header("location:index.php");
            }else{
                //sinon messages d'erreur
                echo 'l\'utilisateur ou le mdp n\'existe pas';
            }
            
        } else {
            //sinon messages d'erreur
            // echo 'l\'utilisateur ou le mdp n\'existe pas';
            echo 'l\'utilisateur '.$pseudo.' n\'existe pas';
        }
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <style>
        body {
            font-family: 'Comfortaa', cursive;
            background: #dad2e2;
            margin-left: 30px;
            margin-top: 30px;
            margin-bottom: 50px;

        }
    </style>
</head>
<body>
    
</body>
</html>