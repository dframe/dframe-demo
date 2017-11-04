<?php
/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace Tests;
ini_set('session.use_cookies', 0);

session_start();

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') AND class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}
 
$autoloader = include dirname(__DIR__) . '../../vendor/autoload.php';
require_once dirname(__FILE__).'/../Bootstrap.php';
require_once dirname(__FILE__).'/../../web/config.php';

/**
 * Testing project.
 *
 * @author Sławek Kaleta <slaszka@gmail.com>
 */

class RunTest extends \PHPUnit\Framework\TestCase
{


    public function testCreateController()
    {
        $bootstrap = new \Bootstrap();
        $bootstrap->router = new \Dframe\Router();

        $run = new \Dframe\Loader($bootstrap);
        $page = $run->loadController('Page');
        
        $this->assertEquals('{"return":"1"}', $page->json()->getBody());

    }

}
