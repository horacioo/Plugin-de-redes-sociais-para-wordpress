<?php
add_action('widgets_init', 'registrar_widget');

function registrar_widget() {
    register_widget('social_media_Widget');
}

class social_media_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
                'Redes_Sociais', // Identificação
                'Redes Sociais', // Nome
                array('description' => 'Exibindo dados de redes sociais') // Argumentos
        );
    }

    
    
    
    
    public function widget($args, $instance) {
        require_once 'includes/redes_links.php';
        if (!empty($instance['titulo'])) {echo $instance['titulo'];}
        if (!empty($instance['tamanho'])) {$instance['tamanho'];}
      
        info($tamanho = $instance['tamanho']);
        
        /*
        echo $args['before_widget'];
        if (!empty($instance['titulo'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['titulo']) . $args['after_title'];
        }
        if (!empty($instance['link']) && !empty($instance['titulo_link'])) {
            printf('<a href="%s" target="_blank">%s</a>', $instance['link'], $instance['titulo_link']);
        }
        echo $args['after_widget'];
        */
    }

    
    
    
    
    
    
    
    
    
        
    
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['titulo'] = (!empty($new_instance['titulo']) ) ? strip_tags($new_instance['titulo'] ) : '';
        $instance['tamanho'] = (!empty($new_instance['tamanho']) ) ? strip_tags($new_instance['tamanho'] ) : '';
        return $instance;
    }

    
    
    
    
    public function form($instance) {
        $titulo = isset($instance['titulo']) ? $instance['titulo'] : '';
        $tamanho = isset($instance['tamanho']) ? $instance['tamanho'] : '';
        ?>
       <p>
            <label for="<?= $this->get_field_id('titulo'); ?>">Título</label>
            <input class="widefat"
                   id="<?= $this->get_field_id('titulo'); ?>" name="<?= $this->get_field_name('titulo'); ?>"
                   type="text" value="<?= esc_attr($titulo); ?>"
                   />
        </p>
        <p>
            <br><label for="<?= $this->get_field_name('tamanho'); ?>">Tamanho da miniatura</label> 
            <br><input type="range" min="20" max="200" value="<?= esc_attr($tamanho); ?>" name="<?= $this->get_field_name('tamanho'); ?>"> 
        </p>
        
        <?php
        // require('page/widget_form.php');
    }

}
