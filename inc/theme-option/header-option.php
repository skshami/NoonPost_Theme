<?php
/**
 * Template parts for theme-options.php
 *
 * @package NoonPost
 */
?>
<div class="wrap">
<h1>Theme Header</h1>
    <h4>If you want, you can update Header information from here</h4>
    <?php settings_errors();?>

     <!-- preview logo area -->
    <?php $white_logo = esc_attr( get_option( 'noonpost_white_logo' ) ); ?>
    <?php $dark_logo = esc_attr( get_option( 'noonpost_dark_logo' ) ); ?>
        <div class="logo-preview" style="text-align:center; display:inline-block; float:left; width: 500px; height: 250px;background-color: #F9F9FF; box-shadow: 0px 5px 20px 0px rgb(69 67 96 / 10%); border-radius: 20px !important; ">
            <div class="logo-details">
                <div class="white-logo-area" style="display:block;width:90%; overflow:hidden; text-align:center;background-color: black; border-radius: 5px; margin:auto; margin-top:15px; ">
                    <div id="white-logo-preview" style="background-image: url(<?php echo $white_logo; ?>); width:335px; height:100px;overflow:hidden; auto;background-position:center center;background-repeat:no-repeat;background-size:cover;margin:auto;"></div>
                </div> 
                <div class="dark-logo-area" style="display:block;width:90%; overflow:hidden; text-align:center;background-color: #fff; border-radius: 5px; margin:auto; margin-top:15px; ">
                    <div id="dark-logo-preview" style="background-image: url(<?php echo $dark_logo; ?>); width:335px; height:100px;overflow:hidden; auto;background-position:center center;background-repeat:no-repeat;background-size:cover;margin:auto;"></div>
                </div> 
            </div>
        </div>
       
     <!-- preview logo area end -->

    <form action ="options.php" method="POST" id="noonpost_header_form" class="noonpost-header-form">

        <?php settings_fields( 'noonpost-header-option-group' );?>
        <?php do_settings_sections( 'noonpost_header' )?>
      


    <?php submit_button();?>
    </form>
</div>

