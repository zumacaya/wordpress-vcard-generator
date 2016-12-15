<?php

require_once 'lib/VCard.php';

use JeroenDesloovere\VCard\VCard;

	// Very Simple
	//Extract Values
	$filename = $_GET["filename"];
	$firstname = $_GET["firstname"];
	$lastname = $_GET["lastname"];
	$company = $_GET["company"];
	$jobTitle = $_GET["jobTitle"];
	$phoneNumber = $_GET["phoneNumber"];
	$email = $_GET["email"];
	$url = $_GET["url"];
	$photoURL = $_GET["photoURL"];
	$addressName = $_GET["addressName"];
	$addressStreet = $_GET["addressStreet"];
	$addressCity = $_GET["addressCity"];
	$addressRegion = $_GET["addressRegion"];
	$addressZIP = $_GET["addressZIP"];
	$addressCountry = $_GET["addressCountry"];
	$note = $_GET["note"];

	//  Generate VCard and Download
	$vcard = new VCard();

	$vcard->addName($lastname, $firstname, '', '', '');
	$vcard->addCompany($company);
	$vcard->addJobtitle($jobTitle);
	$vcard->addEmail($email);
	$vcard->addPhoneNumber($phoneNumber, 'PREF;WORK');
	$vcard->addAddress($addressName, '', $addressStreet, $addressCity, $addressRegion, $addressZIP, $addressCountry);
	$vcard->addURL($url);
	$vcard->addPhoto($photoURL);
	$vcard->addNote(strip_tags($note));

	return $vcard->download();
