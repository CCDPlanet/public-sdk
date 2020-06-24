<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Bank related messsages.
//
namespace Bank;

/**
 * Bank service.
 */
class BankClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * GetAccount возвращает счёт в банке, который принадлежит переданному
     * персонажу. Информацию о счёте персонажа можно получить только будучи
     * владельцем указанного персонажа.
     * @param \Bank\GetAccountReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Bank\BankAccount
     */
    public function GetAccount(\Bank\GetAccountReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bank.Bank/GetAccount',
        $argument,
        ['\Bank\BankAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * GetExchangeRates возвращает актуальный курс валют.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Bank\ExchangeRates
     */
    public function GetExchangeRates(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bank.Bank/GetExchangeRates',
        $argument,
        ['\Bank\ExchangeRates', 'decode'],
        $metadata, $options);
    }

    /**
     * Convert выполняет конвертацию валют. Не имеет сайд-эффектов. Конвертация
     * валют на клиенте используя курс валют предпочтительна.
     * @param \Bank\ConvertReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Bank\ConvertResp
     */
    public function Convert(\Bank\ConvertReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bank.Bank/Convert',
        $argument,
        ['\Bank\ConvertResp', 'decode'],
        $metadata, $options);
    }

    /**
     * Exchange выполняет обмен валют на счёте персонажа. Вызвать данный метод
     * можно только будучи владельцем персонажа.
     * @param \Bank\ExchangeReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Bank\BankAccount
     */
    public function Exchange(\Bank\ExchangeReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bank.Bank/Exchange',
        $argument,
        ['\Bank\BankAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * GetSummary возвращает суммарную статистику о затратах и доходах. Принимает
     * ID персонажа в качестве аргумента.
     * @param \Google\Protobuf\Int32Value $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Bank\Summary
     */
    public function GetSummary(\Google\Protobuf\Int32Value $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bank.Bank/GetSummary',
        $argument,
        ['\Bank\Summary', 'decode'],
        $metadata, $options);
    }

    /**
     * GetHistory возвращает историю операций.
     * @param \Bank\HistoryReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Bank\HistoryRecord
     */
    public function GetHistory(\Bank\HistoryReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/bank.Bank/GetHistory',
        $argument,
        ['\Bank\HistoryRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * PayTaxes принимает ID персонажа. Снимает деньги со счёта на карте в уплату
     * полной суммы неоплаченных налогов.
     * @param \Google\Protobuf\Int32Value $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Bank\BankAccount
     */
    public function PayTaxes(\Google\Protobuf\Int32Value $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bank.Bank/PayTaxes',
        $argument,
        ['\Bank\BankAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * GetTaxesAmount принимает ID персонажа возвращает сумму неоплаченных штрафов
     * для персонажа с указанным ID.
     * @param \Google\Protobuf\Int32Value $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\Protobuf\Int64Value
     */
    public function GetTaxesAmount(\Google\Protobuf\Int32Value $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bank.Bank/GetTaxesAmount',
        $argument,
        ['\Google\Protobuf\Int64Value', 'decode'],
        $metadata, $options);
    }

}
