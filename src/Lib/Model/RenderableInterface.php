<?php

namespace Drupal\genome\Lib\Model;

/**
 * Interface RenderableInterface
 * @package Genome\Lib\Model
 */
interface RenderableInterface
{
    /** @return string */
    public function asString();

    /** @return void */
    public function display();
}
