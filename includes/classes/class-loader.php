<?php
/**
 * This class handles loading and initialising all classes.
 *
 * @package Skapa
 */

namespace Skapa;

abstract class Loader {
	/**
	 * Class constructor. Make sure extending classes initialize themselves upon creation.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Init function for extending classes to implement.
	 *
	 * @return void
	 */
	abstract protected function init() : void;
}
