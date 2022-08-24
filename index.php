<html lang="ru">
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
    <?php
    include 'draw_menu.inc.php';
    switch($menu){
        case 'error':
            include 'my_error_reporting.php';
            break;
        case 'do-while':
            include 'learning_fucking_php/fucking_do-while.inc.php';
            break;
        case 'for':
            include 'learning_fucking_php/fucking_for.inc.php';
            break;
        case 'foreach':
            include 'learning_fucking_php/fucking_foreach.inc.php';
            break;
        case 'functions':
            include 'learning_fucking_php/fucking_functions.inc.php';
            break;
        case 'if':
            include 'learning_fucking_php/fucking_if.inc.php';
            break;
        case 'switch':
            include 'learning_fucking_php/fucking_switch.inc.php';
            break;
        case 'types':
            include 'learning_fucking_php/fucking_types.inc.php';
            break;
        case 'while':
            include 'learning_fucking_php/fucking_while.inc.php';
            break;
//                          default:
//                              include 'learning_fucking_php/fucking.php';
    }
    ?>
</div>
<div class="content">

    <?php

    $id = strtolower(strip_tags(trim($_GET['id'])));


    ?>

</div>
<div class="footer">&copy; MazFaKingMonster</div>
</body>
</html>