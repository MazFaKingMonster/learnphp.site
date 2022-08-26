<html lang="eu">
    <head>
        <meta charset="UTF-8">
        <?php
            include "link.html";  //cылки на css
            include_once 'heeds.inc.php';
            include_once 'structure.inc.php';
        ?>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>

<body>
    <div class="header">


        <a class="atuiin-btn" href="index.php">Learn</a>

            <div class="meni">
                <?php
                include_once 'draw_top_menu.inc.php';
                draw_top_menu($sections_menu);
                ?>
            </div>


    </h1></div>
    <h3>

        <div class="navigation">
            <div class="userBx">
                <div class="imgBx">
                    <img src="user.jpg">
                </div>
                <p class="username">Max saq</p>
            </div>
            <div class="menuToggle"></div>
                <ul class="menu">
                    <li><a href="#"><ion-icon name="person-outline"></ion-icon> My Profile</a></li>
                    <li><a href="#"><ion-icon name="person-outline"></ion-icon> Messager</a></li>
                    <li><a href="#"><ion-icon name="notifications-outline"></ion-icon> Notification</a></li>
                    <li><a href="#"><ion-icon name="settings-outline"></ion-icon> Settings</a></li>
                    <li><a href="#"><ion-icon name="help-outline"></ion-icon> Help & Suport</a></li>
                    <li><a href="#"><ion-icon name="log-out-outline"></ion-icon> Logout</a></li>
                </ul>
            </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            let menuToggle = document.querySelector('.menuToggle');
            let navigation = document.querySelector('.navigation');
            menuToggle.onclick = function () {
                navigation.classList.toggle('active')
            }
        </script>

    </h3>


    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>



<div class="vertical-menu">

<?php
include 'draw_sidebar_menu.inc.php';
draw_sidebar_menu($sections_menu, $get_sn, $get_ns);
?>



</div>

    <div class="content">
        <?php
        include_once 'show_content.inc.php';
        show_content($sections_menu, $get_sn,$get_ns,$get_ls);
        ?>

    </div>

    <div class="footer">&copy; MazFaKingMonster</div>

    </body>
</html>