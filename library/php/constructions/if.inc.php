<?php
//if (если)
// Эта конструкция выполняет код в {}  <-- вот таких скобках!
// Если условие () <-- вот в таких скобках верно!
// Условие приводится в логическому типу данных true или false!
// В конце всех частей "if" нужна точка с запятой --> ;
//Переменные для примера

$var_a = 10;    // <-- С ними можно баловаться)
$var_b = 5;    // <-- Ваще пох что в нее пихать!
// Прям как твоя бывшая )))
// Пример if
if ($var_a  < 5){ // Это условие не истинно, "if" проигнорирует код ниже!

    // Если условие этого "если" верно - выполнит код ниже!
    echo 'Переменная а истинна!'; // <-- Пиздёж!
    // Тут может быть много или ОЧЕНЬ много кода
    //Главное не проебатся!

    //Если условие этого "если" не верно - проигнорирует его и пойдет ниже искать чем заняться!
    // Пока не упрётся в конец этого пиздеца!

}elseif ($var_b  > 5){ // <-- Это первое верное условие, "if" выполнит код ниже!

    // Эта часть звучит как "иначе, если..." Таких частей может быть сколько угодно много!
    // Оно надо шо-бы проверить еще какое-нить из возможных "если"
    // Ваще пох какое условие... Реально можно проверять что угодно!
    // Но!!! Когда if найдёт первое правильное условие он выполнит его...
    // Забив хуй на остальные!!!
    // И перейдет к концу "if" творить магию дальше!
    //Главное не проебатся!

    echo "Переменная б истинна"; // <--  Не пиздёж!
    // Выполнит этот код и забьет хуй на остальные даже если они тоже верны!

}elseif($var_a == $var_b){  // Это условие тоже истинно, но из-за того что "if" уже нашел верное
    // Он забил хуй на это
    // А я так старался...
    // Бессердечная сука этот "if"...

    echo  "Переменные а и б равны";// <--  Тоже не пиздёж!
    // На это было забито... Пиздуем к концу...

}elseif ($var_a === $var_b){    // В Круглые скобки можно записывать пиздец любой сложности
    // Когда решишь проверять переменные или результаты работы функций
    // Убедись что проверяемые данные написаны перед "if"
    // (Где нить выше "if", похуй насколько высоко)

    echo "Переменные а и б равны и имеют одинаковый тип данных";// <-- Реально, отвечаю!
    // На этот код тоже было забито... Годы работы в жопу!

}else { // <-- Это звучит как "иначе"...
    // Нужен если ни одно из условий не было истинно!
    // Можно не писать если ничего делать и не надо в таком случае!
    // Просто не повезло, не твой день...
    // Не имеет условий... Они ему и не нужны...
    // Считай это аварийным выходом в окно с 15-го этажа детской психбольницы!

    echo  "Caravan Palace - Lone Digger - Классная песня"; // <-- Реально охуенная!
}
; // <-- КОНЕЦ этого пиздеца сверху!

// Отработали? Хуярим дальше)
?>