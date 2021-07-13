<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
</head>

<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Accueil
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bibelot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Truc pas cher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nous contacter</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Que désirez-vous ?">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Recherche</button>
                </form>
            </div>
        </div>
    </nav>

</header>

<body>

    <?php

    include("Application.php");

    Application::demarrer();

    ?>
</body>

</html>