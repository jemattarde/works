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

use dcBlog;
use dcCore;
use dcPublic;
use dcUrlHandlers;
use Dotclear\Core\Frontend\Utility;
use Dotclear\Helper\File\Path;


class FrontendUrl extends dcUrlHandlers
{
	public static function works()
    {
	$default_template = My::path() . DIRECTORY_SEPARATOR . dcPublic::TPL_ROOT . DIRECTORY_SEPARATOR;
    dcCore::app()->tpl->setPath(dcCore::app()->tpl->getPath(), $default_template);
	self::serveDocument('ma_page.html');
		exit;
    }
}
