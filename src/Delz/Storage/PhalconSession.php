<?php

namespace Delz\Storage;

use Phalcon\Session\AdapterInterface as SessionAdapterInterface;

/**
 * 用session存储用户数据
 *
 * @package Pitaya\Component\Common\Storage
 */
class PhalconSession implements IStorage
{
    /**
     * @var SessionAdapterInterface
     */
    protected $session;

    public function __construct(SessionAdapterInterface $session)
    {
        $this->session = $session;
    }

    /**
     * {@inheritdoc}
     */
    public function has($key)
    {
        return $this->session->has($key);
    }

    /**
     * {@inheritdoc}
     */
    public function get($key, $default = null)
    {
        return $this->session->get($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value)
    {
        $this->session->set($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function remove($key)
    {
        $this->session->remove($key);
    }
}