<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Characters service.
//
namespace Characters;

/**
 * Characters service
 */
class CharactersClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates new character and returns it.
     * @param \Characters\CreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characters\Character
     */
    public function Create(\Characters\CreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characters.Characters/Create',
        $argument,
        ['\Characters\Character', 'decode'],
        $metadata, $options);
    }

    /**
     * FindByID finds and returns character by ID
     * @param \Characters\CharacterID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characters\Character
     */
    public function FindByID(\Characters\CharacterID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characters.Characters/FindByID',
        $argument,
        ['\Characters\Character', 'decode'],
        $metadata, $options);
    }

    /**
     * FindByOwnerID finds and returns IDs of characters owned by account with
     * given ID
     * @param \Characters\FindByOwnerIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characters\FindByOwnerIDResponse
     */
    public function FindByOwnerID(\Characters\FindByOwnerIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characters.Characters/FindByOwnerID',
        $argument,
        ['\Characters\FindByOwnerIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates character spawn location
     * @param \Characters\SetSpawnLocationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characters\PBEmpty
     */
    public function SetSpawnLocation(\Characters\SetSpawnLocationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characters.Characters/SetSpawnLocation',
        $argument,
        ['\Characters\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns spawn location by character ID
     * @param \Characters\CharacterID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characters\SpawnLocation
     */
    public function GetSpawnLocation(\Characters\CharacterID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characters.Characters/GetSpawnLocation',
        $argument,
        ['\Characters\SpawnLocation', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates character appearance
     * @param \Characters\SetAppearanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characters\PBEmpty
     */
    public function SetAppearance(\Characters\SetAppearanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characters.Characters/SetAppearance',
        $argument,
        ['\Characters\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns character appearance by character ID
     * @param \Characters\CharacterID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characters\CharacterAppearance
     */
    public function GetAppearance(\Characters\CharacterID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characters.Characters/GetAppearance',
        $argument,
        ['\Characters\CharacterAppearance', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates character clothes
     * @param \Characters\SetClothesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characters\PBEmpty
     */
    public function SetClothes(\Characters\SetClothesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characters.Characters/SetClothes',
        $argument,
        ['\Characters\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns character clothes by character ID
     * @param \Characters\CharacterID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characters\CharacterClothes
     */
    public function GetClothes(\Characters\CharacterID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characters.Characters/GetClothes',
        $argument,
        ['\Characters\CharacterClothes', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates character name
     * @param \Characters\SetNameRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Characters\PBEmpty
     */
    public function SetName(\Characters\SetNameRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/characters.Characters/SetName',
        $argument,
        ['\Characters\PBEmpty', 'decode'],
        $metadata, $options);
    }

}
