<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Characterstats;

/**
 */
class CharacterStatsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Получение статистики персонажа
     * @param \Characterstats\GetReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characterstats\Stats
     */
    public function Get(\Characterstats\GetReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characterstats.CharacterStats/Get',
        $argument,
        ['\Characterstats\Stats', 'decode'],
        $metadata, $options);
    }

}
