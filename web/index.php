<?php

/**
 * DframeFramework
 * Copyright (C) Sławomir Kaleta
 *
 * @license https://github.com/dusta/Dframe/blob/master/LICENCE
 */

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/Bootstrap.php';
$core = new \Dframe\Core();
$core->run();
