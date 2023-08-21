<?php
/**
 * @brief works, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Gilles P. and contributors
 *
 * @copyright Gilles P. gilles.p@je-mattarde.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
declare(strict_types=1);

namespace Dotclear\Plugin\works;

use dcCore;
use dcNamespace;
use Dotclear\Core\Process;

class Prepend extends Process
{
    protected static $init = false; /** @deprecated since 2.27 */
    public static function init(): bool
    {
        return self::status(My::checkContext(My::PREPEND));
    }

    public static function process(): bool
    {
        if (!self::status()) {
            return false;
        }
	/**
	* Parametres de la fonction register
	* param1 : le type d'URL, pour identification par dotclear de cette URL
	* param2 : URL de base de la page
	* param3 : expression reguliere de cette URL
	* param4 : callback, nom de fcn a appeler lorsque cette URL est demandee
	*/
        dcCore::app()->url->register('works','works', '^works/(.+)$', [FrontendUrl::class, 'works']);

        if (dcCore::app()->blog) {
            $settings = dcCore::app()->blog->settings->get(My::id());
            if (!$settings->settingExists('active')) {
                // Set active flag to true only if recipient(s) is/are set
                $settings->put('active', (bool) $settings->recipients, dcNamespace::NS_BOOL);
            }
        }

        return true;
    }
}
