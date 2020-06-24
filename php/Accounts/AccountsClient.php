<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Accounts related messages.
//
namespace Accounts;

/**
 * Service for handling accounts actions.
 */
class AccountsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Возвращает аккаунт с указанным ID. Обычный пользователь может получить
     * только аккаунт, владельцем которого он является. Группы "админ", "сервер"
     * не имеют ограничений на получение информации о чужом аккаунте.
     * @param \Accounts\FindAccountByIDReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Accounts\Account
     */
    public function FindByID(\Accounts\FindAccountByIDReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.Accounts/FindByID',
        $argument,
        ['\Accounts\Account', 'decode'],
        $metadata, $options);
    }

    /**
     * Возвращает аккаунт с указанным именем. Обычный пользователь может получить
     * только аккаунт, владельцем которого он является. Группы "админ", "сервер"
     * не имеют ограничений на получение информации о чужом аккаунте.
     * @param \Accounts\FindAccountByNameReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Accounts\Account
     */
    public function FindByName(\Accounts\FindAccountByNameReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accounts.Accounts/FindByName',
        $argument,
        ['\Accounts\Account', 'decode'],
        $metadata, $options);
    }

}
