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

            <button class="atuin-btn"><a href="index.php">Main                          </a></button>
        <ul class="menu">
            <button class="atuin-btn"><a  href="index.php?id=   do-while">Do-While       </a></button>
            <button class="atuin-btn"><a  href="index.php?id=   for">For                 </a></button>
            <button class="atuin-btn"><a  href="index.php?id=   foreach">Foreach         </a></button>
            <button class="atuin-btn"><a  href="index.php?id=   functions">Functionh     </a></button>
            <button class="atuin-btn"><a  href="index.php?id=   if">If                   </a></button>
            <button class="atuin-btn"><a  href="index.php?id=   switch">Switch           </a></button>
            <button class="atuin-btn"><a  href="index.php?id=   types">Types             </a></button>
            <button class="atuin-btn"><a  href="index.php?id=   while">While             </a></button>
        </ul>

    </h1></div>
</body>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="vertical-menu">
    <a href="#" class="active">Home</a>
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    <a href="#">Link 4</a>
</div>

</body>
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