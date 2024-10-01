<?php
/**
 * NoFrixionMoneyMoovModelsOpenBankingConsentRequest
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
 * NoFrixionMoneyMoovModelsOpenBankingConsentRequest Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionMoneyMoovModelsOpenBankingConsentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.MoneyMoov.Models.OpenBanking.ConsentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email_address' => 'string',
        'institution_id' => 'string',
        'merchant_id' => 'string',
        'callback_url' => 'string',
        'success_web_hook_url' => 'string',
        'failure_callback_url' => 'string',
        'is_connected_accounts' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email_address' => 'email',
        'institution_id' => null,
        'merchant_id' => 'uuid',
        'callback_url' => null,
        'success_web_hook_url' => null,
        'failure_callback_url' => null,
        'is_connected_accounts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email_address' => true,
        'institution_id' => false,
        'merchant_id' => false,
        'callback_url' => true,
        'success_web_hook_url' => true,
        'failure_callback_url' => true,
        'is_connected_accounts' => false
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
        'email_address' => 'emailAddress',
        'institution_id' => 'institutionID',
        'merchant_id' => 'merchantID',
        'callback_url' => 'callbackUrl',
        'success_web_hook_url' => 'successWebHookUrl',
        'failure_callback_url' => 'failureCallbackUrl',
        'is_connected_accounts' => 'isConnectedAccounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_address' => 'setEmailAddress',
        'institution_id' => 'setInstitutionId',
        'merchant_id' => 'setMerchantId',
        'callback_url' => 'setCallbackUrl',
        'success_web_hook_url' => 'setSuccessWebHookUrl',
        'failure_callback_url' => 'setFailureCallbackUrl',
        'is_connected_accounts' => 'setIsConnectedAccounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_address' => 'getEmailAddress',
        'institution_id' => 'getInstitutionId',
        'merchant_id' => 'getMerchantId',
        'callback_url' => 'getCallbackUrl',
        'success_web_hook_url' => 'getSuccessWebHookUrl',
        'failure_callback_url' => 'getFailureCallbackUrl',
        'is_connected_accounts' => 'getIsConnectedAccounts'
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
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('institution_id', $data ?? [], null);
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('callback_url', $data ?? [], null);
        $this->setIfExists('success_web_hook_url', $data ?? [], null);
        $this->setIfExists('failure_callback_url', $data ?? [], null);
        $this->setIfExists('is_connected_accounts', $data ?? [], null);
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

        if ($this->container['institution_id'] === null) {
            $invalidProperties[] = "'institution_id' can't be null";
        }
        if ((mb_strlen($this->container['institution_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'institution_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
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
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address The email address that identifies the end user that will be authorising the   open banking consent request.
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            array_push($this->openAPINullablesSetToNull, 'email_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email_address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets institution_id
     *
     * @return string
     */
    public function getInstitutionId()
    {
        return $this->container['institution_id'];
    }

    /**
     * Sets institution_id
     *
     * @param string $institution_id The institution ID the open banking consent is being requested for.
     *
     * @return self
     */
    public function setInstitutionId($institution_id)
    {
        if (is_null($institution_id)) {
            throw new \InvalidArgumentException('non-nullable institution_id cannot be null');
        }

        if ((mb_strlen($institution_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $institution_id when calling NoFrixionMoneyMoovModelsOpenBankingConsentRequest., must be bigger than or equal to 1.');
        }

        $this->container['institution_id'] = $institution_id;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id The ID of the merchant the consent token is being created to be used with.
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        if (is_null($merchant_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_id cannot be null');
        }
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string|null $callback_url Optional callback URL that the end user performing the open banking authorisation  will be redirected to on completion. Typically this should be a URL that takes the   user back to the application that they originally started the open banking authorisation  from.
     *
     * @return self
     */
    public function setCallbackUrl($callback_url)
    {
        if (is_null($callback_url)) {
            array_push($this->openAPINullablesSetToNull, 'callback_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('callback_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets success_web_hook_url
     *
     * @return string|null
     */
    public function getSuccessWebHookUrl()
    {
        return $this->container['success_web_hook_url'];
    }

    /**
     * Sets success_web_hook_url
     *
     * @param string|null $success_web_hook_url Optional URL that will be called by the MoneyMoov server upon a successful open banking  authorisation. The webhook URL will pass a single parameter of \"id\". That ID can  then be used in the MoneyMoov open banking actions to verify the operation. Note  web hooks can easily be spoofed and should NOT be trusted without calling back to the   MoneyMoov server for verification.
     *
     * @return self
     */
    public function setSuccessWebHookUrl($success_web_hook_url)
    {
        if (is_null($success_web_hook_url)) {
            array_push($this->openAPINullablesSetToNull, 'success_web_hook_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('success_web_hook_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['success_web_hook_url'] = $success_web_hook_url;

        return $this;
    }

    /**
     * Gets failure_callback_url
     *
     * @return string|null
     */
    public function getFailureCallbackUrl()
    {
        return $this->container['failure_callback_url'];
    }

    /**
     * Sets failure_callback_url
     *
     * @param string|null $failure_callback_url Optional URL for open banking consent authorisation failure.   If the URL is set, the calling application will be redirected here with the error  message as query parameter. If it’s not set it will fall back on default page that  will show the error message.
     *
     * @return self
     */
    public function setFailureCallbackUrl($failure_callback_url)
    {
        if (is_null($failure_callback_url)) {
            array_push($this->openAPINullablesSetToNull, 'failure_callback_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('failure_callback_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['failure_callback_url'] = $failure_callback_url;

        return $this;
    }

    /**
     * Gets is_connected_accounts
     *
     * @return bool|null
     */
    public function getIsConnectedAccounts()
    {
        return $this->container['is_connected_accounts'];
    }

    /**
     * Sets is_connected_accounts
     *
     * @param bool|null $is_connected_accounts Optional setting. If connected accounts is enabled. After a successful consent authorisation,  NoFrixion will pull all authorised EUR and GBP account information and store them along NoFrixion payment accounts.
     *
     * @return self
     */
    public function setIsConnectedAccounts($is_connected_accounts)
    {
        if (is_null($is_connected_accounts)) {
            throw new \InvalidArgumentException('non-nullable is_connected_accounts cannot be null');
        }
        $this->container['is_connected_accounts'] = $is_connected_accounts;

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

