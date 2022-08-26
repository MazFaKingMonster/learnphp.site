<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        include_once "includes/link.inc.php";  //cылки на css
        include_once 'includes/heeds.inc.php';
        include_once 'includes/library.inc.php';
    ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="header">
        <a class="main_page" href="index.php">Learn</a>
            <div class="top_menu">
                <ul>
                        <?php
                        include_once 'interface/draw_top_menu.inc.php';
                        draw_top_menu($library);
                        ?>
                </ul>

            </div>
    </div>
    <div class="sidebar">
        <div class="sidebar-menu">
            <ul>
                <?php
                    include 'interface/draw_sidebar_menu.inc.php';
                    draw_sidebar_menu($library, $get_library_section, $get_library_chapter);
                ?>
            </ul>
        </div>
    </div>
        <div class="content">
            <?php
                include_once 'interface/show_content.inc.php';
                show_content($library, $get_library_section,$get_library_chapter,$get_chapter_name);
            ?>
        </div>
    <div class="footer">
        &copy; MazFaKingMonster
    </div>
</body>
</html>