<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bank/bank.proto

namespace Bank;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bank.Summary</code>
 */
class Summary extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .bank.Summary.StatInfo info = 1;</code>
     */
    private $info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bank\Summary\StatInfo[]|\Google\Protobuf\Internal\RepeatedField $info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bank\Bank::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .bank.Summary.StatInfo info = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Generated from protobuf field <code>repeated .bank.Summary.StatInfo info = 1;</code>
     * @param \Bank\Summary\StatInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bank\Summary\StatInfo::class);
        $this->info = $arr;

        return $this;
    }

}

