<?php
namespace WP_PluginFramework;

use WP_PluginFramework\Interfaces\WP_PluginInterface;

abstract class WP_Plugin implements WP_PluginInterface
{
    use WP_PluginActivationTrait;

    public function run()
    {
        $this->autoloadPath('Filters');
        $this->autoloadPath('MetaBoxes');
        $this->autoloadPath('PostTypes');
    }

    public function autoloadPath($path) {

        $reflectionClass = new \ReflectionClass(get_class($this));
        $namespaceThis = $reflectionClass->getNamespaceName();

        $openDirThis = dirname($reflectionClass->getFileName());
        $openDir = $openDirThis . DIRECTORY_SEPARATOR . $path;
        if (!is_dir($openDirThis . DIRECTORY_SEPARATOR . $path)) {
            return false;
        }

        $rii = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($openDir));
        foreach ($rii as $file) {
            if(strpos($file->getPathname(), '.php') !== false) {
                $className = str_replace('.php', false, $file->getBasename());
                $classNameWithNamespace = ($namespaceThis .'\\'. $path .'\\'. $className);
                if (method_exists($classNameWithNamespace, 'register')) {
                   $classNameWithNamespace::register();
                }
            }
        }
    }

}