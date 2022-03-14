<?php
namespace WP_MyFans\MetaBoxes;

use WP_MyFans\Framework\MetaBoxes\WP_MetaBox;

class WP_MyFansMetaBox extends WP_MetaBox {

    public static function registerxx() {


       /* $this->addMetaBox('wpMyFansPostMeta', __('Require Membership'), function () {

            echo 'dadada';


        }, $this->postType, 'side', 'high');*/
    }

    public function addMetaBox($id, $title, $callback, $screen = null, $context = 'advanced', $priority = 'default', $callback_args = null)
    {
        add_action("add_meta_boxes", function () use ($id, $title, $callback, $screen, $context, $priority, $callback_args) {
            add_meta_box($id, $title, $callback, $screen, $context, $priority, $callback_args);
        });
    }


}