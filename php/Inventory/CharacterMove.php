<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: inventory/inventory.proto

namespace Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CharacterMove перемещение между персонажами.
 *
 * Generated from protobuf message <code>inventory.CharacterMove</code>
 */
class CharacterMove extends \Google\Protobuf\Internal\Message
{
    /**
     * character ID персонажа.
     *
     * Generated from protobuf field <code>int32 character = 1;</code>
     */
    protected $character = 0;
    /**
     * move назначение перемещения.
     *
     * Generated from protobuf field <code>.inventory.Move move = 2;</code>
     */
    protected $move = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $character
     *           character ID персонажа.
     *     @type \Inventory\Move $move
     *           move назначение перемещения.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Inventory\Inventory::initOnce();
        parent::__construct($data);
    }

    /**
     * character ID персонажа.
     *
     * Generated from protobuf field <code>int32 character = 1;</code>
     * @return int
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * character ID персонажа.
     *
     * Generated from protobuf field <code>int32 character = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCharacter($var)
    {
        GPBUtil::checkInt32($var);
        $this->character = $var;

        return $this;
    }

    /**
     * move назначение перемещения.
     *
     * Generated from protobuf field <code>.inventory.Move move = 2;</code>
     * @return \Inventory\Move
     */
    public function getMove()
    {
        return $this->move;
    }

    /**
     * move назначение перемещения.
     *
     * Generated from protobuf field <code>.inventory.Move move = 2;</code>
     * @param \Inventory\Move $var
     * @return $this
     */
    public function setMove($var)
    {
        GPBUtil::checkMessage($var, \Inventory\Move::class);
        $this->move = $var;

        return $this;
    }

}

