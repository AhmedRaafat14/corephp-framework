<?php
/**
 * Created by PhpStorm.
 * User: a.raafat
 * Date: 2019-05-21
 * Time: 20:02
 */

use Core\Application;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;

class ApplicationTest extends TestCase
{
    public function testApplicationInstanceIsReturned()
    {
        $app = new Application();

        $this->assertInstanceOf(Application::class, $app);
    }

    public function testApplicationVersionIsReturned()
    {
        $app = new Application;

        $this->assertTrue(is_string($app->getVersion()));
    }
    public function testApplicationReturnsContainer()
    {
        $app = new Application;

        $this->assertInstanceOf(ContainerInterface::class, $app->getContainer());
    }
}