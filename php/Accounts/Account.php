<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/accounts.proto

namespace Accounts;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Аккаунт пользователя.
 *
 * Generated from protobuf message <code>accounts.Account</code>
 */
class Account extends \Google\Protobuf\Internal\Message
{
    /**
     * ID аккаунта.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Имя аккаунта.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Почта на аккаунте.
     *
     * Generated from protobuf field <code>string email = 3;</code>
     */
    protected $email = '';
    /**
     * Группа, которой принадлежит аккаунт (напр. admin, user).
     *
     * Generated from protobuf field <code>string group = 4;</code>
     */
    protected $group = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *           ID аккаунта.
     *     @type string $name
     *           Имя аккаунта.
     *     @type string $email
     *           Почта на аккаунте.
     *     @type string $group
     *           Группа, которой принадлежит аккаунт (напр. admin, user).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Accounts\Accounts::initOnce();
        parent::__construct($data);
    }

    /**
     * ID аккаунта.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID аккаунта.
     *
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
     * Имя аккаунта.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Имя аккаунта.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Почта на аккаунте.
     *
     * Generated from protobuf field <code>string email = 3;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Почта на аккаунте.
     *
     * Generated from protobuf field <code>string email = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Группа, которой принадлежит аккаунт (напр. admin, user).
     *
     * Generated from protobuf field <code>string group = 4;</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Группа, которой принадлежит аккаунт (напр. admin, user).
     *
     * Generated from protobuf field <code>string group = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

}

