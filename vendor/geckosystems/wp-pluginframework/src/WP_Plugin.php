<?php
namespace WP_PluginFramework;

use WP_PluginFramework\Interfaces\WP_PluginInterface;

abstract class WP_Plugin implements WP_PluginInterface
{
    use WP_PluginAutoloadTrait;
    use WP_PluginActivationTrait;

    public $autoloadPaths = [
      'Listeners',
      'Filters',
      'MetaBoxes',
      'PostTypes',
    ];

    public function run()
    {
        // Register activation hooks
        $this->registerActivationHooks();

        // Autoload plugin files
        $this->autoloadPath('Listeners');
        $this->autoloadPath('Filters');
        $this->autoloadPath('MetaBoxes');
        $this->autoloadPath('PostTypes');

    }

}