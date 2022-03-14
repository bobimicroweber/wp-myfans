<?php

namespace WP_PluginFramework;

trait WP_PluginActivationTrait
{
    public static function activatePlugin()
    {
        return true;
    }

    public static function deactivatePlugin()
    {
        return true;
    }

    public static function uninstallPlugin()
    {
        return true;
    }

    public function registerActivationHooks() {

        $pluginClassWithNamespace = get_class($this);

        register_activation_hook(__FILE__, array($pluginClassWithNamespace, 'activatePlugin'));
        register_deactivation_hook(__FILE__, array($pluginClassWithNamespace, 'deactivatePlugin'));
        register_uninstall_hook(__FILE__, array($pluginClassWithNamespace, 'uninstallPlugin'));

    }
}

