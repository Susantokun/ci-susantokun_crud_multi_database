<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : susantokun.com@gmail.com
 * | Filename        : database.php
 * | Instagram       : @susantokun
 * | Website         : http://www.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Saturday, 2nd March 2019 8:04:04 pm
 * | Last Modified   : Saturday, 2nd March 2019 8:20:04 pm
 * |==============================================================|
 */

$active_group = 'default';
$query_builder = true;

$db['default'] = array(
    'dsn' => '',
    'hostname' => 'localhost',
    'username' => 'susantokun',
    'password' => 'susantokun',
    'database' => 'susantokun_ci_crud_multi_database_1',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => array(),
    'save_queries' => true,
);

$db['database_2'] = array(
    'dsn' => '',
    'hostname' => 'localhost',
    'username' => 'susantokun',
    'password' => 'susantokun',
    'database' => 'susantokun_ci_crud_multi_database_2',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => array(),
    'save_queries' => true,
);
