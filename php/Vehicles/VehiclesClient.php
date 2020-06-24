<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Vehicles;

/**
 * Сервис для работы с транспортными средствами персонажей
 */
class VehiclesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Находит транспортное средство по его ID.
     * @param \Vehicles\VehicleID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Vehicles\Vehicle
     */
    public function FindByID(\Vehicles\VehicleID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vehicles.Vehicles/FindByID',
        $argument,
        ['\Vehicles\Vehicle', 'decode'],
        $metadata, $options);
    }

    /**
     * Находит транспортные средства, принадлежащие персонажу с указанным ID.
     * @param \Vehicles\FindByOwnerIDReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Vehicles\FindByOwnerIDResp
     */
    public function FindByOwnerID(\Vehicles\FindByOwnerIDReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vehicles.Vehicles/FindByOwnerID',
        $argument,
        ['\Vehicles\FindByOwnerIDResp', 'decode'],
        $metadata, $options);
    }

    /**
     * Возвращает здоровье транспортного средства
     * @param \Vehicles\VehicleID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Vehicles\GetHealthResp
     */
    public function GetHealth(\Vehicles\VehicleID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vehicles.Vehicles/GetHealth',
        $argument,
        ['\Vehicles\GetHealthResp', 'decode'],
        $metadata, $options);
    }

    /**
     * Возвращает уровень загрязненности транспортного средства
     * @param \Vehicles\VehicleID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Vehicles\GetDirtLevelResp
     */
    public function GetDirtLevel(\Vehicles\VehicleID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vehicles.Vehicles/GetDirtLevel',
        $argument,
        ['\Vehicles\GetDirtLevelResp', 'decode'],
        $metadata, $options);
    }

    /**
     * Возвращает подробный список транспортных средств, принадлежащих персонажу
     * (для отображения списка транспортных средств)
     * @param \Vehicles\GetCharacterVehiclesListReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Vehicles\GetCharacterVehiclesListResp
     */
    public function GetCharacterVehiclesList(\Vehicles\GetCharacterVehiclesListReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vehicles.Vehicles/GetCharacterVehiclesList',
        $argument,
        ['\Vehicles\GetCharacterVehiclesListResp', 'decode'],
        $metadata, $options);
    }

    /**
     * Количество доступных слотов для спавна автомобилей одновременно.
     * @param \Vehicles\GetCharacterGarageParksCountReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Vehicles\GetCharacterGarageParksCountResp
     */
    public function GetCharacterGarageParksCount(\Vehicles\GetCharacterGarageParksCountReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vehicles.Vehicles/GetCharacterGarageParksCount',
        $argument,
        ['\Vehicles\GetCharacterGarageParksCountResp', 'decode'],
        $metadata, $options);
    }

}
