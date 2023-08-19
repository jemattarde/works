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

use Dotclear\Core\Process;

class Install extends Process
{
    public static function init(): bool
    {
        return self::status(My::checkContext(My::INSTALL));
    }

    public static function process(): bool
    {
        if (!self::status()) {
            return false;
        }

        My::settings()->put('active', false, 'boolean', 'Enable plugin', false, true);
        
        return true;
    }
}
