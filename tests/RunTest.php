<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace Dframe\Tests;

use Bootstrap;
use Dframe\Loader\Loader;
use Dframe\Router\Router;
use PHPUnit\Framework\TestCase;

ini_set('session.use_cookies', "0");

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/Bootstrap.php';
require_once __DIR__ . '/../web/config.php';

/**
 * Testing project.
 *
 * @author Sławek Kaleta <slaszka@gmail.com>
 */
class RunTest extends TestCase
{
    public function testCreateController()
    {
        $Bootstrap = new Bootstrap();
        $Bootstrap->router = new Router();

        $Loader = new Loader($Bootstrap);
        $PageController = $Loader->loadController('Page');

        $this->assertEquals('{"code":200,"data":[]}', $PageController->json()->getBody());
    }
}
