<?php

class WP_MyFansMetaBox {

    public function register() {


        $this->addMetaBox('wpMyFansPostMeta', __('Require Membership'), function () {

            echo 'dadada';


        }, $this->postType, 'side', 'high');
    }

}