<?php
/**
 * Selects the template file.
 *
 * @package Inpsyde\Codeception
 */

namespace Inpsyde\Codeception;

/**
 * Class ViewRooter
 */
class ViewRooter {

	private $config;

	public function __construct( $config ) {

		$this->config = $config;
	}

	public function get_template_src() {

		if ( ! isset( $this->config->site_id ) ) {
			return $this->get_404_src();
		}
		$file = $this->config->templates_dir . $this->config->site_id . '.php';
		if ( ! is_file( $file ) ) {
			return $this->get_404_src();
		}
		return $file;
	}

	private function get_404_src() {

		return $this->config->templates_dir . '404.html';
	}
}