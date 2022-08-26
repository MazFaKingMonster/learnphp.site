<?php
function draw_top_menu ($sections_menu){

  foreach ($sections_menu as $name => $s_name){
      echo "<p><a href='index.php?sec_name=$name'>$name</a></p>";
      }
};
?>