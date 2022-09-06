<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="jumbotron">
            <a type="button" class="btn btn-dark btn-outline-light" href="index.php">Accueil</a>
            <a type="button" class="btn btn-light" href="index.php?action=anim">Animé et dessin animé</a>
            <a type="button" class="btn btn-light" href="index.php?action=auteur">Auteur</a>
            <a type="button" class="btn btn-warning" href="index.php?action=addanim">Ajouter un animé et dessin animé</a>
            <a type="button" class="btn btn-warning" href="index.php?action=addauteur">Ajouter un auteur</a>
            <a type="button" class="btn btn-warning" href="index.php?action=addauteur">Déconnexion</a>
            <hr class="my-4">
            <form class="form-inline my-2 my-lg-0" action="index.php?search">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </header>

<?php echo $content ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>