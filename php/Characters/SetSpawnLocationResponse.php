<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: characters/characters.proto

namespace Characters;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SetSpawnLocation method response message
 *
 * Generated from protobuf message <code>characters.SetSpawnLocationResponse</code>
 */
class SetSpawnLocationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Character's new spawn location
     *
     * Generated from protobuf field <code>.characters.SpawnLocation spawn_location = 1;</code>
     */
    protected $spawn_location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Characters\SpawnLocation $spawn_location
     *           Character's new spawn location
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Characters\Characters::initOnce();
        parent::__construct($data);
    }

    /**
     * Character's new spawn location
     *
     * Generated from protobuf field <code>.characters.SpawnLocation spawn_location = 1;</code>
     * @return \Characters\SpawnLocation
     */
    public function getSpawnLocation()
    {
        return $this->spawn_location;
    }

    /**
     * Character's new spawn location
     *
     * Generated from protobuf field <code>.characters.SpawnLocation spawn_location = 1;</code>
     * @param \Characters\SpawnLocation $var
     * @return $this
     */
    public function setSpawnLocation($var)
    {
        GPBUtil::checkMessage($var, \Characters\SpawnLocation::class);
        $this->spawn_location = $var;

        return $this;
    }

}
