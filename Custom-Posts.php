<?php

//registrar_Redes_Sociais();
add_action( 'init', 'registrar_Redes_Sociais' );
function registrar_Redes_Sociais() {

  $descritivos = array(
    'name' => 'Redes Sociais',
    'singular_name' => 'Redes Sociais',
    'add_new' => 'Adicionar Novo rede social',
    'add_new_item' => 'Adicionar rede social',
    'edit_item' => 'Editar rede social',
    'new_item' => 'Novo rede social',
    'view_item' => 'Ver rede social',
    'search_items' => 'Procurar rede social',
    'not_found' =>  'Nenhuma rede social encontrado',
    'not_found_in_trash' => 'Nenhuma rede social na Lixeira',
    'parent_item_colon' => '',
    'menu_name' => 'Redes Sociais'
  );

  $args = array(
    'labels' => $descritivos,  //Insere o Array de labels dentro do argumento de labels
    'public' => true,  //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
    'hierarchical' => false,  //Se o Custom Post pode ser hierarquico como as páginas
    'menu_position' => 3,  //Posição do menu que será exibido
    'supports' => array('title','thumbnail','excerpt') //'supports' => array('title','thumbnail','excerpt', 'revisions','editor','page-attributes') 
    );

  register_post_type( 'redes_Sociais' ,$args );
  flush_rewrite_rules();


}
