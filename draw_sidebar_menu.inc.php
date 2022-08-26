<?php
function draw_sidebar_menu ($sections_menu, $get_sn,$get_ns){
    foreach ($sections_menu as $name=> $s_name1){
        if($name == $get_sn){
            foreach ($s_name1 as $name_section => $link_section){
                echo "<br><p >
                            <a 
                            href=' index.php?sec_name=$name
                                  &name_section=$name_section'> $name_section</a>
                        </p>";

                if($name_section == $get_ns){
                    foreach ($link_section as $item => $value){
                        echo "<br><p style='margin-left: 10% '>
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