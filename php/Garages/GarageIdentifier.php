<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: garages/garages.proto

namespace Garages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Идентификатор для конретного гаража.
 *
 * Generated from protobuf message <code>garages.GarageIdentifier</code>
 */
class GarageIdentifier extends \Google\Protobuf\Internal\Message
{
    protected $identifier;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Garages\GarageIdentifier\WithID $with_id
     *           Идентификатор по ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Garages\Garages::initOnce();
        parent::__construct($data);
    }

    /**
     * Идентификатор по ID
     *
     * Generated from protobuf field <code>.garages.GarageIdentifier.WithID with_id = 1;</code>
     * @return \Garages\GarageIdentifier\WithID
     */
    public function getWithId()
    {
        return $this->readOneof(1);
    }

    /**
     * Идентификатор по ID
     *
     * Generated from protobuf field <code>.garages.GarageIdentifier.WithID with_id = 1;</code>
     * @param \Garages\GarageIdentifier\WithID $var
     * @return $this
     */
    public function setWithId($var)
    {
        GPBUtil::checkMessage($var, \Garages\GarageIdentifier_WithID::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->whichOneof("identifier");
    }

}
