<?php
/**
 * @brief works, a plugin for Dotclear 2
 * 
 * prepare le necessaire au fonctionnement du plugin en partie publique
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
use Dotclear\Core\Process;

class Frontend extends Process
{
    protected static $init = false; /** @deprecated since 2.27 */
    public static function init(): bool
    {
        return self::status(My::checkContext(My::FRONTEND));
    }

    public static function process(): bool
    {
        if (!self::status()) {
            return false;
        }

        // Don't do things in frontend if plugin disabled
        $settings = dcCore::app()->blog->settings->get(My::id());
        if (!(bool) $settings->active) {
            return false;
        }

        // ToDo

        return true;
    }
}