<?php
/**
 * This script is a configuration file for the date plugin.
 * You can use it as a master for other platform plugins (course plugins are slightly different).
 * These settings will be used in the administration interface for plugins (Chamilo configuration settings->Plugins)
 * @package chamilo.plugin
 * @author Julio Montoya <gugli100@gmail.com>
 */
/**
 * Plugin details (must be present)
 */

//the plugin title
$plugin_info['title'] = 'Add a button to login using Shibboleth';

//the comments that go with the plugin
$plugin_info['comment'] = "If Shibboleth is configured, this plugin add a text and a button on the login page to login with Shibboleth. Configure plugin to add title, comment and logo.";
//the plugin version
$plugin_info['version'] = '1.0';
//the plugin author
$plugin_info['author'] = 'Hubert Borderiou';

//the plugin configuration
$form = new FormValidator('add_shibboleth_button_form');
$form->addElement(
    'text',
    'shibboleth_button_label',
    'shibboleth connexion title',
    ''
);
$form->addElement(
    'text',
    'shibboleth_button_comment',
    'shibboleth connexion description',
    ''
);
$form->addElement(
    'text',
    'shibboleth_image_url',
    'Logo URL if any (image, 50px height)'
);
$form->addButtonSave(get_lang('Save'), 'submit_button');
$tab_default_add_shibboleth_login_button_shibboleth_image_url =
$defaults = array();
$defaults['shibboleth_button_label'] = api_get_plugin_setting(
    'add_shibboleth_login_button',
    'add_shibboleth_login_button_shibboleth_button_label'
);
$defaults['shibboleth_button_comment'] = api_get_plugin_setting(
    'add_shibboleth_login_button',
    'add_shibboleth_login_button_shibboleth_button_comment'
);
$defaults['shibboleth_image_url'] = api_get_plugin_setting(
    'add_shibboleth_login_button',
    'add_shibboleth_login_button_shibboleth_image_url'
);

$form->setDefaults($defaults);
//display form
$plugin_info['settings_form'] = $form;

//set the templates that are going to be used
$plugin_info['templates'] = array('template.html.twig');
