<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/service.proto

namespace GPBMetadata\Auth;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Auth\Messages::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9a020a12617574682f736572766963652e70726f746f1204617574681a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a13617574682f6d657373616765732e70726f746f3286010a0b417574685365727669636512350a0c496e74726f73706563744d6512162e676f6f676c652e70726f746f6275662e456d7074791a0d2e617574682e4163636f756e7412400a09476574446f6e61746512162e676f6f676c652e70726f746f6275662e456d7074791a1b2e676f6f676c652e70726f746f6275662e496e74363456616c756542385a366769746875622e636f6d2f434344506c616e65742f636364706c616e65742d6261636b656e642f706b672f6170692f76312f61757468620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

