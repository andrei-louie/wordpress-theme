<?php
/**
 * Block Patterns
 *
 * @package NetWarriorServices
 */

namespace NETWARRIORSERVICES_THEME\Inc;

use NETWARRIORSERVICES_THEME\Inc\Traits\Singleton;

class Block_Patterns {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'register_block_patterns' ] );
		add_action( 'init', [ $this, 'register_block_pattern_categories' ] );
	}

	public function register_block_patterns() {
		if ( function_exists( 'register_block_pattern' ) ) {

			/**
			 * Cover Pattern
			 */
			$cover_content = $this->get_pattern_content( 'template-parts/patterns/cover' );

			register_block_pattern(
				'netwarriorservices/cover',
				[
					'title' => __( 'NetWarriorServices Cover', 'netwarriorservices' ),
					'description' => __( 'NetWarriorServices Cover Block with image and text', 'netwarriorservices' ),
					'categories' => [ 'cover' ],
					'content' => $cover_content,
				]
			);

			/**
			 * Two Column Pattern
			 */
			$two_columns_content = $this->get_pattern_content( 'template-parts/patterns/two-columns' );

			register_block_pattern(
				'netwarriorservices/two-columns',
				[
					'title' => __( 'NetWarriorServices Two Column', 'netwarriorservices' ),
					'description' => __( 'NetWarriorServices two columns with heading and text', 'netwarriorservices' ),
					'categories' => [ 'columns' ],
					'content' => $two_columns_content,
				]
			);
		}
	}

	public function get_pattern_content( $template_path ) {

		ob_start();

		get_template_part( $template_path );

		$pattern_content = ob_get_contents();

		ob_end_clean();

		return $pattern_content;
	}

	public function register_block_pattern_categories() {

		$pattern_categories = [
			'cover' => __( 'Cover', 'netwarriorservices' ),
			'columns' => __( 'Columns', 'netwarriorservices' ),
		];

		if ( ! empty( $pattern_categories ) && is_array( $pattern_categories ) ) {
			foreach ( $pattern_categories as $pattern_category => $pattern_category_label ) {
				register_block_pattern_category(
					$pattern_category,
					[ 'label' => $pattern_category_label ]
				);
			}
		}
	}


}
