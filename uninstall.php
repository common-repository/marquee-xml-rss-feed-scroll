<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option('mxrf_title');
delete_option('mxrf_scrollamount');
delete_option('mxrf_scrolldelay');
delete_option('mxrf_direction');
delete_option('mxrf_style');
delete_option('mxrf_rss1');
delete_option('mxrf_rss2');
delete_option('mxrf_rss3');
delete_option('mxrf_rss4');
delete_option('mxrf_rss5');
delete_option('mxrf_spliter');
delete_option('mxrf_target');

 
// for site options in Multisite
delete_site_option('mxrf_title');
delete_site_option('mxrf_scrollamount');
delete_site_option('mxrf_scrolldelay');
delete_site_option('mxrf_direction');
delete_site_option('mxrf_style');
delete_site_option('mxrf_rss1');
delete_site_option('mxrf_rss2');
delete_site_option('mxrf_rss3');
delete_site_option('mxrf_rss4');
delete_site_option('mxrf_rss5');
delete_site_option('mxrf_spliter');
delete_site_option('mxrf_target');