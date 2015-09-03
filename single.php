<?php
	if ( is_singular( array ('treatments' , 'cures' , 'massages' , 'arrangements', 'voetverzorging', 'handverzorging', 'epilatie' ) ) ) {
		include (get_template_directory() . '/single-tpl1.php');
	} else {
		include (get_template_directory() . '/single-default.php');
	}
?>
