<?php

// database acces configuration for sqlite
// ---------------------------------------------

//database type : mysql, sqlite, pgsql, etc
define('THELIA_DB_ADAPTER','sqlite');

// database login
define('THELIA_DB_USER', '__DB_LOGIN__');

// database password
define('THELIA_DB_PASSWORD', '__DB_PASSWORD__');

define('THELIA_DB_DSN','sqlite:__DB_FILE__');

define('THELIA_DB_CACHE', 'file');
//define('THELIA_DB_CACHE', 'apc');
//define('THELIA_DB_CACHE', 'memcache');
//define('THELIA_DB_CACHE', 'session');
//define('THELIA_DB_CACHE', 'include');