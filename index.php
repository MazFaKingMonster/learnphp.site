<html lang="ru">
<?php
    include_once 'includes/heeds.inc.php';
    include_once 'includes/library.inc.php';
    include_once 'interface/draw_top_menu.inc.php';
    include_once 'interface/draw_sidebar_menu.inc.php';
    include_once 'interface/show_content.inc.php';
?>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Bebas+Neue&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <title>Fucking PHP</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="header"><h1>Изучаю PHP</h1></div>
<div class="sidebar">
    <a href="index.php">Learn</a>
    <?php

    draw_top_menu($library);
    draw_sidebar_menu($library, $get_library_section,$get_library_chapter);
    ?>
</div>
<div class="content">

    <?php

    show_content($library, $get_library_section,$get_library_chapter,$get_chapter_name);
    ?>

</div>
<div class="footer">&copy; MazFaKingMonster</div>
</body>
</html>