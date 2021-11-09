<?php defined('BASEPATH') OR exit('No direct script access allowed');

// $config = array(
//     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//     'smtp_host' => 'ssl://smtp.googlemail.com', 
//     'smtp_port' => 465,
//     'smtp_user' => 'rohit.jadhav0403@gmail.com',
//     'smtp_pass' => 'Abcdef!@#0403',
//     'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//     'mailtype' => 'html', //plaintext 'text' mails or 'html'
//     'smtp_timeout' => '7', //in seconds
//     'charset' => 'iso-8859-1',
//     'wordwrap' => TRUE
// );

$config['protocol']         = 'smtp'; // 'mail', 'sendmail', or 'smtp'
$config['mailpath']         = '/usr/sbin/sendmail';
$config['smtp_host']        = 'ssl://smtp.googlemail.com'; // if you are using gmail
$config['smtp_user']        = 'projectpatilci@gmail.com';
$config['smtp_pass']        = 'Pt@12345'; // App specific password
$config['smtp_port']        = 465; // for gmail
$config['smtp_timeout']     = 5;  
?>