<?php
/**
 * @brief works, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugin
 *
 * @copyright Gilles & Association Dotclear
 * @copyright GPL-2.0-only
 */
 
 if (!defined('DC_RC_PATH')) {
    return null;
}

$this->registerModule(
    'works',
    'Plugin en cours de developpement',
    'Gilles',
    '0.0',
    [
        'requires'    => [['core', '2.26']],
        'permissions' => dcCore::app()->auth->makePermissions([
            dcAuth::PERMISSION_ADMIN,
        ]),
        'type'     => 'plugin',
        'settings' => [
        ],

        'details'    => 'https://github.com/jemattarde/works',
        'support'    => 'https://github.com/jemattarde/works',
        'repository' => 'https://github.com/jemattarde/works',
    ]
);