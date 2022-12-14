<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/styles/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a type="button" class="cou btn " href="index.php">Accueil</a>
                </li>
                <li class="nav-item active">
                    <a type="button" class="cou btn " href="index.php?action=anim">Animé et dessin animé</a>
                </li>
                <li class="nav-item">
                    <a type="button" class="cou btn" href="index.php?action=auteur">Auteur</a>
                </li>
                <li class="nav-item dropdown">
                    <a type="button" class="cou btn " href="index.php?action=addanim">Ajouter un animé et dessin animé</a>
                </li>
                <li class="nav-item">
                    <a type="button" class="cou btn " href="index.php?action=addauteur">Ajouter un auteur</a>
                </li>
                </ul>
                <a type="button" class="deco btn btn-dark btn-outline-light" href="index.php?action=addauteur">Déconnexion</a>
                </form>
            </div>
        </nav>
        <div>
            <form class="form-inline-block  my-5 my-lg-0 container-fluid"  action="index.php?search">
                <input class="nav  form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                
            </form>
            </div>
        </div>
    </header>

<?php echo $content ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>