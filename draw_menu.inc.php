<?php
$sec_name = strtolower(strip_tags(trim($_GET['sec_name'])));
$get_ns = strtolower(strip_tags(trim($_GET['name_section'])));
$sections_menu = array(
    'html' => array(
        'tags'=>'#',
        'attributes'=>'#',
        'form'=>'#',
        'styles'=>'#',

    ),
    'css' => array(
        'text'=>'#',
        'blocks'=>'#',
    ),
    'js' => array(
        'functions'=>'#',
        'cycles'=>'#',
    ),
    'php' => array(
        'functions'=>'#',
        'cycles'=> array(
            'for'=>'for',
            'while'=>'while',
            'do-while'=>'do_while',
            'switch'=>'switch'
        ),
        'types'=>'#',
        'constr'=>'#',
    ),
    'mysql' => array(
        'tables'=>'#',
        'data'=>'#',
    ),
);

function draw_menu ($sections_menu, $sec_name,$get_ns){
  foreach ($sections_menu as $name => $s_name){
      echo "<p><a class='atuin-btn' href='index.php?sec_name=$name'>$name</a></p>";
        if($name == $sec_name){
          foreach ($s_name as $name_section => $link_section){
              echo "<br><p style='margin-left: 15% '>
                            <a class='atuin-btn' 
                            href=' index.php?sec_name=$name
                                  &name_section=$name_section'> $name_section</a>
                        </p>";
              if($name_section == $get_ns){
                  foreach ($link_section as $item => $value){
                      echo "<br><p style='margin-left: 25% '>
                            <a class='atuin-btn' 
                            href=' index.php?sec_name=$name
                                  &name_section=$name_section
                                  &link_section=$item'> $item</a>
                        </p>";
                  }
                  return $var_for_switch = strtolower(strip_tags(trim($_GET['link_section'])));
              }
          }
      }
  }
};
$menu = draw_menu($sections_menu, $sec_name,$get_ns);
?>