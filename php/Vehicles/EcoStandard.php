<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vehicles/vehicles.proto

namespace Vehicles;

use UnexpectedValueException;

/**
 * Protobuf type <code>vehicles.EcoStandard</code>
 */
class EcoStandard
{
    /**
     * Generated from protobuf enum <code>STANDARD_UNSPECIFIED = 0;</code>
     */
    const STANDARD_UNSPECIFIED = 0;
    /**
     * USA standards
     * http://atlanticauto.com.ua/news/ekologicheskie-standarty-k-avto-primenyaemye-v-ssha/
     *
     * Generated from protobuf enum <code>STANDARD_TLEV = 1;</code>
     */
    const STANDARD_TLEV = 1;
    /**
     * Generated from protobuf enum <code>STANDARD_LEV = 2;</code>
     */
    const STANDARD_LEV = 2;
    /**
     * Generated from protobuf enum <code>STANDARD_ULEV = 3;</code>
     */
    const STANDARD_ULEV = 3;
    /**
     * Generated from protobuf enum <code>STANDARD_SULEV = 4;</code>
     */
    const STANDARD_SULEV = 4;
    /**
     * Generated from protobuf enum <code>STANDARD_PZEV = 5;</code>
     */
    const STANDARD_PZEV = 5;
    /**
     * Generated from protobuf enum <code>STANDARD_AT_PZEV = 6;</code>
     */
    const STANDARD_AT_PZEV = 6;
    /**
     * Generated from protobuf enum <code>STANDARD_ZEV = 7;</code>
     */
    const STANDARD_ZEV = 7;
    /**
     * Euro standards https://en.wikipedia.org/wiki/European_emission_standards
     *
     * Generated from protobuf enum <code>STANDARD_EURO_0 = 8;</code>
     */
    const STANDARD_EURO_0 = 8;
    /**
     * Generated from protobuf enum <code>STANDARD_EURO_1 = 9;</code>
     */
    const STANDARD_EURO_1 = 9;
    /**
     * Generated from protobuf enum <code>STANDARD_EURO_2 = 10;</code>
     */
    const STANDARD_EURO_2 = 10;
    /**
     * Generated from protobuf enum <code>STANDARD_EURO_3 = 11;</code>
     */
    const STANDARD_EURO_3 = 11;
    /**
     * Generated from protobuf enum <code>STANDARD_EURO_4 = 12;</code>
     */
    const STANDARD_EURO_4 = 12;
    /**
     * Generated from protobuf enum <code>STANDARD_EURO_5 = 13;</code>
     */
    const STANDARD_EURO_5 = 13;
    /**
     * Generated from protobuf enum <code>STANDARD_EURO_6 = 14;</code>
     */
    const STANDARD_EURO_6 = 14;

    private static $valueToName = [
        self::STANDARD_UNSPECIFIED => 'STANDARD_UNSPECIFIED',
        self::STANDARD_TLEV => 'STANDARD_TLEV',
        self::STANDARD_LEV => 'STANDARD_LEV',
        self::STANDARD_ULEV => 'STANDARD_ULEV',
        self::STANDARD_SULEV => 'STANDARD_SULEV',
        self::STANDARD_PZEV => 'STANDARD_PZEV',
        self::STANDARD_AT_PZEV => 'STANDARD_AT_PZEV',
        self::STANDARD_ZEV => 'STANDARD_ZEV',
        self::STANDARD_EURO_0 => 'STANDARD_EURO_0',
        self::STANDARD_EURO_1 => 'STANDARD_EURO_1',
        self::STANDARD_EURO_2 => 'STANDARD_EURO_2',
        self::STANDARD_EURO_3 => 'STANDARD_EURO_3',
        self::STANDARD_EURO_4 => 'STANDARD_EURO_4',
        self::STANDARD_EURO_5 => 'STANDARD_EURO_5',
        self::STANDARD_EURO_6 => 'STANDARD_EURO_6',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
