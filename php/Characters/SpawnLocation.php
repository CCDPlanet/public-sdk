<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: characters/characters.proto

namespace Characters;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Character spawn location. Usually represents last exit location.
 *When player selects character, he spawns at this location.
 *
 * Generated from protobuf message <code>characters.SpawnLocation</code>
 */
class SpawnLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * X coordinate of spawn location
     *
     * Generated from protobuf field <code>float x = 1;</code>
     */
    protected $x = 0.0;
    /**
     * Y coordinate of spawn location
     *
     * Generated from protobuf field <code>float y = 2;</code>
     */
    protected $y = 0.0;
    /**
     * Z coordinate of spawn location
     *
     * Generated from protobuf field <code>float z = 3;</code>
     */
    protected $z = 0.0;
    /**
     * headiing of spawn location
     *
     * Generated from protobuf field <code>float heading = 4;</code>
     */
    protected $heading = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $x
     *           X coordinate of spawn location
     *     @type float $y
     *           Y coordinate of spawn location
     *     @type float $z
     *           Z coordinate of spawn location
     *     @type float $heading
     *           headiing of spawn location
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Characters\Characters::initOnce();
        parent::__construct($data);
    }

    /**
     * X coordinate of spawn location
     *
     * Generated from protobuf field <code>float x = 1;</code>
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * X coordinate of spawn location
     *
     * Generated from protobuf field <code>float x = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setX($var)
    {
        GPBUtil::checkFloat($var);
        $this->x = $var;

        return $this;
    }

    /**
     * Y coordinate of spawn location
     *
     * Generated from protobuf field <code>float y = 2;</code>
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Y coordinate of spawn location
     *
     * Generated from protobuf field <code>float y = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setY($var)
    {
        GPBUtil::checkFloat($var);
        $this->y = $var;

        return $this;
    }

    /**
     * Z coordinate of spawn location
     *
     * Generated from protobuf field <code>float z = 3;</code>
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Z coordinate of spawn location
     *
     * Generated from protobuf field <code>float z = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setZ($var)
    {
        GPBUtil::checkFloat($var);
        $this->z = $var;

        return $this;
    }

    /**
     * headiing of spawn location
     *
     * Generated from protobuf field <code>float heading = 4;</code>
     * @return float
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * headiing of spawn location
     *
     * Generated from protobuf field <code>float heading = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setHeading($var)
    {
        GPBUtil::checkFloat($var);
        $this->heading = $var;

        return $this;
    }

}

