<div class="col2-b2">
	<!--
<div class="img">
		... img ...
	</div>
-->
	<div class="form1">
		<h2>Maak een afspraak</h2>
		<?php gravity_form(
			4, 
			$display_title = false, 
			$display_description = true, 
			$display_inactive = false, 
			$field_values = null, 
			$ajax = true, 
			$tabindex); 
		?>
	</div>
</div>