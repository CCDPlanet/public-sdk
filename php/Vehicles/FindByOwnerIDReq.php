<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vehicles/vehicles.proto

namespace Vehicles;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>vehicles.FindByOwnerIDReq</code>
 */
class FindByOwnerIDReq extends \Google\Protobuf\Internal\Message
{
    /**
     * ID персонажа, владеющего транспортным средством
     *
     * Generated from protobuf field <code>int32 owner_id = 1;</code>
     */
    protected $owner_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $owner_id
     *           ID персонажа, владеющего транспортным средством
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Vehicles\Vehicles::initOnce();
        parent::__construct($data);
    }

    /**
     * ID персонажа, владеющего транспортным средством
     *
     * Generated from protobuf field <code>int32 owner_id = 1;</code>
     * @return int
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * ID персонажа, владеющего транспортным средством
     *
     * Generated from protobuf field <code>int32 owner_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOwnerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->owner_id = $var;

        return $this;
    }

}

