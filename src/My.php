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

use Dotclear\Module\MyPlugin;

/**
 * Plugin definitions
 */
class My extends MyPlugin
{
    /**
     * Check permission depending on given context
     *
     * @param      int   $context  The context
     *
     * @return     null|bool  null if not relevant, true if allowed, else false
     */
    protected static function checkCustomContext(int $context): ?bool
    {
        return null;
    }

    /**
     * Makes an url including optionnal parameters.
     *
     * @param      array   $params  The parameters
     *
     * @return     string
     *
     * @deprecated since 2.27, use My::manageUrl($param)
     */
    public static function makeUrl(array $params = []): string
    {
        return static::manageUrl($params);
    }
}
