<?php
/**
 * @package   Basic OpenCart AutoComplete for PHPStorm
 * @version   1.1
 * @author    Vitor Reis - Loja Dev5™
 * @link      https://dev5.com.br
 */

# Define [config.php]
const VERSION           = '3.0.3.8';
const HTTP_SERVER       = '{protocol}://yoursite/{|admin/}';
const HTTP_CATALOG      = '{protocol}://yoursite/';
const HTTPS_SERVER      = '{protocol}://yoursite/{|admin/}';
const HTTPS_CATALOG     = '{protocol}://yoursite/';
const DIR_APPLICATION   = './opencart/{admin|catalog}/';
const DIR_SYSTEM        = './opencart/system/';
const DIR_IMAGE         = './opencart/image/';
const DIR_STORAGE       = DIR_SYSTEM . 'storage/';
const DIR_CATALOG       = 'catalog/';
const DIR_LANGUAGE      = DIR_APPLICATION . 'language/';
const DIR_TEMPLATE      = DIR_APPLICATION . 'view/template/';
const DIR_CONFIG        = DIR_SYSTEM . 'config/';
const DIR_CACHE         = DIR_STORAGE . 'cache/';
const DIR_DOWNLOAD      = DIR_STORAGE . 'download/';
const DIR_LOGS          = DIR_STORAGE . 'logs/';
const DIR_MODIFICATION  = DIR_STORAGE . 'modification/';
const DIR_SESSION       = DIR_STORAGE . 'session/';
const DIR_UPLOAD        = DIR_STORAGE . 'upload/';
const DB_DRIVER         = '{DB_DRIVE}';
const DB_HOSTNAME       = '{DB_HOSTNAME}';
const DB_USERNAME       = '{DB_USERNAME}';
const DB_PASSWORD       = '{DB_PASSWORD}';
const DB_DATABASE       = '{DB_DATABASE}';
const DB_PORT           = '{DB_PORT}';
const DB_PREFIX         = '{DB_PREFIX}';
const OPENCART_SERVER   = 'https://www.opencart.com/';

/**
 * @param string $filename
 * @return string
 */
function modification($filename) {}

/**
 * @param string $class
 * @return bool
 */
function library($class) {}

/**
 * @param string $application_config
 * @return void
 */
function start($application_config) {}