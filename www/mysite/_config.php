<?php

global $project;
$project = 'mysite';

global $database;
$database = '';

require_once(BASE_PATH . '/conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_GB');
