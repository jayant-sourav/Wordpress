

<? php
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Primary Navigation' ));
  register_nav_menu('footer-menu',__( 'Footer Menu 1' ));
   register_nav_menu('footer-menu-2',__( 'Footer Menu 2' ));
}

?>
