<?php

function bp_menu_administrador() {

    add_menu_page(BP_NOMBRE,BP_NOMBRE,'manage_options',BP_RUTA . '/admin/configuration.php','',WP_PLUGIN_URL . '/banco-proyectos/admin/images/banco-proyecto.svg');

}
add_action( 'admin_menu', 'bp_menu_administrador' );

?>