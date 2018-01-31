<?php

namespace Delz\Storage;

use Phalcon\Http\Response\CookiesInterface;

/**
 * 用cookie存储用户数据
 *
 * @package Delz\Storage
 */
class PhalconCookie implements IStorage
{
    /**
     * @var CookiesInterface
     */
    protected $cookies;

    /**
     * @param CookiesInterface $cookies
     */
    public function __construct(CookiesInterface $cookies)
    {
        $this->cookies = $cookies;
    }

    /**
     * {@inheritdoc}
     */
    public function has($key)
    {
        return $this->cookies->has($key);
    }

    /**
     * {@inheritdoc}
     */
    public function get($key, $default = null)
    {
        if($this->has($key)) {
            return $this->cookies->get($key)->getValue();
        }
        return $default;
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value)
    {
        $this->cookies->set($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function remove($key)
    {
        $this->cookies->delete($key);
    }
}