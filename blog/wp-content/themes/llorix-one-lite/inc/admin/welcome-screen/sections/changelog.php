<?php
/**
 * Changelog
<<<<<<< HEAD
=======
 *
 * @package llorix-one-lite
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
 */

$llorix_one_lite = wp_get_theme( 'llorix-one-lite' );

?>
<div class="llorix-one-lite-tab-pane" id="changelog">

	<div class="llorix-one-lite-tab-pane-center">
	
<<<<<<< HEAD
		<h1>Llorix One Lite <?php if( !empty($llorix_one_lite['Version']) ): ?> <sup id="llorix-one-lite-theme-version"><?php echo esc_attr( $llorix_one_lite['Version'] ); ?> </sup><?php endif; ?></h1>
=======
		<h1>Llorix One Lite <?php if ( ! empty( $llorix_one_lite['Version'] ) ) :  ?> <sup id="llorix-one-lite-theme-version"><?php echo esc_attr( $llorix_one_lite['Version'] ); ?> </sup><?php endif; ?></h1>
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8

	</div>

	<?php
	WP_Filesystem();
	global $wp_filesystem;
<<<<<<< HEAD
	$llorix_one_lite_changelog = $wp_filesystem->get_contents( get_template_directory().'/CHANGELOG.md' );
	$llorix_one_lite_changelog_lines = explode(PHP_EOL, $llorix_one_lite_changelog);
	foreach($llorix_one_lite_changelog_lines as $llorix_one_lite_changelog_line){
		if(substr( $llorix_one_lite_changelog_line, 0, 3 ) === "###"){
			echo '<hr /><h1>'.substr($llorix_one_lite_changelog_line,3).'</h1>';
		} else {
			echo $llorix_one_lite_changelog_line.'<br/>';
=======
	$llorix_one_lite_changelog = $wp_filesystem->get_contents( get_template_directory() . '/CHANGELOG.md' );
	$llorix_one_lite_changelog_lines = explode( PHP_EOL, $llorix_one_lite_changelog );
	foreach ( $llorix_one_lite_changelog_lines as $llorix_one_lite_changelog_line ) {
		if ( substr( $llorix_one_lite_changelog_line, 0, 3 ) === '###' ) {
			echo '<hr /><h1>' . substr( $llorix_one_lite_changelog_line,3 ) . '</h1>';
		} else {
			echo $llorix_one_lite_changelog_line . '<br/>';
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
		}
	}

?>
	
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
