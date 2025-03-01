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

use Fuel\Core\Presenter;

/**
 * The welcome hello presenter.
 *
 * @package  app
 */
class Presenter_Welcome_Hello extends Presenter
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */
	public function view(): void
    {
		$this->name = $this->request()->param('name', 'World');
	}
}
