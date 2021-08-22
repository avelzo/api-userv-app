<?php

// Phpunit software test environment

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Database
$settings['db']['database'] = 'slim_skeleton_test';
$settings['db']['username'] = 'ServApiUsr2021';
$settings['db']['password'] = 'dbApiUsrPwd29200';

// Mocked Logger settings
$settings['logger'] = [
    'path' => '',
    'level' => 0,
    'test' => new \Psr\Log\NullLogger(),
];
