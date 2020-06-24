<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: characters/characters.proto

namespace Characters;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>characters.SetClothesRequest</code>
 */
class SetClothesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Character ID
     *
     * Generated from protobuf field <code>int32 character_id = 1;</code>
     */
    protected $character_id = 0;
    /**
     * Clothes JSON
     *
     * Generated from protobuf field <code>string clothesJSON = 2;</code>
     */
    protected $clothesJSON = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $character_id
     *           Character ID
     *     @type string $clothesJSON
     *           Clothes JSON
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Characters\Characters::initOnce();
        parent::__construct($data);
    }

    /**
     * Character ID
     *
     * Generated from protobuf field <code>int32 character_id = 1;</code>
     * @return int
     */
    public function getCharacterId()
    {
        return $this->character_id;
    }

    /**
     * Character ID
     *
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
     * Clothes JSON
     *
     * Generated from protobuf field <code>string clothesJSON = 2;</code>
     * @return string
     */
    public function getClothesJSON()
    {
        return $this->clothesJSON;
    }

    /**
     * Clothes JSON
     *
     * Generated from protobuf field <code>string clothesJSON = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClothesJSON($var)
    {
        GPBUtil::checkString($var, True);
        $this->clothesJSON = $var;

        return $this;
    }

}

