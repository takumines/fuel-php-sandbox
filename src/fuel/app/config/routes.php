<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010-2025 Fuel Development Team
 * @link       https://fuelphp.com
 */

return array(
	/**
	 * -------------------------------------------------------------------------
	 *  Default route
	 * -------------------------------------------------------------------------
	 *
	 */

//	'_root_' => 'welcome/index',

	/**
	 * -------------------------------------------------------------------------
	 *  Page not found
	 * -------------------------------------------------------------------------
	 *
	 */

//	'_404_' => 'error/404',

	/**
	 * -------------------------------------------------------------------------
	 *  Example for Presenter
	 * -------------------------------------------------------------------------
	 *
	 *  A route for showing page using Presenter
	 *
	 */

	'register' => 'auth/register',
    'login' => 'auth/login',

    /*
     * -------------------------------------------------------------------------
     *  認証必須
     * -------------------------------------------------------------------------
     */
    'logout' => 'auth/logout',
    'articles' => 'article/index',
    'articles/create' => 'article/create',
    'articles/view/(:num)' => 'article/view/$1',
);
