<?php
namespace LosMiddleware\RateLimit\Storage;

use Aura\Session\Segment;

class ZendSessionStorage implements StorageInterface
{

    private $container;

    public function __construct(Segment $container)
    {
        $this->container = $container;
    }

    /**
     *
     * {@inheritDoc}
     *
     * @see \LosMiddleware\RateLimit\Storage\StorageInterface::get()
     */
    public function get($key, $default = 0)
    {
        return $this->container->get($key, $default);
    }

    /**
     *
     * {@inheritDoc}
     *
     * @see \LosMiddleware\RateLimit\Storage\StorageInterface::set()
     */
    public function set($key, $value)
    {
        $this->container->set($key, $value);
    }
}