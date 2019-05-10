<?php

$random_size = rand(3, 5);

$bruce_lee_sharks = [];
for ($eile = 1; $eile <= $random_size; $eile++) {
    $row = [];
    for ($stulpelis = 1; $stulpelis <= $random_size; $stulpelis++) {
        $row [] = rand(0, 2);
    }
    $bruce_lee_sharks[] = $row;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bruce Lee SHARKS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <header class="index-section">
            <nav class="index-nav">
                <a class="index-hover" href="/pz2apica.php">PZ2A Bruce Lee SHARKS pica</a>
                <a class="index-hover" href="/about.php">About Bruce Lee SHARKS</a>
                <a class="index-hover" href="/index.php">Iš naujo į piceriją</a>
            </nav>
        </header>
        <h1 class="index-h1">Bruce Lee SHARKS</h1>
        <?php foreach ($bruce_lee_sharks as $row_key => $row_value): ?>
            <section class="index-section">
                <?php foreach ($row_value as $column_key => $column): ?>
                    <?php if ($column == 0): ?>
                        <div class="index-flex1 index-image-1"></div>
                    <?php elseif ($column == 1): ?>
                        <div class="index-flex1 index-image-2"></div>
                    <?php elseif ($column == 2): ?>
                        <div class="index-flex1 index-image-3"></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </section>
        <?php endforeach; ?>
    </body>
</html>