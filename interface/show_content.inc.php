<?php
function show_content($sections_menu,$get_sn,$get_ns,$get_ls){
    foreach ($sections_menu as $k1 => $v1){
        foreach ($v1 as $k2 => $v2){
            foreach ($v2 as $k3 => $v3){
                if($get_sn == "$k1" && $get_ns == "$k2" && $get_ls == "$k3"){
                    include "library/$get_sn/$get_ns/$get_ls.inc.php";
                    continue;
                }
                if ($get_sn == "$k1" && $get_ns == "$k2" && !$get_ls == "$k3"){
                    include "library/$get_sn/$get_ns/$k3.inc.php";
                    continue;
                }
                if ($get_sn == "$k1" && !$get_ns == "$k2" && !$get_ls == "$k3"){
                    include "library/$get_sn/$k2/$k3.inc.php";
                    continue;
                }
                if (!$get_sn == "$k1" && !$get_ns == "$k2" && !$get_ls == "$k3"){
                    include_once "pages/hello.inc.php";
                }
            }
        }
    }

};
?>
