
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input autofocus type="text" class="field" name="s" id="s" placeholder="recherche..." />
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'GO !', 'ananas' ); ?>" />
</form>
