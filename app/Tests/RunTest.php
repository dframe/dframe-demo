<?php
namespace Tests;
use PHPUnit_Framework_Constraint_IsType as PHPUnit_IsType;

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') AND class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}
 
session_start();

$autoloader = include dirname(__DIR__) . '../../vendor/autoload.php';

include_once dirname(__FILE__).'/../Bootstrap.php';
include_once dirname(__FILE__).'/../../web/config.php';

class RunTest extends \PHPUnit\Framework\TestCase
{

    public function testCreateController()
    {
        $bootstrap = new \Bootstrap();
        $bootstrap->router = new \Dframe\Router();

        $run = new \Dframe\Loader($bootstrap);
        $page = $run->loadController('page');

        $this->assertEquals('{"return":"1"}', $page->json());

    }

}
