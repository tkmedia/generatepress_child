<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5dd161e3cf1c7',
	'title' => 'Testimonial slider block',
	'fields' => array(
		array(
			'key' => 'field_5dd162063763f',
			'label' => 'Testimonials',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5dd1666453c2e',
			'label' => 'Slider style',
			'name' => 'tes_sy',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'choices' => array(
				'style1' => 'Testimonial with project',
				'style2' => 'Testimonials',
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5dd166ae53c2f',
			'label' => 'Testimonial Image size',
			'name' => 'tes_ct',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'choices' => array(
				'menu-50' => 'Cut 50px',
				'menu-100' => 'Cut 100px',
				'thumbnail' => 'Cut 150px',
				'block-300' => 'Cut 300px',
				'500c' => 'Cut 500px',
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5dd1672e53c30',
			'label' => 'Number of boxes to display',
			'name' => 'tes_cu',
			'type' => 'number',
			'instructions' => 'Between 1-3',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => 1,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => 1,
			'max' => 3,
			'step' => '',
		),
		array(
			'key' => 'field_5dd1680353c35',
			'label' => 'Testimonials',
			'name' => 'tes_s',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'acfe_repeater_stylised_button' => 0,
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5dd1681f53c36',
					'label' => 'Title',
					'name' => 'tes_st',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5dd1683453c37',
					'label' => 'Image',
					'name' => 'tes_si',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'acfe_uploader' => 'wp',
					'acfe_thumbnail' => 0,
					'return_format' => 'id',
					'preview_size' => 'menu-50',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5dd1684f53c38',
					'label' => 'Content',
					'name' => 'tes_sc',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 4,
					'new_lines' => 'br',
					'acfe_textarea_code' => 0,
				),
				array(
					'key' => 'field_5dd1686953c39',
					'label' => 'Name',
					'name' => 'tes_sn',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5dd1687e53c3a',
					'label' => 'Position',
					'name' => 'tes_sp',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5dd16c4168d67',
					'label' => 'Subtitle',
					'name' => 'tes_sst',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5dd1689053c3b',
					'label' => 'Choose project',
					'name' => 'tes_spr',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5dd1666453c2e',
								'operator' => '==',
								'value' => 'style1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'post_type' => array(
						0 => 'page',
					),
					'taxonomy' => '',
					'allow_null' => 0,
					'multiple' => 0,
					'return_format' => 'object',
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => '0',
					),
					'ui' => 1,
				),
			),
		),
		array(
			'key' => 'field_5dd161fa3763e',
			'label' => 'Block Title',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5dd1659d53c27',
			'label' => 'Title',
			'name' => 'tes_t',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5dd165ab53c28',
			'label' => 'Title - font size',
			'name' => 'tes_tsz',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'px',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5dd165cc53c29',
			'label' => 'Title color',
			'name' => 'tes_tcl',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
		),
		array(
			'key' => 'field_5dd165df53c2a',
			'label' => 'Title align',
			'name' => 'tes_tal',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'choices' => array(
				'start' => 'start',
				'center' => 'center',
				'end' => 'end',
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5dd1660353c2b',
			'label' => 'Subtitle',
			'name' => 'tes_st',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
			'acfe_textarea_code' => 0,
		),
		array(
			'key' => 'field_5dd1661753c2c',
			'label' => 'Subtitle - font size',
			'name' => 'tes_sts',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'px',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5dd1663053c2d',
			'label' => 'Subtitle color',
			'name' => 'tes_stc',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
		),
		array(
			'key' => 'field_5dd167d053c34',
			'label' => 'Design',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5dd1676253c31',
			'label' => 'Testimonial Title Item Color',
			'name' => 'tes_tcl',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
		),
		array(
			'key' => 'field_5dd1678653c32',
			'label' => 'Testimonial Content Item Color',
			'name' => 'tes_ccl',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
		),
		array(
			'key' => 'field_5dd167a953c33',
			'label' => 'Name Item Color',
			'name' => 'tes_ncl',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/tkmb-testimonial-slider',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_permissions' => '',
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1574005905,
));

endif;