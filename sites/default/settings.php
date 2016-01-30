<?php
/**
 * @file
  * This is the settings.php.
   */

   // Install with the 'minimal' profile for this example.
   $settings['install_profile'] = 'minimal';

   // You should modify the hash_salt so that it is specific to your application.
   $settings['hash_salt'] = 'XK0ic8ltgk0gmFqjFVxRYdhfhVDRazIMtvtkamEUP0BlX9_5rHhNGJUMoxP3mm2Z4_SxtZuKlg';

   /**
    * Default Drupal 8 settings.
     *
      * These are already explained with detailed comments in Drupal's
       * default.settings.php file.
        *
	 * See https://api.drupal.org/api/drupal/sites!default!default.settings.php/8
	  */
	  $databases = array();
	  $config_directories = array();
	  $settings['update_free_access'] = FALSE;
	  $settings['container_yamls'][] = __DIR__ . '/services.yml';

	  // Local settings. These are required for Platform.sh.
	  if (file_exists(__DIR__ . '/settings.local.php')) {
	    include __DIR__ . '/settings.local.php';
	    }
