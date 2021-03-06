<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/service.proto

namespace Auth;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>auth.UpdateAccountInfo</code>
 */
class UpdateAccountInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Новая почта
     *
     * Generated from protobuf field <code>string email = 1;</code>
     */
    protected $email = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *           Новая почта
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Auth\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Новая почта
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Новая почта
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

}

