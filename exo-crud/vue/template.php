<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>students-exo</title>
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  </head>
  <body>
    <nav class="navtop">
      <div>
        <h1>Website Title</h1>
          <a href="index.php"><i class="fas fa-home"></i>Home</a>
          <a href="index.php?action=list"><i class="fas fa-address-book"></i>Contacts</a>
      </div>
    </nav>
    
    <?= $content ?>

        <?php $year = date("Y"); ?>
    <footer>
        <p>©<?=$year ?> MONSITE.NC</p>
    </footer>
    </body>
</html>