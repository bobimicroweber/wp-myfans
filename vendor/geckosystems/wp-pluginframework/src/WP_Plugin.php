<?php
namespace WP_PluginFramework;

use WP_PluginFramework\Interfaces\WP_PluginInterface;

abstract class WP_Plugin implements WP_PluginInterface
{
    use WP_PluginActivationTrait, WP_PluginAutoloadTrait;

    public function run()
    {
        $this->autoloadPath('Filters');
        $this->autoloadPath('MetaBoxes');
        $this->autoloadPath('PostTypes');
    }

}