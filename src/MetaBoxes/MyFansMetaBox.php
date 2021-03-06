<?php
namespace MyFans\MetaBoxes;

use WP_PluginFramework\MetaBoxes\WP_MetaBox;

class MyFansMetaBox extends WP_MetaBox {

    public static $id = 'my-fans-post-metabox';
    public static $title = 'Require Membership';
    public static $postType = 'myfans';

    public static function html($data)
    {
        ?>


        <?php wp_nonce_field( basename( __FILE__ ), 'smashing_post_class_nonce' ); ?>

        <p>
            <label for="smashing-post-class"><?php _e( "Add a custom CSS class, which will be applied to WordPress' post class.", 'example' ); ?></label>
            <br />
            <input class="widefat" type="text" name="smashing_post_class" id="smashing-post-class" value="<?php echo esc_attr( get_post_meta( $data->ID, 'smashing_post_class', true ) ); ?>" size="30" />
        </p>

<?php
    }

}