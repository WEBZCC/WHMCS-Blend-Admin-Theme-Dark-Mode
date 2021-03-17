<?php

// Contributed by brian! (https://whmcs.community/profile/210329-brian/)
// Updated by @DanielMReck at @forzandoArts (https://forzando.art/digital)

function admin_custom_css_hook($vars) 
{
	$currenttemplate = $vars['template'];
	if ($currenttemplate == "blend" ) {
		$head_return = '';
		$head_return = '<link href="/assets/css/admin-dark.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript">		
		$(document).ready(function() {
			$(\'a.logo img\').attr(\'src\', \'/assets/img/logo-dark.gif\');
		})
		</script>';
		return $head_return;
	}
}
add_hook("AdminAreaHeadOutput",1,"admin_custom_css_hook");
