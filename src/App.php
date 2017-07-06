<?php
/**
 * The main application class.
 *
 * @package Inpsyde\Codeception
 */

namespace Inpsyde\Codeception;

/**
 * Class App
 */
class App {

	/**
	 * Configuration
	 *
	 * @var stdClass
	 */
	private $config;

	/**
	 * App constructor.
	 *
	 * @param stdClass $config
	 */
	public function __construct( $config ) {

		$this->config = $config;
	}

	/**
	 * Runs the app.
	 */
	public function run() {

		$this->render_header();
		$this->render_main();
		$this->render_footer();
	}

	/**
	 * Renders the header.
	 */
	private function render_header() {

		require_once( $this->config->templates_dir . 'header.html' );
	}


	/**
	 * Renders the main content.
	 */
	private function render_main() {

		require_once( $this->config->view_rooter->get_template_src() );
	}

	/**
	 * Renders the footer.
	 */
	private function render_footer() {


		require_once( $this->config->templates_dir . 'footer.html' );
	}
}
