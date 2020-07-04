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

}
