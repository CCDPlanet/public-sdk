<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Garages related messages.
//
namespace Garages;

/**
 */
class GaragesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Возвращает гараж с указанным идентификатором.
     * @param \Garages\GarageIdentifier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Garages\Garage
     */
    public function GetOne(\Garages\GarageIdentifier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/garages.Garages/GetOne',
        $argument,
        ['\Garages\Garage', 'decode'],
        $metadata, $options);
    }

    /**
     * Возвращает список гаражей по фильтрам.
     * @param \Garages\GarageFilters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Garages\Garage
     */
    public function GetList(\Garages\GarageFilters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/garages.Garages/GetList',
        $argument,
        ['\Garages\Garage', 'decode'],
        $metadata, $options);
    }

}
