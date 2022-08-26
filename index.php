<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        include_once "includes/link.inc.php";
        include_once 'includes/heeds.inc.php';
        include_once 'includes/library.inc.php';
        include_once 'includes/fonts.inc.php';
    ?>
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