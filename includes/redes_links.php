<?php

function info($tamanho='') {
    LevantaDados($tamanho);
}

function LevantaDados($tamanho='') {
    if(!isset($tamanho)){$tamanho=30;}else{$tamanho=$tamanho;}
    
    echo"<div class='Redes_Sociais_P1'>";
    $args = array('post_type' => 'redes_Sociais', 'post_parent' => "0", "posts_per_page" => "10", 'orderby' => 'menu_order');
    $my_posts = get_posts($args);
    foreach ($my_posts as $post): setup_postdata($post);
        $id = $post->ID;
        $imagem = get_the_post_thumbnail($id, array($tamanho, $tamanho));
        $x = get_post_meta($id);
        $link = $x['Rede_Social']['0'];
        echo "<a href='" . $link . "'rel='nofollow' target='_blank'>" . $imagem . "</a>";
    endforeach;
    echo"</div>";
}