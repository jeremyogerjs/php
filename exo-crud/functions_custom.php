<?php

function pdo_connect_mysql() {
  $serverName = "localhost";
  $userName = "root";
  $password = "";
  try {
    $conn = new PDO("mysql:host=$serverName;dbname=mon_test",$userName,$password);
   
    //set the PDO error mode to exeption
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected !";
    return $conn;
  } catch (PDOException $e) {
    echo "Connection failed:" . $e -> getMessage();
  }
  return $conn;
};

/**
 * function permettant de printer la template de header
 */
function template_header($title) {
  echo <<<EOT
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>$title</title>
      <link href="style.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
      <nav class="navtop">
        <div>
          <h1>Website Title</h1>
              <a href="index.php"><i class="fas fa-home"></i>Home</a>
          <a href="read.php"><i class="fas fa-address-book"></i>Contacts</a>
        </div>
      </nav>
  EOT;
}


/**
 * function permettant de printer la template de footer
 */
function template_footer() {
  $year = date("Y");
  echo <<<EOT
        <footer>
          <p>©$year MONSITE.NC</p>
        </footer>
      </body>
  </html>
  EOT;
}
?>