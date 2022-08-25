<?php
$sections_menu = array(
    'html' => array(
        'tags'=>array(
            'tag'=>'tag',
        ),
        'attributes'=>array(
            'attribute'=>'attribute',
        ),
        'forms'=>array(
            'form'=>'form',
        ),
        'styles'=>array(
            'style'=>'style',
        ),
    ),
    'css' => array(
        'text'=>array(
            'text'=>'text',
        ),
        'blocks'=>array(
            'block'=>'block',
        ),
    ),
    'js' => array(
        'functions-js'=>array(
            'function'=>'function',
        ),
        'cycles-js'=>array(
            'cycle'=>'cycle',
        ),
    ),
    'php' => array(
        'functions-php'=>array(
            'function'=>'function',
        ),
        'cycles-php'=> array(
            'for'=>'for',
            'while'=>'while',
            'do-while'=>'do-while',
            'switch'=>'switch'
        ),
        'types'=>array(
            'type'=>'type',
        ),
        'constructions'=>array(
            'construction'=>'construction',
        ),
    ),
    'mysql' => array(
        'tables'=>array(
            'table'=>'table',
        ),
        'data'=>array(
            'data'=>'data',
        ),
    ),
);

function draw_menu ($sections_menu, $get_sn,$get_ns){

  foreach ($sections_menu as $name => $s_name){
      echo "<p><a href='index.php?sec_name=$name'>$name</a></p>";

        if($name == $get_sn){
          foreach ($s_name as $name_section => $link_section){
              echo "<br><p style='margin-left: 15% '>
                            <a 
                            href=' index.php?sec_name=$name
                                  &name_section=$name_section'> $name_section</a>
                        </p>";

              if($name_section == $get_ns){
                  foreach ($link_section as $item => $value){
                      echo "<br><p style='margin-left: 30% '>
                            <a
                            href=' index.php?sec_name=$name
                                  &name_section=$name_section
                                  &link_section=$item'> $item</a>
                        </p>";
                  }
              }
          }
      }
  }
};
?>