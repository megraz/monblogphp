<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
<?php
session_start();
if(!isset($_SESSION['utilisateur'])){?>
<header>
<nav class="navbar navbar-light" style="background-color: #ffff00; padding: 30px;">
    <form action="login.php" method="POST" class="formulaire">
    <label for="name">Username</label>
    <input type="text" name="pseudo">
    <label for="pass">Mot de passe</label>
    <input type="password" name="mdp">
    <input type="submit" name="action" value="login" class="btn btn-outline-dark">
    <a href="inscription.html">S'inscrire</a>
    </form>
</nav>
    <section>
     <ul class="menu">
     <li><i class="fa fa-bars fa-2x" aria-hidden="true"></i></li>
     <ul>
                <li ><a href="create.php">Nouvel article</a>
                <li ><a href="index.php">Index</a>
            </ul>
    </ul>
</section>
    
</header>
<?php
}else {
        echo '<div class="hello">Bonjour '.' '.$_SESSION['utilisateur'];
        echo'<form action="logout.php" method="POST"><button class="btn btn-success">Se déconnecter</button></form></div>';
        echo'<section>
        <ul class="menu">
            <li><i class="fa fa-bars fa-2x" aria-hidden="true"></i></li>
               <ul>
                   <li ><a href="create.php">Nouvel article</a>
                   <li ><a href="index.php">Index</a>
               </ul>
       </ul>
       </section>';
    }

?>
       <?php
 /*
 echo "<form action='inscription.php' method='POST' name='inscription'>
    <fieldset>
    <p>Entre votre pseudo : <input type='text' name='pseudo'></p>
    <p>Entre votre Mot de passe : <input type='password' name='mdp'></p>
    <input type='submit' value='Inscription'>
    <input type='submit' value='Connexion'>
    </fieldset>
    </form>"; */
    ?>
</body>

</html>