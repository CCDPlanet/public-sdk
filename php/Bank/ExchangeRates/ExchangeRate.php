<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bank/bank.proto

namespace Bank\ExchangeRates;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bank.ExchangeRates.ExchangeRate</code>
 */
class ExchangeRate extends \Google\Protobuf\Internal\Message
{
    /**
     * Валюта
     *
     * Generated from protobuf field <code>.bank.Currency currency = 1;</code>
     */
    protected $currency = 0;
    /**
     * Курс валюты по отношению к рублю.
     *
     * Generated from protobuf field <code>double equal_to_rub = 2;</code>
     */
    protected $equal_to_rub = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $currency
     *           Валюта
     *     @type float $equal_to_rub
     *           Курс валюты по отношению к рублю.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bank\Bank::initOnce();
        parent::__construct($data);
    }

    /**
     * Валюта
     *
     * Generated from protobuf field <code>.bank.Currency currency = 1;</code>
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Валюта
     *
     * Generated from protobuf field <code>.bank.Currency currency = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkEnum($var, \Bank\Currency::class);
        $this->currency = $var;

        return $this;
    }

    /**
     * Курс валюты по отношению к рублю.
     *
     * Generated from protobuf field <code>double equal_to_rub = 2;</code>
     * @return float
     */
    public function getEqualToRub()
    {
        return $this->equal_to_rub;
    }

    /**
     * Курс валюты по отношению к рублю.
     *
     * Generated from protobuf field <code>double equal_to_rub = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setEqualToRub($var)
    {
        GPBUtil::checkDouble($var);
        $this->equal_to_rub = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExchangeRate::class, \Bank\ExchangeRates_ExchangeRate::class);

