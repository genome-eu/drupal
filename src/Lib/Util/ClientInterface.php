<?php

namespace Drupal\genome\Lib\Util;

use Drupal\genome\Lib\Exception\GeneralGenomeException;

/**
 * Interface ClientInterface
 * @package Genome\Lib\Util
 */
interface ClientInterface
{
    /**
     * @param mixed[] $data
     * @throws GeneralGenomeException
     * @return mixed[]
     */
    public function send(array $data);
}
