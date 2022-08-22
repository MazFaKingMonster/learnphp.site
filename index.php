<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Fucking PHP</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
</head>

<body>
<div class="header"><h1>
        <style type="text/css">
            .menu {
                margin: 0;
                padding: 0;
                list-style-type: none;
            }
            .menu li {
                margin: 0 10px 0 0;
                padding: 0;
                display: inline-block;
            }
        </style>

        <ul class="menu">
            <li><a class="atuin-btn" href="index.php">Main                          </a></li>
            <li><a class="atuin-btn" href="index.php?id=   do-while">Do-While       </a></li>
            <li><a class="atuin-btn" href="index.php?id=   for">For                 </a></li>
            <li><a class="atuin-btn" href="index.php?id=   foreach">Foreach         </a></li>
            <li><a class="atuin-btn" href="index.php?id=   functions">Functionh     </a></li>
            <li><a class="atuin-btn" href="index.php?id=   if">If                   </a></li>
            <li><a class="atuin-btn" href="index.php?id=   switch">Switch           </a></li>
            <li><a class="atuin-btn" href="index.php?id=   types">Types             </a></li>
            <li><a class="atuin-btn" href="index.php?id=   while">While             </a></li>
        </ul>
    </h1></div>
<div class="content">

    <?php

    $id = strtolower(strip_tags(trim($_GET['id'])));

    switch($id){
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