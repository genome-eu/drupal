<?php

namespace Drupal\genome\Lib\Model;

/**
 * Interface UserInfoInterface
 * @package Genome\Lib\Model
 */
interface UserInfoInterface
{
    /** @return array */
    public function toHashMap();
}
