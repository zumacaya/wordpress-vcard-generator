<?php
/**
* Plugin Name: VCard Generator
* Plugin URI: http://toledo.es/
* Description: Create a link to download a vCard file with the selected parameters
* Version: 0.9
* Author: Eduardo parrado (CMI Ayto Toledo) 
* License: GPLv3
*/


add_shortcode('vCardGenerator', 'addVCard');

function addVCard($atts) {
	extract( shortcode_atts( array(
		'cssclass' => '',
		'linktext' => '',
		'filename' => '',
		'firstname' => '',
		'lastname' => '',
		'company' => '',
		'jobtitle' => '',
		'email' => '',
		'phonenumber' => '',
		'url' => '',
		'photourl' => '',
		'addressname' => '',
		'addressstreet' => '',
		'addresscity' => '',
		'addressregion' => '',
		'addresszip' => '',
		'addresscountry' => '',
		'note' => '',
	), $atts ) );

	$data = array(
		'filename' => $filename,
		'firstname' => $firstname,
		'lastname' => $lastname,
		'company' => $company,
		'jobTitle' => $jobtitle,
		'phoneNumber' => $phonenumber,
		'email' => $email,
		'url' => $url,
		'photoURL' => $photourl,
		'addressName' => $addressname,
		'addressStreet' => $addressstreet,
		'addressCity' => $addresscity,
		'addressRegion' => $addressregion,
		'addressZIP' => $addresszip,
		'addressCountry' => $addresscountry,
		'note' => $note);

	$url = plugin_dir_url(__FILE__) . 'vcard-generator-file.php?' . http_build_query($data);

	echo '<a class="'. $cssclass .'" target="_blank" href="' . $url .'">'. $linktext .'</a>';
}
