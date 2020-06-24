<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: houses/houses.proto

namespace Houses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>houses.Apartment</code>
 */
class Apartment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>.houses.ApartmentClass class = 2;</code>
     */
    protected $class = 0;
    /**
     * Generated from protobuf field <code>string room = 4;</code>
     */
    protected $room = '';
    /**
     * Generated from protobuf field <code>int32 owner_id = 5;</code>
     */
    protected $owner_id = 0;
    /**
     * Стоимость
     *
     * Generated from protobuf field <code>int64 cost = 8;</code>
     */
    protected $cost = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $class
     *     @type string $room
     *     @type int $owner_id
     *     @type int|string $cost
     *           Стоимость
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Houses\Houses::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.houses.ApartmentClass class = 2;</code>
     * @return int
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Generated from protobuf field <code>.houses.ApartmentClass class = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setClass($var)
    {
        GPBUtil::checkEnum($var, \Houses\ApartmentClass::class);
        $this->class = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string room = 4;</code>
     * @return string
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Generated from protobuf field <code>string room = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRoom($var)
    {
        GPBUtil::checkString($var, True);
        $this->room = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 owner_id = 5;</code>
     * @return int
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Generated from protobuf field <code>int32 owner_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setOwnerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->owner_id = $var;

        return $this;
    }

    /**
     * Стоимость
     *
     * Generated from protobuf field <code>int64 cost = 8;</code>
     * @return int|string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Стоимость
     *
     * Generated from protobuf field <code>int64 cost = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCost($var)
    {
        GPBUtil::checkInt64($var);
        $this->cost = $var;

        return $this;
    }

}

