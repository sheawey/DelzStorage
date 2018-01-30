<?php

namespace Delz\Storage;

/**
 * 用户信息存储接口
 *
 * @package Delz\Storage
 */
interface IStorage
{
    /**
     * @param string $key
     *
     * @return bool
     */
    public function has($key);

    /**
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function set($key, $value);

    /**
     * @param string $key
     */
    public function remove($key);
}