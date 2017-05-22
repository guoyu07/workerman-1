<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, notadd.com
 * @datetime 2017-05-22 11:32
 */
namespace Notadd\Workerman;

use Notadd\Foundation\Module\Abstracts\Module;
use Notadd\Workerman\Injections\Installer;
use Notadd\Workerman\Injections\Uninstaller;

/**
 * Class ModuleServiceProvider.
 */
class ModuleServiceProvider extends Module
{

    /**
     * Boot module.
     */
    public function boot()
    {
    }

    /**
     * Description of module
     *
     * @return string
     */
    public static function description()
    {
        return '';
    }

    /**
     * Install for module.
     *
     * @return string
     */
    public static function install()
    {
        return Installer::class;
    }

    /**
     * Name of module.
     *
     * @return string
     */
    public static function name()
    {
        return 'Workerman';
    }

    /**
     * Uninstall for module.
     *
     * @return string
     */
    public static function uninstall()
    {
        return Uninstaller::class;
    }

    /**
     * Version of module.
     *
     * @return string
     */
    public static function version()
    {
        return '1.0.0';
    }
}
