<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Facebook Application Id
|--------------------------------------------------------------------------
|
| Facebook Application Id
|
|
*/
$config['api_id']       = '';
/*
|--------------------------------------------------------------------------
| Facebook Application Secret Code
|--------------------------------------------------------------------------
|
| Facebook Application Secret Goes Here
|
*/
$config['api_secret']   = '';
/*
|--------------------------------------------------------------------------
| Redirect Url
|--------------------------------------------------------------------------
|
| Facebook Redirect Url could be used to page receives responce
|
*/
$config['redirect_url'] = base_url('index.php/fb/user_login');
/*
|--------------------------------------------------------------------------
| Logout Url
|--------------------------------------------------------------------------
|
| Facebook Logout url could be used to redirect user on logout
|
*/
$config['logout_url']   = base_url('index.php/fb/');
/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
|
| Facebook Permissions could be used to retrieve permissions on login 
|
*/
$config['permissions']  = array('email','public_profile','user_posts');