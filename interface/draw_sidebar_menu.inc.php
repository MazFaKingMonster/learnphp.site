<?php
function draw_sidebar_menu ($library, $get_library_section,$get_library_chapter){
    foreach ($library as $library_section=> $library_chapter){
        if($library_section == $get_library_section){
            foreach ($library_chapter as $chapter_name => $chapter_department){
                echo "<br><p style='margin-left: 15% '>
                            <a 
                            href=' index.php?library_section=$library_section
                                  &library_chapter=$chapter_name'> $chapter_name</a>
                        </p>";

                if($chapter_name == $get_library_chapter){
                    foreach ($chapter_department as $paragraph => $page){
                        echo "<br><p style='margin-left: 30% '>
                            <a
                            href=' index.php?library_section=$library_section
                                  &library_chapter=$chapter_name
                                  &chapter_name=$paragraph'> $paragraph</a>
                        </p>";
                    }
                }
            }
        }
    }
};
?>