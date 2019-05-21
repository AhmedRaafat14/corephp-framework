<?php
/**
 * Created by PhpStorm.
 * User: a.raafat
 * Date: 2019-05-21
 * Time: 20:05
 */
namespace Core;

use Core\Container\Container;
use Psr\Container\ContainerInterface;

class Application
{
    /**
     * Core PHP Framework Version
     * @var string
     */
    const VERSION = '0.0.1-alpha';
    /**
     * Container
     * @var Psr\Container\ContainerInterface
     */
    private $container;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setContainer(new Container);
    }

    /**
     * Get Container
     *
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Get Version
     *
     * @return string
     */
    public function getVersion()
    {
        return static::VERSION;
    }

    /**
     * Set Container
     *
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container)
    {
        $this->container = $container;
    }
}