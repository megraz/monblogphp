<?php
$array = scandir('post');
$files = [];
foreach ($array as $file) {
    if ($file === '.') {
        continue;
    }
    if ($file === '..') {
        continue;
    }
    $files[] = $file;
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Awesome Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">

</head>
<body style="background: #e1dbe7"> <!--ou <body class="container-fluid">-->
    <?php 
include("header.php");
    ?>
<header>
    <!--<h1 id="title"class="text-center">My Awesome Blog</h1>-->
    <!--<nav><a href="create.html">New Post</a></nav>-->
    <h1 id="title">My Awesome Blog</h1>
</header>
    <!-- <nav><a href="create.php">New Post</a></nav> -->
    <div class="container">
    <div class="row">
    <?php 
    $files = scandir("post");
    foreach ($files as $file) { 
        if (is_dir($file)) {
            continue;
        }
        ?>
    <article class="col-sm-6">
        <h2><?php echo basename($file, '.txt'); ?></h2>
        <p><?php echo file_get_contents('post/' . $file); ?></p>
        <form action="delete-post.php" method="POST">
            <input type="hidden" name="filename" value="<?php echo $file; ?>">
            <input type="submit" value="delete" class="btn btn-danger">
        </form>
        <?php echo '<a href="change-file.php?fichier='.$file.'"><input type="submit" value="modifier" class="btn btn-outline-warning"></a>';?>
        <!-- <form  method="POST" action="create.php">
        <input type="hidden" name="filename" value="<?php echo $file; ?>">
        <input type="submit" value="edit">
        </form>  -->
    </article>
    <?php } ?>
    </div>
    </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>