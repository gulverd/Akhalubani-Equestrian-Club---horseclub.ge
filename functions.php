<?php

    
    require_once('wp_bootstrap_navwalker.php');
    @ini_set( 'upload_max_size' , '300M');
    @ini_set( 'post_max_size', '300M');
    @ini_set( 'max_execution_time', '300' );
    @ini_set('upload_max_filesize' , '32M');


    add_theme_support('menus');


    function language_menu(){
        echo '
        <ul class="nav navbar-nav navbar-right">';

            
            $languages = icl_get_languages('skip_missing=0&orderby=code');
            if(!empty($languages)){
                    foreach($languages as $l){   
                        echo ("<li><a href='".$l['url']."'>" . strtoupper($l['language_code']) ."</a></li>" );
                    }
            }   
        echo '
        </ul>
        ';
    }   

?>