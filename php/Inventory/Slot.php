<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: inventory/inventory.proto

namespace Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Slot слот с предметом в инвентаре.
 *
 * Generated from protobuf message <code>inventory.Slot</code>
 */
class Slot extends \Google\Protobuf\Internal\Message
{
    /**
     * item предмет в слоте.
     *
     * Generated from protobuf field <code>.inventory.Item item = 1;</code>
     */
    protected $item = null;
    /**
     * slot номер слота в инвентаре.
     *
     * Generated from protobuf field <code>int32 slot = 2;</code>
     */
    protected $slot = 0;
    /**
     * amount размер стака.
     *
     * Generated from protobuf field <code>int32 amount = 3;</code>
     */
    protected $amount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Inventory\Item $item
     *           item предмет в слоте.
     *     @type int $slot
     *           slot номер слота в инвентаре.
     *     @type int $amount
     *           amount размер стака.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Inventory\Inventory::initOnce();
        parent::__construct($data);
    }

    /**
     * item предмет в слоте.
     *
     * Generated from protobuf field <code>.inventory.Item item = 1;</code>
     * @return \Inventory\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * item предмет в слоте.
     *
     * Generated from protobuf field <code>.inventory.Item item = 1;</code>
     * @param \Inventory\Item $var
     * @return $this
     */
    public function setItem($var)
    {
        GPBUtil::checkMessage($var, \Inventory\Item::class);
        $this->item = $var;

        return $this;
    }

    /**
     * slot номер слота в инвентаре.
     *
     * Generated from protobuf field <code>int32 slot = 2;</code>
     * @return int
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * slot номер слота в инвентаре.
     *
     * Generated from protobuf field <code>int32 slot = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSlot($var)
    {
        GPBUtil::checkInt32($var);
        $this->slot = $var;

        return $this;
    }

    /**
     * amount размер стака.
     *
     * Generated from protobuf field <code>int32 amount = 3;</code>
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * amount размер стака.
     *
     * Generated from protobuf field <code>int32 amount = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->amount = $var;

        return $this;
    }

}

