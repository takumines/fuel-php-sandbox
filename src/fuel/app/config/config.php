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
	 *  The base URL of the application
	 * -------------------------------------------------------------------------
	 *
	 *  You can set this to a full or relative URL:
	 *
	 *      'base_url' => '/foo/',
	 *      'base_url' => 'http://foo.com/'
	 *
	 *  It MUST contain a trailing slash (/).
	 *
	 *  Set this to null to have it automatically detected.
	 *
	 */

	// 'base_url' => null,

	/**
	 * -------------------------------------------------------------------------
	 *  Any suffix that needs to be added to
	 * -------------------------------------------------------------------------
	 *
	 *  URL's generated by Fuel. If the suffix is an extension, make sure to
	 *  include the dot.
	 *
	 *      'url_suffix' => '.html',
	 *
	 *  Set this to an empty string if no suffix is used.
	 *
	 */

	// 'url_suffix' => '',

	/**
	 * -------------------------------------------------------------------------
	 *  The name of the main bootstrap file
	 * -------------------------------------------------------------------------
	 *
	 *  Set this to 'index.php if you don't use URL rewriting.
	 *
	 */

	// 'index_file' => false,

	// 'profiling' => false,

	/**
	 * -------------------------------------------------------------------------
	 *  Default location for the file cache
	 * -------------------------------------------------------------------------
	 */

	// 'cache_dir' => APPPATH.'cache/',

	/**
	 * -------------------------------------------------------------------------
	 *  Settings for the file finder cache
	 *
	 *  Note: The Cache class has it's own config!
	 * -------------------------------------------------------------------------
	 *
	 *  The 'cache_lifetime' value is in seconds.
	 *
	 */

	// 'caching' => false,

	// 'cache_lifetime' => 3600,

	/**
	 * -------------------------------------------------------------------------
	 *  Callback to use with ob_start(), set this to 'ob_gzhandler'
	 *  for gzip encoding of output
	 * -------------------------------------------------------------------------
	 */

	// 'ob_callback' => null,

	// 'errors' => array(
		/**
		 * ---------------------------------------------------------------------
		 *  Which errors should we show, but continue execution? You can add
		 *  the following:
		 *
		 *      E_NOTICE, E_WARNING, E_DEPRECATED, E_STRICT
		 *
		 *  to mimic PHP's default behaviour (which is to continue
		 *  on non-fatal errors). We consider this bad practice.
		 * ---------------------------------------------------------------------
		 */

		// 'continue_on' => array(),

		/**
		 * ---------------------------------------------------------------------
		 *  How many errors should we show before we stop showing them?
		 *
		 *  Note: This is useful to prevents out-of-memory errors.
		 * ---------------------------------------------------------------------
		 */

		// 'throttle' => 10,

		/**
		 * ---------------------------------------------------------------------
		 *  Should notices from Error::notice() be shown?
		 * ---------------------------------------------------------------------
		 */

		// 'notices' => true,

		/**
		 * ---------------------------------------------------------------------
		 *  Render previous contents or show it as HTML?
		 * ---------------------------------------------------------------------
		 */

		// 'render_prior' => false,
	// ),

	/**
	 * -------------------------------------------------------------------------
	 *  Localization & internationalization settings
	 * -------------------------------------------------------------------------
	 */

	/**
	 *  The default language.
	 */

	// 'language' => 'en',

	/**
	 *  Fallback language when file isn't available for default language.
	 */

	// 'language_fallback' => 'en',

	/**
	 *  PHP set_locale() setting. Use null to not set.
	 */

	// 'locale' => 'en_US',

	/**
	 * -------------------------------------------------------------------------
	 *  Internal string encoding charset
	 * -------------------------------------------------------------------------
	 */

	// 'encoding' => 'UTF-8',

	/**
	 * -------------------------------------------------------------------------
	 *  DateTime settings
	 * -------------------------------------------------------------------------
	 */

	/**
	 *  The server offset in seconds from GMT timestamp when time() is used.
	 */

	// 'server_gmt_offset' => 0,

	/**
	 *  Change the server's default timezone. This is optional.
	 */

	// 'default_timezone' => null,

	/**
	 * -------------------------------------------------------------------------
	 *  Logging threshold.
	 * -------------------------------------------------------------------------
	 *
	 *  Can be set to any of the following:
	 *
	 *      Fuel::L_NONE
	 *      Fuel::L_ERROR
	 *      Fuel::L_WARNING
	 *      Fuel::L_DEBUG
	 *      Fuel::L_INFO
	 *      Fuel::L_ALL
	 *
	 */

	// 'log_threshold'   => Fuel::L_WARNING,
	// 'log_path'        => APPPATH.'logs/',
	// 'log_date_format' => 'Y-m-d H:i:s',

	/**
	 * -------------------------------------------------------------------------
	 *  Security settings
	 * -------------------------------------------------------------------------
	 */

	'security' => array(
		/**
		 * ---------------------------------------------------------------------
		 *  CSRF settings
		 * ---------------------------------------------------------------------
		 */

		// 'csrf_autoload'            => false,
		// 'csrf_autoload_methods'    => array('post', 'put', 'delete'),
		// 'csrf_bad_request_on_fail' => false,
		// 'csrf_auto_token'          => false,
		// 'csrf_token_key'           => 'fuel_csrf_token',
		// 'csrf_expiration'          => 0,

		/**
		 * ---------------------------------------------------------------------
		 *  Salt to make sure the generated security tokens aren't predictable.
		 * ---------------------------------------------------------------------
		 */

		// 'token_salt' => 'put your salt value here to make the token more secure',

		/**
		 * ---------------------------------------------------------------------
		 *  Allow the Input class to use X headers when present.
		 *
		 *  Examples of these are:
		 *
		 *      HTTP_X_FORWARDED_FOR and HTTP_X_FORWARDED_PROTO
		 *
		 *  which can be faked which could have security implications.
		 * ---------------------------------------------------------------------
		 */

		// 'allow_x_headers' => false,

		/**
		 * ---------------------------------------------------------------------
		 *  This input filter can be any normal PHP function
		 *  as well as 'xss_clean'
		 *
		 *  WARNING: Using xss_clean will cause a performance hit. How much is
		 *  depend on how much input data there is.
		 * ---------------------------------------------------------------------
		 */

		'uri_filter' => array('htmlentities'),

		// 'input_filter' => array(),

		/**
		 * ---------------------------------------------------------------------
		 *  This output filter can be any normal PHP function
		 *  as well as 'xss_clean'
		 *
		 *  WARNING: Using xss_clean will cause a performance hit. How much is
		 *  depend on how much input data there is.
		 * ---------------------------------------------------------------------
		 */

		'output_filter' => array('Security::htmlentities'),

		/**
		 * ---------------------------------------------------------------------
		 *  Encoding mechanism to use on htmlentities()
		 * ---------------------------------------------------------------------
		 */

		// 'htmlentities_flags' => ENT_QUOTES,

		/**
		 * ---------------------------------------------------------------------
		 *  Whether to encode HTML entities as well
		 * ---------------------------------------------------------------------
		 */

		// 'htmlentities_double_encode' => false,

		/**
		 * ---------------------------------------------------------------------
		 *  Whether to automatically filter view data
		 * ---------------------------------------------------------------------
		 */

		// 'auto_filter_output' => true,

		/**
		 * ---------------------------------------------------------------------
		 *  With output encoding switched on, all objects passed will be
		 *  converted to strings or throw exceptions unless they are instances
		 *  of the classes in this array.
		 * ---------------------------------------------------------------------
		 */

		'whitelisted_classes' => array(
			'Fuel\\Core\\Presenter',
			'Fuel\\Core\\Response',
			'Fuel\\Core\\View',
			'Fuel\\Core\\ViewModel',
			'Closure',
		),
	),

	/**
	 * -------------------------------------------------------------------------
	 *  Cookie settings
	 * -------------------------------------------------------------------------
	 */

	// 'cookie' => array(
		/**
		 * ---------------------------------------------------------------------
		 *  Number of seconds before the cookie expires
		 * ---------------------------------------------------------------------
		 */

		// 'expiration' => 0,

		/**
		 * ---------------------------------------------------------------------
		 *  Restrict the path that the cookie is available to
		 * ---------------------------------------------------------------------
		 */

		// 'path' => '/',

		/**
		 * ---------------------------------------------------------------------
		 *  Restrict the domain that the cookie is available to
		 * ---------------------------------------------------------------------
		 */

		// 'domain' => null,

		/**
		 * ---------------------------------------------------------------------
		 *  Only transmit cookies over secure connections
		 * ---------------------------------------------------------------------
		 */

		// 'secure' => false,

		/**
		 * ---------------------------------------------------------------------
		 *  Only transmit cookies over HTTP, disabling Javascript access
		 * ---------------------------------------------------------------------
		 */

		// 'http_only' => false,
	// ),

	/**
	 * -------------------------------------------------------------------------
	 *  Validation settings
	 * -------------------------------------------------------------------------
	 *
	 *  Whether to fallback to global when a value is not found in the
	 *  input array.
	 *
	 */

	// 'validation' => array(
		// 'global_input_fallback' => true,
	// ),

	/**
	 * -------------------------------------------------------------------------
	 *  Controller class prefix
	 * -------------------------------------------------------------------------
	 */

	 // 'controller_prefix' => 'Controller_',

	/**
	 * -------------------------------------------------------------------------
	 *  Routing settings
	 * -------------------------------------------------------------------------
	 */

	// 'routing' => array(
		/**
		 * ---------------------------------------------------------------------
		 *  Whether URI routing is case sensitive or not
		 * ---------------------------------------------------------------------
		 */

		// 'case_sensitive' => true,

		/**
		 * ---------------------------------------------------------------------
		 *  Whether to strip the extension
		 * ---------------------------------------------------------------------
		 */

		// 'strip_extension' => true,
	// ),

	/**
	 * -------------------------------------------------------------------------
	 *  Module paths
	 * -------------------------------------------------------------------------
	 *
	 *  To enable you to split up your application into modules which can be
	 *  routed by the first uri segment you have to define their basepaths here.
	 *  By default is empty, but to use them you can add something like this:
	 *
	 *      'module_paths' => array(APPPATH.'modules'.DS)
	 *
	 *  Paths MUST end with a directory separator (the DS constant)!
	 *
	 */

	// 'module_paths' => array(
	// 	// APPPATH.'modules'.DS
	// ),

	/**
	 * -------------------------------------------------------------------------
	 *  Package paths
	 * -------------------------------------------------------------------------
	 *
	 *  To enable you to split up your additions to the framework, packages are
	 *  used. You can define the basepaths for your packages here. By default is
	 *  empty, but to use them you can add something like this:
	 *
	 *      'package_paths' => array(APPPATH.'modules'.DS)
	 *
	 *  Paths MUST end with a directory separator (the DS constant)!
	 *
	 */

	'package_paths' => array(
		PKGPATH,
	),

	/**
	 * -------------------------------------------------------------------------
	 *  Always load
	 * -------------------------------------------------------------------------
	 */

	// 'always_load' => array(
		/**
		 * ---------------------------------------------------------------------
		 *  These packages are loaded on Fuel's startup.
		 *  You can specify them in the following manner:
		 *
		 *      'packages' => array('auth');
		 *
		 *  This will assume the packages are in PKGPATH.
		 *
		 *  Use this format to specify the path to the package explicitly.
		 *
		 *      'packages' => array(
		 *          array('auth' => PKGPATH.'auth/')
		 *      );
		 * ---------------------------------------------------------------------
		 */

		// 'packages' => array(
		// 	// 'orm',
		// ),

		/**
		 * ---------------------------------------------------------------------
		 *  These modules are always loaded on Fuel's startup.
		 *  You can specify them in the following manner:
		 *
		 *      'modules' => array('module_name');
		 *
		 *  A path must be set in 'module_paths' for this to work.
		 * ---------------------------------------------------------------------
		 */

		// 'modules' => array(),

		/**
		 * ---------------------------------------------------------------------
		 *  Classes to autoload & initialize even when not used
		 * ---------------------------------------------------------------------
		 */

		// 'classes' => array(),

		/**
		 * ---------------------------------------------------------------------
		 *  Configurations to autoload
		 *
		 *  If you want to load 'session' config into a group 'session',
		 *  you only have to add 'session'.
		 *
		 *      'config' => array('session')
		 *
		 *  If you want to add it to another group (example: 'auth'),
		 *  you have to add it like:
		 *
		 *      'config' => array('session' => 'auth')
		 *
		 *  If you don't want the config in a group, use null as groupname.
		 * ---------------------------------------------------------------------
		 */

		// 'config' => array(),

		/**
		 * ---------------------------------------------------------------------
		 *  Language files to autoload
		 *
		 *  If you want to load 'validation' lang into a group 'validation',
		 *  you only have to add 'validation'.
		 *
		 *      'language' => array('validation')
		 *
		 *  If you want to add it to another group (example: 'forms'),
		 *  you have to add it like:
		 *
		 *      'language' => array('validation' => 'forms')
		 *
		 *  If you don't want the lang in a group, use null as groupname.
		 * ---------------------------------------------------------------------
		 */

		// 'language' => array(),
	// ),
);
