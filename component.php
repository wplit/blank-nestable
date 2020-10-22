<?php

class ExtraBlank extends OxygenExtraElements {
        
    var $js_added = false;
    
	function name() {
        return 'Blank nestable component';
    }
    
    
    /*function icon() {
        return plugin_dir_url(__FILE__) . 'assets/'.basename(__FILE__, '.php').'.svg';
    }*/
    
    function extras_button_place() {
        return "interactive";
    }
    
    function tag() {
        return array('default' => 'div');
    }
    
    
    
    function init() {
        
        $this->enableNesting();
    
    }

    function render($options, $defaults, $content) {
        
        
        if ($content) {
            echo do_shortcode( $content );
        }
        
    
    }
    
    
    function class_names() {
        return array();
    }


}

new ExtraBlank();
