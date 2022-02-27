<?php
/**
 * Template parts for theme-options.php
 *
 * @package NoonPost
 */
?>

<div class="wrap">
<h1>Theme Footer</h1>
    <h4>If you want, you can update Footer information from here</h4>
    <?php settings_errors();?>

    <form action ="options.php" method="POST">

        <?php settings_fields( 'noonpost-footer-option-group' ); ?>
        <?php do_settings_sections( 'noonpost_footer' )?>
        


    <?php submit_button();?>
    </form>
</div>


