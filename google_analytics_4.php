<?php
/**
 * Add Google Analytics 4 tracking code to Zenphoto.
 *
 * @author Hokkaidosm
 * @package plugin
 * @subpackage seo
 */

$plugin_is_filter = 5 | THEME_PLUGIN;
$plugin_description = gettext_pl('Add Google Analytics 4 tracking code to Zenphoto.', 'google_analytics_4');
$plugin_author = 'Hokkaidosm';
$plugin_version = '1.0';
$plugin_siteurl = 'https://github.com/Hokkaidosm/ZPGoogleAnalytics4';
$plugin_category = gettext('SEO');
$plugin_notice = gettext_pl('Google Analytics 4 properties need to be created.', 'google_analytics_4');

$option_interface = 'ZPGoogleAnalytics4Options';

zp_register_filter('theme_head', 'ZPGoogleAnalytics4::putGaTag');

class ZPGoogleAnalytics4Options {
  function getOptionsSupported() {
    $options = array(
      gettext_pl('Tracking ID', 'google_analytics_4') => array(
        'key' => 'ZPGoogleAnalytics4_trackingID',
        'type' => OPTION_TYPE_TEXTBOX,
        'order' => 0,
        'desc' => gettext_pl('Tracking ID of Google Analytics 4', 'google_analytics_4')
      )
    );
    return $options;
  }
  
  function handleOption($option, $currentValue) {
    // do nothing
  }
}

class ZPGoogleAnalytics4 {
  function validateTrackingID($id) {
    if (preg_match('/^UA-[0-9]{3,9}-[0-9]$/', $id)) {
      return true;
    } else if (preg_match('/^G-[A-Z0-9]+$/', $id)) {
      return true;
    }
    return false;
  }
  
  function putGaTag() {
    $gaId = getOption('ZPGoogleAnalytics4_trackingID');
    if (!self::validateTrackingID($gaId)) {
      return;
    }
    ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo($gaId) ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo($gaId) ?>');
</script>
    <?php
  }
}
