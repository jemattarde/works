<?php
/**
 * @brief works, a plugin for Dotclear 2
 *
 * Prepare le necessaire au fonctionnement du plugin pour sa partie administration
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

use dcAdmin;
use dcCore;
use Dotclear\Core\Backend\Utility;
use Dotclear\Core\Process;

class Backend extends Process
{
    protected static $init = false; /** @deprecated since 2.27 */
    public static function init(): bool
    {
        // dead but useful code, in order to have translations
        __('works') . __('Ajoute un sommaire des chroniques par rubrique');

        return self::status(My::checkContext(My::BACKEND));
    }

    public static function process(): bool
    {
        if (!self::status()) {
            return false;
        }

        My::addBackendMenuItem(Utility::MENU_BLOG);

        /* Register favorite */
        dcCore::app()->addBehaviors([
            'adminDashboardFavoritesV2' => [BackendBehaviors::class, 'adminDashboardFavorites'],
            'adminRteFlagsV2'           => [BackendBehaviors::class, 'adminRteFlags'],
            // SimpleMenu behaviors
            'adminSimpleMenuAddType'    => [SimpleMenuBehaviors::class, 'adminSimpleMenuAddType'],
            'adminSimpleMenuBeforeEdit' => [SimpleMenuBehaviors::class, 'adminSimpleMenuBeforeEdit'],
        ]);

        if (My::checkContext(My::WIDGETS)) {
            dcCore::app()->addBehaviors([
                'initWidgets' => [Widgets::class, 'initWidgets'],
            ]);
        }


        return true;
    }
}
