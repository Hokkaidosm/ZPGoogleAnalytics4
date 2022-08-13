<?php
/**
 * Add Google Analytics 4 tracking code to Zenphoto.
 *
 * @author Hokkaidosm
 * @package plugin
 * @subpackage seo
 */

$plugin_pl = 'ZPGoogleAnalytics4';
$plugin_is_filter = 5 | THEME_PLUGIN;
$plugin_description = gettext_pl('Add Google Analytics 4 tracking code to Zenphoto.', $plugin_pl);
$plugin_author = 'Hokkaidosm';
$plugin_version = '1.0';
$plugin_siteurl = 'https://github.com/Hokkaidosm/ZPGoogleAnalytics4';
$plugin_category = gettext('SEO');
$plugin_notice = gettext_pl('Google Analytics 4 properties need to be created.', $plugin_pl);

$option_interface = 'ZPGoogleAnalytics4Options';

zp_register_filter('theme_head', 'ZPGoogleAnalytics4::putGaTag');

class ZPGoogleAnalytics4Options {
  function getOptionsSupported() {
    $options = array(
      gettext_pl('Tracking ID', $plugin_pl) => array(
        'key' => 'ZPGoogleAnalytics4_trackingID',
        'type' => OPTION_TYPE_TEXTBOX,
        'order' => 0,
        'desc' => gettext_pl('Tracking ID of Google Analytics 4', $plugin_pl)
      )
    );
    return $options;
  }
  
  function handleOption($option, $currentValue) {
    // do nothing
  }
}

class ZPGoogleAnalytics4 {
  function putGaTag() {
    echo('<!-- GATAG : ' + getOption('ZPGoogleAnalytics4_trackingID') + ' -->');
  }
}
