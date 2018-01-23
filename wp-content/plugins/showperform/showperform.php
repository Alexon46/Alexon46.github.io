<?php 
/* 
// Plugin Name: Showperform
// Plugin URI: http:none//страница_с_описанием_плагина_и_его_обновлений
// Description: Краткое описание плагина.
// Version: Номер версии плагина, например: 1.0
// Author: ALex sonets
// Author URI: http://страница_автора_плагина
*/
function func_show_tax($content)
{       
    if (is_archive()){
    $data = get_field("дата_премьеры");
    $cost = get_field("стоимость_билета_");
    $taxes= get_the_taxonomies();
        $taxonom =
        "<div id='show_perform'>
        <h5>Дата: $data</h5>
        <h5>Стоимость: $cost</h5>
        <ul>\n\t<li>"
        . implode("</li>\n\t<li>", $taxes ) .
        "</li>\n</ul></div>";
    return $content . $taxonom;
    }
    return $content;
}
add_action('the_content', 'func_show_tax'); 
 ?>