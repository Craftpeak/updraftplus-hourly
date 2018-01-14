
<?php
/**
 * Plugin Name:       UpdraftPlus Hourly
 * Plugin URI:        https://github.com/Craftpeak/updraftplus-hourly/
 * Description:       Adds the hourly interval to UpdraftPlus
 * Version:           1.0.0
 * Author:            Craftpeak
 * Author URI:        https://craftpeak.com/
 * Text Domain:       cp
 * Domain Path:       /lang
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Add the hourly interval to UpdraftPlus
 *
 * @link: https://updraftplus.com/faqs/how-can-i-add-any-new-scheduling-interval-to-updraftplus/
 */
add_filter( 'updraftplus_backup_intervals', function( $ints ) {
	$ints['hourly'] = 'Hourly';
	return $ints;
} );

add_filter( 'cron_schedules', function( $schedules ) {
	$schedules['hourly'] = array( 'interval' => 3600, 'display' => 'Once Hourly' );
	return $schedules;
}, 31 );
