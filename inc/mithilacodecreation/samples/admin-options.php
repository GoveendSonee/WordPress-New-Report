<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_prefix_my_options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Birgunj General Page',
  'menu_slug'  => 'csf-demo',
) );

//
// Create a Social Page
//

CSF::createSection( $prefix, array(
  'id'    => 'social_media_fields',
  'title' => 'Social Media Section',
  'icon'  => 'fas fa-plus-circle',
));

// For Social Page 

CSF::createSection( $prefix, array(
  'parent' => 'social_media_fields',
  'title' => 'Add Social Media link',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    array(
      'id'       => 'social_media_fields_facebook',
      'type'     => 'text',
      'title'    => 'Facebook',
      'default' => 'https://facebook.com/',
    ),

    array(
      'id'       => 'social_media_fields_instagram',
      'type'     => 'text',
      'title'    => 'Instagram',
      'default' => 'https://instagram.com/',
    ),

    array(
      'id'       => 'social_media_fields_twitter',
      'type'     => 'text',
      'title'    => 'Twitter',
      'default' => 'https://twitter.com/',
    ),

    array(
      'id'       => 'social_media_fields_youtube',
      'type'     => 'text',
      'title'    => 'Youtube',
      'default' => 'https://youtube.com/',
    )

)));


/**
 * Quick Supports
 */
CSF::createSection( $prefix, array(
  'id'    => 'gallery_trip',
  'title' => 'Advertisement Image',
  'icon'  => 'fas fa-plus-circle',
));

CSF::createSection( $prefix, array(
  'parent' => 'gallery_trip',
  'title'  => 'Add Banner Image',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    array(
      'id'    => 'gallery_iconfields_header',
      'type'  => 'upload',
      'title' => 'Ads One Header',
    ),

    array(
      'id'    => 'gallery_iconfields_one',
      'type'  => 'upload',
      'title' => 'Ads One BS',
    ),

    array(
      'id'    => 'gallery_iconfields_two',
      'type'  => 'upload',
      'title' => 'Ads Two BS',
    ),
    
    array(
      'id'    => 'gallery_iconfields_three',
      'type'  => 'upload',
      'title' => 'Ads Three BS',
    ),
    
    array(
      'id'    => 'gallery_iconfields_four',
      'type'  => 'upload',
      'title' => 'Ads Four BS',
    ),
    
    array(
      'id'    => 'gallery_iconfields_square_one',
      'type'  => 'upload',
      'title' => 'Ads Single Page First Square',
    ),
    
    array(
      'id'    => 'gallery_iconfields_square_two',
      'type'  => 'upload',
      'title' => 'Ads Single Page Two Square',
    ) 
    
) ) );

//
// Create a footer Page
//

CSF::createSection( $prefix, array(
  'id'    => 'footer_us_fields',
  'title' => 'Footer Us Section',
  'icon'  => 'fas fa-plus-circle',
));

// For footer Page 

CSF::createSection( $prefix, array(
  'parent' => 'footer_us_fields',
  'title'  => 'प्रकाशक तथा संम्पादक',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    array(
      'id'    => 'footer_name_heading',
      'type'  => 'text',
      'title' => 'Heading',
    ),

    array(
      'id'    => 'footer_name_one',
      'type'  => 'text',
      'title' => 'Name First',
    ),

    array(
      'id'    => 'footer_name_two',
      'type'  => 'text',
      'title' => 'Name Second',
    ),

    array(
      'id'    => 'footer_name_three',
      'type'  => 'text',
      'title' => 'Name Third',
    )

)));

CSF::createSection( $prefix, array(
  'parent' => 'footer_us_fields',
  'title'  => 'सम्पर्क',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    array(
      'id'    => 'footer_two_olumn_address',
      'type'  => 'text',
      'title' => 'Address',
    ),

    array(
      'id'    => 'footer_two_olumn_phonenumber',
      'type'  => 'text',
      'title' => 'Phone Number',
    ),

    array(
      'id'    => 'footer_two_olumn_email_one',
      'type'  => 'text',
      'title' => 'Email Id First',
    ),

    array(
      'id'    => 'footer_two_olumn_email_two',
      'type'  => 'text',
      'title' => 'Email Id Second',
    ),

    array(
      'id'    => 'footer_two_olumn_dartanumber_',
      'type'  => 'text',
      'title' => 'सूचना विभाग दर्ता नं.',
    )

)));
