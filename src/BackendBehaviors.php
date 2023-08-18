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

use ArrayObject;
use dcFavorites;

class BackendBehaviors
{
    public static function adminDashboardFavorites(dcFavorites $favs)
    {
        $favs->register('works', [
            'title'       => __('works in progress'),
            'url'         => My::makeUrl(),
            'small-icon'  => My::icons(),
            'large-icon'  => My::icons(),
            'permissions' => My::checkContext(My::MENU),
        ]);
    }

    public static function adminRteFlags(ArrayObject $rte)
    {
        $rte['works'] = [true, __('what is it')];
    }
}
