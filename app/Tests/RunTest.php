<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace Tests;

use PHPUnit\Framework\TestCase;

ini_set('session.use_cookies', 0);

session_start();

$autoloader = include dirname(__DIR__) . '../../vendor/autoload.php';
require_once dirname(__FILE__) . '/../Bootstrap.php';
require_once dirname(__FILE__) . '/../../web/config.php';

/**
 * Testing project.
 *
 * @author Sławek Kaleta <slaszka@gmail.com>
 */

class RunTest extends TestCase
{
    public function testCreateController()
    {
        $bootstrap = new \Bootstrap();
        $bootstrap->router = new \Dframe\Router();

        $run = new \Dframe\Loader($bootstrap);
        $page = $run->loadController('Page')->returnController;

        $this->assertEquals('{"return":"1"}', $page->json()->getBody());
    }
}
