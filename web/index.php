<?php

/**
 * DframeFramework
 * Copyright (c) Firstname Lastname
 *
 * @license https://github.com/dusta/Dframe/blob/master/LICENCE
 */

use Dframe\Core;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/Bootstrap.php';
$core = new Core();
$core->run();
