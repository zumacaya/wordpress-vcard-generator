# wordpress-vcard-generator

This Wordpress Plugin generates a downloadable vCard file. (.vcf format).

This is particularly useful on mobile devices. The users can add a news contacts with a simple click.

## How to use

Just two simple steps

1. Download and install the plugin in Wordpress
2. Add the 'vCardGenerator' Shortcode

## Shortcode options

The basic shortcode is the next: [vCardGenerator] , but this only will generate a empty vCard file!

Yoy can add the next parameters:

- **linktext** : Text that will appear in the download file link. You can add HTML (icons...)
- **cssclass** : You can specify a css class for the link text
- **filename** : Name of the field that will be generated
- **firstname** : The contact name
- **lastname** : The contact last name
- **company** : The company contact
- **jobtitle** :The job position in the company of the contact
- **email** : The contact email
- **phonenumber** : The contact Phone number
- **url** : A website of the contact
- **photourl** : Main url photography of the contact (should be a complete URL)
- **addressname** : The address denomination ('Home', 'Work'...)
- **addressstreet** : The street  of the contact
 **addresscity** : The city  of the contact
 **addressregion** : The region  of the contact
 **addresszip** : The ZIP code  of the contact
 **addresscountry** : The country of the contact
 **note** : Some clarifications or additional information about the contact
 
 
A example could be: 

[vCardGenerator linktext='<i class="fa fa-user-plus"></i> Add to contact</a>' cssClass='' filename='Mike Contact' company='Google' addressStreet='Fake Street 123' addressCity='San Francisco' addressZIP='55500' addressRegion='California' url='http://example.com'  email='mike@example.com'  photoURL='http://example.com/mike.jpg' note='Additional Info'] 

## Issues

For bug reporting or code discussions.

## Future working
- Allow specify multiple phone numbers, emails and urls

NOTE: This Wordpress plugin use as base the work of  [jeroendesloovere vCard PHP Class](https://github.com/jeroendesloovere/vcard).

