<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// House related messages
//
namespace Houses;

/**
 */
class HousesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Houses\ApartmentIdentifier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Houses\Apartment
     */
    public function GetOne(\Houses\ApartmentIdentifier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/houses.Houses/GetOne',
        $argument,
        ['\Houses\Apartment', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Houses\ApartmentFilters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Houses\Apartment
     */
    public function GetList(\Houses\ApartmentFilters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/houses.Houses/GetList',
        $argument,
        ['\Houses\Apartment', 'decode'],
        $metadata, $options);
    }

    /**
     * Покупка дома.
     * @param \Houses\BuyReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Houses\Apartment
     */
    public function Buy(\Houses\BuyReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/houses.Houses/Buy',
        $argument,
        ['\Houses\Apartment', 'decode'],
        $metadata, $options);
    }

    /**
     * Продажа дома.
     * @param \Houses\ApartmentIdentifier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Houses\Apartment
     */
    public function Sell(\Houses\ApartmentIdentifier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/houses.Houses/Sell',
        $argument,
        ['\Houses\Apartment', 'decode'],
        $metadata, $options);
    }

}
