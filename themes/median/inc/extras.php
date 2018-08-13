<?
	function logoDisplay() {
?>
<div>
	<h1>hello</h1>
		<img src = "images/inhabitent-logo-full.svg" style="width: 20%">
</div>
	
<?
	} 
	add_action( 'after_setup_theme', 'logoDisplay' );

	?>