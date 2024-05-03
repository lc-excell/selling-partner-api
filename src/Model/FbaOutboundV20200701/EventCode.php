<?php
/**
 * EventCode
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use ArrayAccess;

use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * EventCode Class Doc Comment
 *
 * @category Class
 * @description The event code for the delivery event.
 * @package  SellingPartnerApi
 * @group 
 */
class EventCode
{
    public $value;

    /**
     * Possible values of this enum
     */
    const _101 = 'EVENT_101';
    const _102 = 'EVENT_102';
    const _201 = 'EVENT_201';
    const _202 = 'EVENT_202';
    const _203 = 'EVENT_203';
    const _204 = 'EVENT_204';
    const _205 = 'EVENT_205';
    const _206 = 'EVENT_206';
    const _212 = 'EVENT_212';
    const _301 = 'EVENT_301';
    const _302 = 'EVENT_302';
    const _304 = 'EVENT_304';
    const _306 = 'EVENT_306';
    const _307 = 'EVENT_307';
    const _308 = 'EVENT_308';
    const _309 = 'EVENT_309';
    const _310 = 'EVENT_310';
    const _401 = 'EVENT_401';
    const _402 = 'EVENT_402';
    const _403 = 'EVENT_403';
    const _404 = 'EVENT_404';
    const _405 = 'EVENT_405';
    const _406 = 'EVENT_406';
    const _407 = 'EVENT_407';
    const _408 = 'EVENT_408';
    const _409 = 'EVENT_409';
    const _411 = 'EVENT_411';
    const _412 = 'EVENT_412';
    const _413 = 'EVENT_413';
    const _414 = 'EVENT_414';
    const _415 = 'EVENT_415';
    const _416 = 'EVENT_416';
    const _417 = 'EVENT_417';
    const _418 = 'EVENT_418';
    const _419 = 'EVENT_419';
    const _636 = 'EVENT_636';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::_101,
            self::_102,
            self::_201,
            self::_202,
            self::_203,
            self::_204,
            self::_205,
            self::_206,
            self::_212,
            self::_301,
            self::_302,
            self::_304,
            self::_306,
            self::_307,
            self::_308,
            self::_309,
            self::_310,
            self::_401,
            self::_402,
            self::_403,
            self::_404,
            self::_405,
            self::_406,
            self::_407,
            self::_408,
            self::_409,
            self::_411,
            self::_412,
            self::_413,
            self::_414,
            self::_415,
            self::_416,
            self::_417,
            self::_418,
            self::_419,
            self::_636,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        /**
         * MG-443 No tracking number on shipment
         * Removed the checking if value is allowable since there are many AdditionalLocationInfo and EventCode values from Amazon SPAPI
         * that are not included in this class.
         */
        if (is_null($value)) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'EventCode', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


