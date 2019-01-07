<?php
/**
 * Posts component.
 *
 * @package Stax
 * @author SeventhQueen <themesupport@seventhqueen.com>
 * @since 1.0
 */

namespace Stax;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ElementPosts extends Element implements ElementInterface {
	/**
	 * ElementPosts constructor.
	 */
	public function __construct() {
		parent::__construct();
		$this->name       = 'Posts';
		$this->slug       = 'posts';
		$this->icon->type = 'mdi-file-document-outline';
		$this->template   = $this->getTemplate( $this->slug );

		$fields = [];

		$this->addSection( new EditorSection( [
			'title' => 'Input',
			'name'  => 'input-section'
		] ), $fields );
	}
}
