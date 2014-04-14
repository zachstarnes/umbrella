<?php

//---------------------------------------------------------------------------
// Configuration settings for Umbrella
//---------------------------------------------------------------------------
//
// This file contains any configuration settings for the app like error
// reporting and the location of the app installtion.
//

//---------------------------------------------------------------------------
// Error Reporting
//---------------------------------------------------------------------------
error_reporting(E_ALL);
ini_set('display_errors', 1);

//---------------------------------------------------------------------------
// Database connection credintials
//---------------------------------------------------------------------------
define('DB_TYPE', 'myspl');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'umbrella');
define('DB_USER', 'root');
define('DB_PASS', '');