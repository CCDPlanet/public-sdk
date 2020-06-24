<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Система инвентаря
//
namespace Inventory;

/**
 * Сервис для работы с инвентарём.
 */
class InventoryServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * GetCharacterInventory принимает ID персонажа. Доступен для вызова только владельцем персонажа.
     * Возвращает заполненные предметами слоты инвентаря персонажа.
     * @param \Google\Protobuf\Int32Value $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Inventory\Slot
     */
    public function GetCharacterInventory(\Google\Protobuf\Int32Value $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/inventory.InventoryService/GetCharacterInventory',
        $argument,
        ['\Inventory\Slot', 'decode'],
        $metadata, $options);
    }

    /**
     * GetVehicleInventory принимает ID автомобиля. Доступен для вызова всеми. Возвращает заполненными
     * предметами слоты инвентаря автомобиля.
     * @param \Google\Protobuf\Int32Value $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Inventory\Slot
     */
    public function GetVehicleInventory(\Google\Protobuf\Int32Value $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/inventory.InventoryService/GetVehicleInventory',
        $argument,
        ['\Inventory\Slot', 'decode'],
        $metadata, $options);
    }

    /**
     * MoveItem перемещает предмет между слотами в инвентаре персонажа. Доступен
     * для вызова только владельцем персонажа.
     * @param \Inventory\CharacterMove $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Inventory\Moved
     */
    public function MoveCharacterItem(\Inventory\CharacterMove $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.InventoryService/MoveCharacterItem',
        $argument,
        ['\Inventory\Moved', 'decode'],
        $metadata, $options);
    }

}
