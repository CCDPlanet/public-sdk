<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vehicles/vehicles.proto

namespace Vehicles;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>vehicles.GetCharacterVehiclesListResp</code>
 */
class GetCharacterVehiclesListResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .vehicles.VehiclesListItem vehicles = 1;</code>
     */
    private $vehicles;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Vehicles\VehiclesListItem[]|\Google\Protobuf\Internal\RepeatedField $vehicles
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Vehicles\Vehicles::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .vehicles.VehiclesListItem vehicles = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Generated from protobuf field <code>repeated .vehicles.VehiclesListItem vehicles = 1;</code>
     * @param \Vehicles\VehiclesListItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVehicles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Vehicles\VehiclesListItem::class);
        $this->vehicles = $arr;

        return $this;
    }

}

