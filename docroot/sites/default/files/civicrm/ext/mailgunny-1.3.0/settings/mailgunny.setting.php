<?php
return [
  'mailgun_api_key' => [
    'group_name'  => 'domain',
    'name'        => 'mailgun_api_key',
    'title'       => ts('Mailgun HTTP webhook signing key'),
    'description' => ts('The Mailgun signing key for the sending domain - get it from Mailgun\'s webhooks page for your domain on their website.'),
    'type'        => 'String',
    'add'         => '5.0',
    'html_type'   => 'text',
    'default'     => '',
    'is_domain'   => 1,
    'is_contact'  => 0,
  ],

  'mailgun_native_send' => [
    'group_name'  => 'domain',
    'name'        => 'mailgun_native_send',
    'title'       => ts('Mailgun Native Send header'),
    'description' => ts('Whether to add a proprietary x-mailgun-native-send header to mail that affects the DKIM and Return-Path domains used.'),
    'type'        => 'Boolean',
    'add'         => '5.0',
    'html_type'   => 'checkbox',
    'default'     => FALSE,
    'is_domain'   => 1,
    'is_contact'  => 0,
  ],

  'mailgun_list_unsubscribe_domain' => [
    'group_name'  => 'domain',
    'name'        => 'mailgun_list_unsubscribe_domain',
    'title'       => ts('Mailgun List-Unsubscribe domain'),
    'description' => ts('CiviMail will provide a List-Unsubscribe header with a mailto: to the original verp@emaildomain address. If this return path would go to Mailgun’s MXs, it won’t work; you need the mailto to point to a mail account Civi can read. Optional, leave blank if unsure.'),
    'type'        => 'String',
    'add'         => '5.0',
    'html_type'   => 'text',
    'default'     => '',
    'is_domain'   => 1,
    'is_contact'  => 0,
  ],
];
