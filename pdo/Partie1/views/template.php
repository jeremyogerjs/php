<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="/php/pdo/Partie1" class="navbar-brand">Home</a>
            <div class="collapse navbar-collapse">
            
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/php/pdo/Partie1" class="nav-link">Exo 1</a>
                    </li>

                    <li class="nav-item">
                        <a href="/php/pdo/Partie1/index.php?action=showType" class="nav-link">Exo 2</a>
                    </li>

                    <li class="nav-item">
                        <a href="/php/pdo/Partie1/index.php?action=listLimit" class="nav-link">Exo 3</a>
                    </li>

                    <li class="nav-item">
                        <a href="/php/pdo/Partie1/index.php?action=listLoyalty" class="nav-link">Exo 4</a>
                    </li>

                    <li class="nav-item">
                        <a href="/php/pdo/Partie1/index.php?action=filterClient" class="nav-link">Exo 5</a>
                    </li>

                    <li class="nav-item">
                        <a href="/php/pdo/Partie1/index.php?action=show" class="nav-link">Exo 6</a>
                    </li>

                    <li class="nav-item">
                        <a href="/php/pdo/Partie1/index.php?action=clientFormat" class="nav-link">Exo 7</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <?= $content; ?>

    <?php $year = date("Y"); ?>
    <footer>
        <p>©<?=$year ?> CHN.NC</p>
    </footer>
</body>

</html>