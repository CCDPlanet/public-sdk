<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Licenses;

/**
 * Сервис для работы с лицензиями
 */
class LicensesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Выполняет поиск по ID персонажа-владельца
     * @param \Licenses\FindByOwnerIDReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Licenses\FindByOwnerIDResp
     */
    public function FindByOwnerID(\Licenses\FindByOwnerIDReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/licenses.Licenses/FindByOwnerID',
        $argument,
        ['\Licenses\FindByOwnerIDResp', 'decode'],
        $metadata, $options);
    }

}
