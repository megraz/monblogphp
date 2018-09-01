<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <!--coller le lien bootstrap-->
    <title>Create Post</title>

    <style>
        body {
            background: #a47f80;
        }
    </style>
</head>

<body class="container">
    <h1>Create Post</h1>
    <form action="process-post.php" method="POST">
        <div class="form-group">
            <label for="title">Title:</label>
            <input id="title" class="form-control" name="title" type="text">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" class="form-control" id="content" rows="10" placeholder="Type here!"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Envoyer">
    </form>
</body>

</html>