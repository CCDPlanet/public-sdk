<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Auth;

/**
 * AuthService методы сервиса доступны только на сервере авторизации
 */
class AuthServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * IntrospectMe возвращает аккаунт, под которым авторизован пользователь
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Auth\Account
     */
    public function IntrospectMe(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/auth.AuthService/IntrospectMe',
        $argument,
        ['\Auth\Account', 'decode'],
        $metadata, $options);
    }

    /**
     * GetDonate возвращает сумму доната на аккаунте пользователя
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\Protobuf\Int64Value
     */
    public function GetDonate(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/auth.AuthService/GetDonate',
        $argument,
        ['\Google\Protobuf\Int64Value', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateAccount обновляет данные на аккаунте. Метод требует доступ к
     * 'account:update'. Некоторые из возможных ошибок:
     * Неверный формат почты: InvalidArgument, "invalid format"
     * Неразрешимый хост почты: InvalidArgument, "unresolvable host"
     * @param \Auth\UpdateAccountInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Auth\Account
     */
    public function UpdateAccount(\Auth\UpdateAccountInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/auth.AuthService/UpdateAccount',
        $argument,
        ['\Auth\Account', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdatePassword обновляет пароль на аккаунте. Метод требует доступ к
     * 'account:update'. Некоторые из возможных ошибок:
     * Прежний пароль не совпадает: InvalidArgument, "old password does not match"
     * Новый пароль слишком слабый: InvalidArgument, "weak password"
     * @param \Auth\UpdatePasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\Protobuf\GPBEmpty
     */
    public function UpdatePassword(\Auth\UpdatePasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/auth.AuthService/UpdatePassword',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
