<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Fucking PHP</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="header"><h1>Изучаю PHP</h1></div>
<div class="sidebar">
    <p><a href="index.php">Главная</a></p>
    <p><a href="index.php?id=   error">Error Reporting</a></p>
    <p><a href="index.php?id=   do-while">Do-While</a></p>
    <p><a href="index.php?id=   for">For</a></p>
    <p><a href="index.php?id=   foreach">Foreach</a></p>
    <p><a href="index.php?id=   functions">Functions</a></p>
    <p><a href="index.php?id=   if">If</a></p>
    <p><a href="index.php?id=   switch">Switch</a></p>
    <p><a href="index.php?id=   types">Types</a></p>
    <p><a href="index.php?id=   while">While</a></p>
</div>
<div class="content">

    <?php

    $id = strtolower(strip_tags(trim($_GET['id'])));

    switch($id){
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
        default:
            include 'learning_fucking_php/fucking.php';
    }
    ?>

</div>
<div class="footer">&copy; MazFaKingMonster</div>
</body>
</html>