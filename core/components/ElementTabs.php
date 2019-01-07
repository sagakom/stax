<?php
/**
 * Tabs component.
 *
 * @package Stax
 * @author SeventhQueen <themesupport@seventhqueen.com>
 * @since 1.0
 */

namespace Stax;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ElementTabs extends Element implements ElementInterface {
	/**
	 * ElementTabs constructor.
	 */
	public function __construct() {
		parent::__construct();
		$this->name       = 'Tabs';
		$this->slug       = 'tabs';
		$this->icon->type = 'mdi-tab';
		$this->template   = $this->getTemplate( $this->slug );

		$fields = [];

		$fields[] = new EditorSectionField(
			[
				'label' => 'Accordion items',
				'name'  => 'tabs_field',
				'type'  => self::FIELD_VERTICAL_TABS,
				'value' => [
					[
						'name'   => 'Tab 1',
						'value'  => 'Sample text wqe q',
						'active' => true
					],
					[
						'name'   => 'Tab 2',
						'value'  => 'Sample texta sda ',
						'active' => false
					]
				]
			]
		);

		$fields_2 = [];

		$fields_2[] = new EditorSectionField(
			[
				'label'    => 'Alignment',
				'name'     => 'align_field',
				'only'     => 'section',
				'type'     => self::FIELD_BUTTON_GROUP,
				'value'    => [
					[
						'label'    => '<span class="mdi mdi-format-align-left mdi-18px"></span>',
						'value'    => 'left',
						'selected' => true,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '<span class="mdi mdi-format-align-center mdi-18px"></span>',
						'value'    => 'center',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '<span class="mdi mdi-format-align-right mdi-18px"></span>',
						'value'    => 'right',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					]
				],
				'selector' => [
					'{{SELECTOR}}' => 'text-align: {{VALUE}}'
				],
			]
		);

		$fields_2[] = new EditorSectionField(
			[
				'label'    => 'Background',
				'name'     => 'tab_bg_color_n_field',
				'type'     => self::FIELD_COLOR_PICKER,
				'value'    => '',
				'selector' => [
					'{{SELECTOR}} .sq-toggle-tab.active' => 'background-color: {{VALUE}}',
					'{{SELECTOR}} .sq-inner-tab'         => 'background-color: {{VALUE}}'
				]
			]
		);

		$fields_3 = [];

		$fields_3[] = new EditorSectionField(
			[
				'label'    => 'Color',
				'name'     => 'title_color_n_field',
				'type'     => self::FIELD_COLOR_PICKER,
				'value'    => '',
				'selector' => [
					'{{SELECTOR}} .sq-toggle-tab' => 'color: {{VALUE}}',
				]
			]
		);

		$fields_3[] = new EditorSectionField(
			[
				'label'    => 'Active color',
				'name'     => 'title_color_a_field',
				'type'     => self::FIELD_COLOR_PICKER,
				'value'    => '',
				'selector' => [
					'{{SELECTOR}} .sq-toggle-tab.active' => 'color: {{VALUE}}',
				]
			]
		);

		$fields_3[] = new EditorSectionField(
			[
				'label' => 'Typography',
				'name'  => 'title_typography_switch_field',
				'type'  => self::FIELD_SWITCH,
				'value' => [
					[
						'label'   => '',
						'value'   => 'show',
						'checked' => false,
						'trigger' => [
							'section' => [],
							'field'   => [
								'title_font_family_field',
								'title_font_size_field',
								'title_font_weight_field',
								'title_font_transform_field',
								'title_font_type_field',
								'title_letter_spacing_field'
							]
						]
					]
				]
			]
		);

		$fields_3[] = new EditorSectionField(
			[
				'label'      => 'Font family',
				'name'       => 'title_font_family_field',
				'visibility' => false,
				'type'       => self::FIELD_FONT_FAMILY,
				'value'      => '',
				'selector'   => [
					'{{SELECTOR}} .sq-toggle-tab' => 'font-family: {{VALUE}}'
				]
			]
		);

		$fields_3[] = new EditorSectionField(
			[
				'label'      => 'Font size',
				'name'       => 'title_font_size_field',
				'visibility' => false,
				'type'       => self::FIELD_INPUT_NUMBER,
				'value'      => '14',
				'units'      => [
					[
						'type'   => 'px',
						'active' => true
					],
					[
						'type'   => 'em',
						'active' => false
					]
				],
				'selector'   => [
					'{{SELECTOR}} .sq-toggle-tab' => 'font-size: {{VALUE}}{{UNIT}}'
				]
			]
		);

		$fields_3[] = new EditorSectionField(
			[
				'label'      => 'Font weight',
				'name'       => 'title_font_weight_field',
				'visibility' => false,
				'type'       => self::FIELD_DROPDOWN,
				'value'      => [
					[
						'label'    => '100',
						'value'    => '100',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '200',
						'value'    => '200',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '300',
						'value'    => '300',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '400',
						'value'    => '400',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '500',
						'value'    => '500',
						'selected' => true,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '600',
						'value'    => '600',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '700',
						'value'    => '700',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '800',
						'value'    => '800',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '900',
						'value'    => '900',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					]
				],
				'selector'   => [
					'{{SELECTOR}} .sq-toggle-tab' => 'font-weight: {{VALUE}}'
				]
			]
		);

		$fields_3[] = new EditorSectionField(
			[
				'label'      => 'Text transform',
				'name'       => 'title_font_transform_field',
				'visibility' => false,
				'type'       => self::FIELD_DROPDOWN,
				'value'      => [
					[
						'label'    => 'Initial',
						'value'    => 'initial',
						'selected' => true,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => 'Uppercase',
						'value'    => 'uppercase',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => 'Lowercase',
						'value'    => 'lowercase',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => 'Capitalize',
						'value'    => 'capitalize',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					]
				],
				'selector'   => [
					'{{SELECTOR}} .sq-toggle-tab' => 'text-transform: {{VALUE}}'
				]
			]
		);

		$fields_3[] = new EditorSectionField(
			[
				'label'      => 'Text style',
				'name'       => 'title_font_type_field',
				'visibility' => false,
				'type'       => self::FIELD_DROPDOWN,
				'value'      => [
					[
						'label'    => 'Normal',
						'value'    => 'normal',
						'selected' => true,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => 'Italic',
						'value'    => 'italic',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => 'Oblique',
						'value'    => 'oblique',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					]
				],
				'selector'   => [
					'{{SELECTOR}} .sq-toggle-tab' => 'font-style: {{VALUE}}'
				]
			]
		);

		$fields_3[] = new EditorSectionField(
			[
				'label'      => 'Letter spacing',
				'name'       => 'title_letter_spacing_field',
				'visibility' => false,
				'type'       => self::FIELD_INPUT_NUMBER,
				'value'      => '1',
				'units'      => [
					[
						'type'   => 'px',
						'active' => true
					],
					[
						'type'   => 'em',
						'active' => false
					]
				],
				'selector'   => [
					'{{SELECTOR}} .sq-toggle-tab' => 'letter-spacing: {{VALUE}}{{UNIT}}'
				]
			]
		);

		$fields_4 = [];

		$fields_4[] = new EditorSectionField(
			[
				'label'    => 'Color',
				'name'     => 'content_color_n_field',
				'type'     => self::FIELD_COLOR_PICKER,
				'value'    => '',
				'selector' => [
					'{{SELECTOR}} .sq-inner-tab' => 'color: {{VALUE}}',
				]
			]
		);

		$fields_4[] = new EditorSectionField(
			[
				'label' => 'Typography',
				'name'  => 'content_typography_switch_field',
				'type'  => self::FIELD_SWITCH,
				'value' => [
					[
						'label'   => '',
						'value'   => 'show',
						'checked' => false,
						'trigger' => [
							'section' => [],
							'field'   => [
								'content_font_family_field',
								'content_font_size_field',
								'content_font_weight_field',
								'content_font_transform_field',
								'content_font_type_field',
								'content_letter_spacing_field'
							]
						]
					]
				]
			]
		);

		$fields_4[] = new EditorSectionField(
			[
				'label'      => 'Font family',
				'name'       => 'content_font_family_field',
				'visibility' => false,
				'type'       => self::FIELD_FONT_FAMILY,
				'value'      => '',
				'selector'   => [
					'{{SELECTOR}} .sq-inner-tab' => 'font-family: {{VALUE}}'
				]
			]
		);

		$fields_4[] = new EditorSectionField(
			[
				'label'      => 'Font size',
				'name'       => 'content_font_size_field',
				'visibility' => false,
				'type'       => self::FIELD_INPUT_NUMBER,
				'value'      => '14',
				'units'      => [
					[
						'type'   => 'px',
						'active' => true
					],
					[
						'type'   => 'em',
						'active' => false
					]
				],
				'selector'   => [
					'{{SELECTOR}} .sq-inner-tab' => 'font-size: {{VALUE}}{{UNIT}}'
				]
			]
		);

		$fields_4[] = new EditorSectionField(
			[
				'label'      => 'Font weight',
				'name'       => 'content_font_weight_field',
				'visibility' => false,
				'type'       => self::FIELD_DROPDOWN,
				'value'      => [
					[
						'label'    => '100',
						'value'    => '100',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '200',
						'value'    => '200',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '300',
						'value'    => '300',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '400',
						'value'    => '400',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '500',
						'value'    => '500',
						'selected' => true,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '600',
						'value'    => '600',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '700',
						'value'    => '700',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '800',
						'value'    => '800',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => '900',
						'value'    => '900',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					]
				],
				'selector'   => [
					'{{SELECTOR}} .sq-inner-tab' => 'font-weight: {{VALUE}}'
				]
			]
		);

		$fields_4[] = new EditorSectionField(
			[
				'label'      => 'Text transform',
				'name'       => 'content_font_transform_field',
				'visibility' => false,
				'type'       => self::FIELD_DROPDOWN,
				'value'      => [
					[
						'label'    => 'Initial',
						'value'    => 'initial',
						'selected' => true,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => 'Uppercase',
						'value'    => 'uppercase',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => 'Lowercase',
						'value'    => 'lowercase',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => 'Capitalize',
						'value'    => 'capitalize',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					]
				],
				'selector'   => [
					'{{SELECTOR}} .sq-inner-tab' => 'text-transform: {{VALUE}}'
				]
			]
		);

		$fields_4[] = new EditorSectionField(
			[
				'label'      => 'Text style',
				'name'       => 'content_font_type_field',
				'visibility' => false,
				'type'       => self::FIELD_DROPDOWN,
				'value'      => [
					[
						'label'    => 'Normal',
						'value'    => 'normal',
						'selected' => true,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => 'Italic',
						'value'    => 'italic',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					],
					[
						'label'    => 'Oblique',
						'value'    => 'oblique',
						'selected' => false,
						'trigger'  => [
							'section' => [],
							'field'   => []
						]
					]
				],
				'selector'   => [
					'{{SELECTOR}} .sq-inner-tab' => 'font-style: {{VALUE}}'
				]
			]
		);

		$fields_4[] = new EditorSectionField(
			[
				'label'      => 'Letter spacing',
				'name'       => 'content_letter_spacing_field',
				'visibility' => false,
				'type'       => self::FIELD_INPUT_NUMBER,
				'value'      => '1',
				'units'      => [
					[
						'type'   => 'px',
						'active' => true
					],
					[
						'type'   => 'em',
						'active' => false
					]
				],
				'selector'   => [
					'{{SELECTOR}} .sq-inner-tab' => 'letter-spacing: {{VALUE}}{{UNIT}}'
				]
			]
		);

		$this->addSection( new EditorSection( [
			'title' => $this->name,
			'name'  => 'option-section'
		] ), $fields );

		$this->addSection( new EditorSection( [
			'title' => 'Tabs',
			'name'  => 'style-tabs'
		] ), $fields_2, 'tab_style_tabs' );

		$this->addSection( new EditorSection( [
			'title' => 'Style',
			'name'  => 'style-title'
		] ), $fields_3, 'tab_style_title' );

		$this->addSection( new EditorSection( [
			'title' => 'Style',
			'name'  => 'style-content'
		] ), $fields_4, 'tab_style_content' );

	}
}
