<?php
/**
 * Template parts for theme-options.php
 *
 * @package NoonPost
 */
?>
<div class="wrap">
    <h1>Theme Options</h1>
    <h4>If you want, you can update Theme information from here</h4>
        <?php settings_errors();?>
    <form action ="options.php" method="POST">

    
        <?php settings_fields( 'noonpost-genaral-option-group' );?>
        <?php do_settings_sections( 'noonpost_genaral' )?>
        


        <?php submit_button();?>
    </form>
</div>