<?php
    function trungcap_plugin_activation(){
        //khai bao plugin can cai dat
        $plugins =array(
            array(
                'name' => 'Readux Framework',
                'slug' => 'readux-farmework',
                'required' => true
            )
        );
        //thiet lap tgm
        $configs = array(
                'menu' => 'tp_plugin_install',
                'has_notice' => true,
                'dismissable' => false,
                'is_automatic' => true
        );
        tgmpa( $plugins, $configs );
    }
    add_action('tgmpa_register','trungcap_plugin_activation');
?>

