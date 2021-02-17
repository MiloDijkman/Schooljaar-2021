<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Van HTML naar PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">

      <?php
        include "variabelen.php";
        $koptext = "Koptekst"
        $Menu = "Menu items"
        $Inhoud = "Inhoud"
        $Voettekst = "Voettekst"
      ?>

        <header class="items"><?php  echo "koptext"; ?></header>
        <nav class="items">Menu items</nav>
        <div class="items contents">Inhoud</div>
        <footer class="items">Voettekst</footer>
    </div>
</body>
</html>
