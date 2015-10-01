<?php



function judy_form_system_theme_settings_alter(&$form, $form_state) {



  $theme_path = drupal_get_path('theme', 'judy');

  $form['settings'] = array(

      '#type' => 'vertical_tabs',

      '#title' => t('Theme settings'),

      '#weight' => 2,

      '#collapsible' => TRUE,

      '#collapsed' => FALSE,

	  '#attached' => array(

					'css' => array(drupal_get_path('theme', 'judy') . '/css/drupalet_base/admin.css'),

					'js' => array(

						drupal_get_path('theme', 'judy') . '/js/drupalet_admin/adminvideothammy.com',
            drupal_get_path('theme', 'judy') . '/js/drupalet_admin/admin.js',

					),

			),

  );



  $form['settings']['general_setting'] = array(

      '#type' => 'fieldset',

      '#title' => t('General Settings'),

      '#collapsible' => TRUE,

      '#collapsed' => FALSE,

  );



  $form['settings']['general_setting']['general_setting_tracking_code'] = array(

      '#type' => 'textarea',

      '#title' => t('Tracking Code 1'),

      '#default_value' => theme_get_setting('general_setting_tracking_code', 'judy'),

  );





   $form['settings']['header'] = array(

      '#type' => 'fieldset',

      '#title' => t('Header settings'),

      '#collapsible' => TRUE,

      '#collapsed' => FALSE,

  );



   $form['settings']['header']['text_logo'] = array(

      '#type' => 'textarea',

      '#title' => t('Logo text replace logo image'),

      '#default_value' => theme_get_setting('text_logo', 'judy'),

  );



  $form['settings']['footer'] = array(

      '#type' => 'fieldset',

      '#title' => t('Footer settings'),

      '#collapsible' => TRUE,

      '#collapsed' => FALSE,

  );



  $form['settings']['footer']['footer_copyright_message'] = array(

      '#type' => 'textarea',

      '#title' => t('Footer copyright message'),

      '#default_value' => theme_get_setting('footer_copyright_message', 'judy'),

  );



	$form['settings']['custom_css'] = array(

		  '#type' => 'fieldset',

		  '#title' => t('Custom CSS'),

		  '#collapsible' => TRUE,

		  '#collapsed' => FALSE,

	  );



	$form['settings']['custom_css']['custom_css'] = array(

		  '#type' => 'textarea',

		  '#title' => t('Custom CSS'),

		  '#default_value' => theme_get_setting('custom_css', 'judy'),

		  '#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')

	  );



  $form['settings']['skin'] = array(



        '#type' => 'fieldset',



        '#title' => t('Switcher Style'),



        '#collapsible' => TRUE,



        '#collapsed' => FALSE,



    );





  //Disable Switcher style;



  $form['settings']['skin']['judy_disable_switch'] = array(



      '#title' => t('Switcher style'),



      '#type' => 'select',



      '#options' => array('on' => t('ON'), 'off' => t('OFF')),



      '#default_value' => theme_get_setting('judy_disable_switch', 'judy'),



  );

  $form['settings']['skin']['built_in_skins'] = array(

      '#type' => 'radios',

    '#title' => t('Built-in Skins'),

    '#options' => array(

        'default.css' => t('Default'),

        'bridge.css' => t('Bridge'),

        'cyan.css' => t('Cyan'),

        'darkred.css' => t('Darkred'),

        'green.css' => t('Green'),

        'lightblue.css' => t('Lightblue'),

        'orange.css' => t('Orange'),

        'pink.css' => t('Pink'),

        'purple.css' => t('Purple'),

        'red.css' => t('Red'),

        'slate.css' => t('Slate'),

        'yellow.css' => t('Yellow'),

        'blue.css' => t('Blue'),







    ),



    '#default_value' => theme_get_setting('built_in_skins','judy')

  );





}