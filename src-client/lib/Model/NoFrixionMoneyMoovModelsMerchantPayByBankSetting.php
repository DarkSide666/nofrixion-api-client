<?php
/**
 * NoFrixionMoneyMoovModelsMerchantPayByBankSetting
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NoFrixion MoneyMoov API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Nofrixion\Client\Model;

use \ArrayAccess;
use \Nofrixion\Client\ObjectSerializer;

/**
 * NoFrixionMoneyMoovModelsMerchantPayByBankSetting Class Doc Comment
 *
 * @category Class
 * @description Represents an individual bank payment setting.
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionMoneyMoovModelsMerchantPayByBankSetting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.MoneyMoov.Models.MerchantPayByBankSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank_id' => 'string',
        'bank_name' => 'string',
        'order' => 'int',
        'logo' => 'string',
        'currency' => 'string',
        'processor' => 'string',
        'personal_institution_id' => 'string',
        'business_institution_id' => 'string',
        'message' => 'string',
        'message_image_url' => 'string',
        'bank_country_codes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bank_id' => 'uuid',
        'bank_name' => null,
        'order' => 'int32',
        'logo' => null,
        'currency' => null,
        'processor' => null,
        'personal_institution_id' => null,
        'business_institution_id' => null,
        'message' => null,
        'message_image_url' => null,
        'bank_country_codes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bank_id' => false,
        'bank_name' => true,
        'order' => false,
        'logo' => true,
        'currency' => false,
        'processor' => false,
        'personal_institution_id' => true,
        'business_institution_id' => true,
        'message' => true,
        'message_image_url' => true,
        'bank_country_codes' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bank_id' => 'bankID',
        'bank_name' => 'bankName',
        'order' => 'order',
        'logo' => 'logo',
        'currency' => 'currency',
        'processor' => 'processor',
        'personal_institution_id' => 'personalInstitutionID',
        'business_institution_id' => 'businessInstitutionID',
        'message' => 'message',
        'message_image_url' => 'messageImageUrl',
        'bank_country_codes' => 'bankCountryCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_id' => 'setBankId',
        'bank_name' => 'setBankName',
        'order' => 'setOrder',
        'logo' => 'setLogo',
        'currency' => 'setCurrency',
        'processor' => 'setProcessor',
        'personal_institution_id' => 'setPersonalInstitutionId',
        'business_institution_id' => 'setBusinessInstitutionId',
        'message' => 'setMessage',
        'message_image_url' => 'setMessageImageUrl',
        'bank_country_codes' => 'setBankCountryCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_id' => 'getBankId',
        'bank_name' => 'getBankName',
        'order' => 'getOrder',
        'logo' => 'getLogo',
        'currency' => 'getCurrency',
        'processor' => 'getProcessor',
        'personal_institution_id' => 'getPersonalInstitutionId',
        'business_institution_id' => 'getBusinessInstitutionId',
        'message' => 'getMessage',
        'message_image_url' => 'getMessageImageUrl',
        'bank_country_codes' => 'getBankCountryCodes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const CURRENCY_NONE = 'NONE';
    public const CURRENCY_GBP = 'GBP';
    public const CURRENCY_EUR = 'EUR';
    public const CURRENCY_BTC = 'BTC';
    public const PROCESSOR_NONE = 'None';
    public const PROCESSOR_CYBER_SOURCE = 'CyberSource';
    public const PROCESSOR_CHECKOUT = 'Checkout';
    public const PROCESSOR_STRIPE = 'Stripe';
    public const PROCESSOR_MODULR = 'Modulr';
    public const PROCESSOR_PLAID = 'Plaid';
    public const PROCESSOR_YAPILY = 'Yapily';
    public const PROCESSOR_NOFRIXION = 'Nofrixion';
    public const PROCESSOR_BITCOIN = 'Bitcoin';
    public const PROCESSOR_BITCOIN_TESTNET = 'BitcoinTestnet';
    public const PROCESSOR_BANKING_CIRCLE = 'BankingCircle';
    public const PROCESSOR_BANKING_CIRCLE_AGENCY = 'BankingCircleAgency';
    public const PROCESSOR_SIMULATOR = 'Simulator';
    public const PROCESSOR_LIGHTNING = 'Lightning';
    public const PROCESSOR_LIGHTNING_TESTNET = 'LightningTestnet';
    public const PROCESSOR_BANKING_CIRCLE_DIRECT_DEBIT = 'BankingCircleDirectDebit';
    public const PROCESSOR_TRIBE = 'Tribe';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_NONE,
            self::CURRENCY_GBP,
            self::CURRENCY_EUR,
            self::CURRENCY_BTC,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessorAllowableValues()
    {
        return [
            self::PROCESSOR_NONE,
            self::PROCESSOR_CYBER_SOURCE,
            self::PROCESSOR_CHECKOUT,
            self::PROCESSOR_STRIPE,
            self::PROCESSOR_MODULR,
            self::PROCESSOR_PLAID,
            self::PROCESSOR_YAPILY,
            self::PROCESSOR_NOFRIXION,
            self::PROCESSOR_BITCOIN,
            self::PROCESSOR_BITCOIN_TESTNET,
            self::PROCESSOR_BANKING_CIRCLE,
            self::PROCESSOR_BANKING_CIRCLE_AGENCY,
            self::PROCESSOR_SIMULATOR,
            self::PROCESSOR_LIGHTNING,
            self::PROCESSOR_LIGHTNING_TESTNET,
            self::PROCESSOR_BANKING_CIRCLE_DIRECT_DEBIT,
            self::PROCESSOR_TRIBE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('bank_id', $data ?? [], null);
        $this->setIfExists('bank_name', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('processor', $data ?? [], null);
        $this->setIfExists('personal_institution_id', $data ?? [], null);
        $this->setIfExists('business_institution_id', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('message_image_url', $data ?? [], null);
        $this->setIfExists('bank_country_codes', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currency', must be one of '%s'",
                $this->container['currency'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProcessorAllowableValues();
        if (!is_null($this->container['processor']) && !in_array($this->container['processor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'processor', must be one of '%s'",
                $this->container['processor'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets bank_id
     *
     * @return string|null
     */
    public function getBankId()
    {
        return $this->container['bank_id'];
    }

    /**
     * Sets bank_id
     *
     * @param string|null $bank_id ID of the bank to be configured for the merchant.
     *
     * @return self
     */
    public function setBankId($bank_id)
    {
        if (is_null($bank_id)) {
            throw new \InvalidArgumentException('non-nullable bank_id cannot be null');
        }
        $this->container['bank_id'] = $bank_id;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name Name of the Bank/Institution.
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        if (is_null($bank_name)) {
            array_push($this->openAPINullablesSetToNull, 'bank_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order Order in which this setting will appear in the UI.
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo URL of the bank's logo.
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            array_push($this->openAPINullablesSetToNull, 'logo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency supported by the bank.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currency', must be one of '%s'",
                    $currency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return string|null
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param string|null $processor Name of the bank payment processor.
     *
     * @return self
     */
    public function setProcessor($processor)
    {
        if (is_null($processor)) {
            throw new \InvalidArgumentException('non-nullable processor cannot be null');
        }
        $allowedValues = $this->getProcessorAllowableValues();
        if (!in_array($processor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'processor', must be one of '%s'",
                    $processor,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets personal_institution_id
     *
     * @return string|null
     */
    public function getPersonalInstitutionId()
    {
        return $this->container['personal_institution_id'];
    }

    /**
     * Sets personal_institution_id
     *
     * @param string|null $personal_institution_id ID that the processor uses to identify the bank (personal accounts).
     *
     * @return self
     */
    public function setPersonalInstitutionId($personal_institution_id)
    {
        if (is_null($personal_institution_id)) {
            array_push($this->openAPINullablesSetToNull, 'personal_institution_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('personal_institution_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['personal_institution_id'] = $personal_institution_id;

        return $this;
    }

    /**
     * Gets business_institution_id
     *
     * @return string|null
     */
    public function getBusinessInstitutionId()
    {
        return $this->container['business_institution_id'];
    }

    /**
     * Sets business_institution_id
     *
     * @param string|null $business_institution_id ID that the processor uses to identify the bank (business accounts).
     *
     * @return self
     */
    public function setBusinessInstitutionId($business_institution_id)
    {
        if (is_null($business_institution_id)) {
            array_push($this->openAPINullablesSetToNull, 'business_institution_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('business_institution_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['business_institution_id'] = $business_institution_id;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Message relating to specific bank.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            array_push($this->openAPINullablesSetToNull, 'message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets message_image_url
     *
     * @return string|null
     */
    public function getMessageImageUrl()
    {
        return $this->container['message_image_url'];
    }

    /**
     * Sets message_image_url
     *
     * @param string|null $message_image_url Optional image URL to be displayed with the message.
     *
     * @return self
     */
    public function setMessageImageUrl($message_image_url)
    {
        if (is_null($message_image_url)) {
            array_push($this->openAPINullablesSetToNull, 'message_image_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message_image_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message_image_url'] = $message_image_url;

        return $this;
    }

    /**
     * Gets bank_country_codes
     *
     * @return string[]|null
     */
    public function getBankCountryCodes()
    {
        return $this->container['bank_country_codes'];
    }

    /**
     * Sets bank_country_codes
     *
     * @param string[]|null $bank_country_codes The list of country codes representing the banks the country supports.
     *
     * @return self
     */
    public function setBankCountryCodes($bank_country_codes)
    {
        if (is_null($bank_country_codes)) {
            array_push($this->openAPINullablesSetToNull, 'bank_country_codes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_country_codes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bank_country_codes'] = $bank_country_codes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

