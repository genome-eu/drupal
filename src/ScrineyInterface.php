<?php

namespace Drupal\genome;

use Drupal\genome\Lib\Component\ButtonBuilder;
use Drupal\genome\Lib\Component\RebillBuilder;
use Drupal\genome\Lib\Exception\GeneralGenomeException;

/**
 * Interface ScrineyInterface
 * @package Genome
 */
interface ScrineyInterface
{
    /**
     * Method build integration code of pay button
     *
     * @param string $userId User Id in your system
     * @throws GeneralGenomeException
     * @return ButtonBuilder
     */
    public function buildButton($userId);

    /**
     * Method will return builder which allow to create and send rebill request
     *
     * @param string $billToken
     * @param string $userId
     * @throws GeneralGenomeException
     * @return RebillBuilder
     */
    public function createRebillRequest($billToken, $userId);

    /**
     * @param string $transactionId
     * @param string $userId
     * @throws GeneralGenomeException
     * @return mixed[]
     */
    public function stopSubscription($transactionId, $userId);

    /**
     * @param string $transactionId
     * @throws GeneralGenomeException
     * @return mixed[]
     */
    public function refund($transactionId);

    /**
     * Method for validate callback
     *
     * @param array $data callback data from Genome
     * @throws GeneralGenomeException
     * @return bool
     */
    public function validateCallback(array $data);
}
