<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/
$config['protocol'] = 'smtp';

$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_user'] = 'n.thomas@waigeo.fr';
$config['smtp_pass'] = '';
$config['smtp_port'] = 587;
$config['smtp_crypto'] = 'tls';


if (ENVIRONMENT == 'development') {	
    // put smtp dev here
}

$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";


/* End of file email.php */
/* Location: ./application/config/email.php */