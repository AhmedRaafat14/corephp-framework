<?php
/**
 * Created by PhpStorm.
 * User: a.raafat
 * Date: 2019-05-21
 * Time: 20:02
 */

use PHPUnit\Framework\TestCase;
use Core\Application;

class ApplicationTest extends TestCase
{
    public function testApplicationInstanceIsReturned()
    {
        $app = new Application();

        $this->assertInstanceOf(Application::class, $app);
    }
}