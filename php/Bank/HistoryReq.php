<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bank/bank.proto

namespace Bank;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bank.HistoryReq</code>
 */
class HistoryReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 character_id = 1;</code>
     */
    protected $character_id = 0;
    /**
     * Смещение выборки
     *
     * Generated from protobuf field <code>int64 offset = 2;</code>
     */
    protected $offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $character_id
     *     @type int|string $offset
     *           Смещение выборки
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bank\Bank::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 character_id = 1;</code>
     * @return int
     */
    public function getCharacterId()
    {
        return $this->character_id;
    }

    /**
     * Generated from protobuf field <code>int32 character_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCharacterId($var)
    {
        GPBUtil::checkInt32($var);
        $this->character_id = $var;

        return $this;
    }

    /**
     * Смещение выборки
     *
     * Generated from protobuf field <code>int64 offset = 2;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Смещение выборки
     *
     * Generated from protobuf field <code>int64 offset = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

}

