<?php
add_action('add_meta_boxes', 'RedesSociaisx');
function RedesSociaisx() {
    add_meta_box(
            'link', //ID
            'Colocar aqui o endereço da sua rede social', //Título
            'RedesSociais', //callback
            array('redes_Sociais'), //Post Type
            'normal', //Posição
            'high' //Prioridade
    );
}

function RedesSociais() {
    global $post;
    $Rede = get_post_meta($post->ID, "Rede_Social")
    ?>
    <input type="text" style="width: 100%" value="<?php echo $Rede[0]; ?>" name="Rede_Social"> 
    <?php
}


add_action('save_post', 'salva_rede');
function salva_rede() {
    global $post;
    update_post_meta($post->ID, 'Rede_Social', sanitize_text_field($_POST['Rede_Social']));
}
