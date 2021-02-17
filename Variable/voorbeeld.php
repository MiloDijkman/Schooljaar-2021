<head>
    <meta charset="UTF-8">
    <title>Van HTML naar PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">

      <?php
        $koptext = "Koptekst";
        $Menu = "Menu items";
        $Inhoud = "Inhoud";
        $Voettekst = "Voettekst";
      ?>

        <header class="items"><?php  echo $koptext; ?></header>
        <nav class="items"><?php  echo $Menu; ?></nav>
        <div class="items contents"><?php echo $Inhoud; ?></div>
        <footer class="items"><?php  echo $Voettekst; ?></footer>
    </div>
</body>
</html>
