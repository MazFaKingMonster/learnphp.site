
<?php
//"JUST DO IT!!!"

  // Этот  цикл сначала исполняет код в части "do"
    // А потом проверяет условие...
      // Если условие верно - исполняет "do" еще раз...
        // А потом опять проверяет условие...

do{   // Сначала делаем, потом думаем!

  echo "<br>Сначала делаем: $i";

    $i++;

      echo " Потом думаем!";

}

while ($i <= 0);   // Условие для выполнение еще одного "do"
              // Оно неверно...  Да я это специально!
                // А значит "do" сделает что должен, пойдет подумает и не станет продолжать.
?>