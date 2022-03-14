<?php
namespace WP_MyFans\MetaBoxes;

use WP_PluginFramework\MetaBoxes\WP_MetaBox;

class WP_MyFansMetaBox extends WP_MetaBox {

    public static $id = 'wp-my-fans-post-metabox';
    public static $title = 'Require Membership';
    public static $postType = 'wp-myfans';

    public static function html()
    {
        return 'This is example metabox.';
    }

}