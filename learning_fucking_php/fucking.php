<?php


// Подключение файлов 


#declare (strict_types=1); 	// Эта штука включает строгую типизацию!
							// т.е. типы не будет приводится как хотят
							// а значит надо писать чистый код!

	#Типы данных

include "fucking_types.inc.php";
    
    #Конструкции

#if
include "fucking_if.inc.php";

#switch
include "fucking_switch.inc.php";

	#Циклы

#for

include "fucking_for.inc.php";

#while

include "fucking_while.inc.php";

#do-while

include "fucking_do-while.inc.php";

#foreach
include  "fucking_foreach.inc.php";

	# Функции

include "fucking_functions.inc.php";

// Поговорим о безопасном кодинге!

// У ПхП есть встроенный обработчик ошибок!
// Он срабатывает когда в коде происходит одна из стандартных ошибок!

// Но можно сделать и собственный обработчик!
?>
<!--<form action="index.php" method="post">-->
<!-- <p>Ваше имя: <input type="text" name="name" /></p>-->
<!-- <p>Ваш возраст: <input type="text" name="age" /></p>-->
<!-- <p><input type="submit" /></p>-->
<!--</form>-->
<!---->
<!--Здравствуйте, --><?php //echo ($_POST['name']); ?><!--.-->
<!--Вам --><?php //echo (int)$_POST['age']; ?><!-- лет.-->




?>