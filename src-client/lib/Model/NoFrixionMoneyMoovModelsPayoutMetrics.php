<?php
/**
 * NoFrixionMoneyMoovModelsPayoutMetrics
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
 * NoFrixionMoneyMoovModelsPayoutMetrics Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionMoneyMoovModelsPayoutMetrics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.MoneyMoov.Models.PayoutMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'all' => 'float',
        'in_progress' => 'float',
        'pending_approval' => 'float',
        'failed' => 'float',
        'paid' => 'float',
        'scheduled' => 'float',
        'total_amounts_by_currency' => 'array<string,array<string,float>>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'all' => 'double',
        'in_progress' => 'double',
        'pending_approval' => 'double',
        'failed' => 'double',
        'paid' => 'double',
        'scheduled' => 'double',
        'total_amounts_by_currency' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'all' => false,
        'in_progress' => false,
        'pending_approval' => false,
        'failed' => false,
        'paid' => false,
        'scheduled' => false,
        'total_amounts_by_currency' => true
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
        'all' => 'all',
        'in_progress' => 'inProgress',
        'pending_approval' => 'pendingApproval',
        'failed' => 'failed',
        'paid' => 'paid',
        'scheduled' => 'scheduled',
        'total_amounts_by_currency' => 'totalAmountsByCurrency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'all' => 'setAll',
        'in_progress' => 'setInProgress',
        'pending_approval' => 'setPendingApproval',
        'failed' => 'setFailed',
        'paid' => 'setPaid',
        'scheduled' => 'setScheduled',
        'total_amounts_by_currency' => 'setTotalAmountsByCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'all' => 'getAll',
        'in_progress' => 'getInProgress',
        'pending_approval' => 'getPendingApproval',
        'failed' => 'getFailed',
        'paid' => 'getPaid',
        'scheduled' => 'getScheduled',
        'total_amounts_by_currency' => 'getTotalAmountsByCurrency'
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
        $this->setIfExists('all', $data ?? [], null);
        $this->setIfExists('in_progress', $data ?? [], null);
        $this->setIfExists('pending_approval', $data ?? [], null);
        $this->setIfExists('failed', $data ?? [], null);
        $this->setIfExists('paid', $data ?? [], null);
        $this->setIfExists('scheduled', $data ?? [], null);
        $this->setIfExists('total_amounts_by_currency', $data ?? [], null);
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
     * Gets all
     *
     * @return float|null
     */
    public function getAll()
    {
        return $this->container['all'];
    }

    /**
     * Sets all
     *
     * @param float|null $all Total payout count.
     *
     * @return self
     */
    public function setAll($all)
    {
        if (is_null($all)) {
            throw new \InvalidArgumentException('non-nullable all cannot be null');
        }
        $this->container['all'] = $all;

        return $this;
    }

    /**
     * Gets in_progress
     *
     * @return float|null
     */
    public function getInProgress()
    {
        return $this->container['in_progress'];
    }

    /**
     * Sets in_progress
     *
     * @param float|null $in_progress Payouts with Pending, Queued or QueuedUpstream status.
     *
     * @return self
     */
    public function setInProgress($in_progress)
    {
        if (is_null($in_progress)) {
            throw new \InvalidArgumentException('non-nullable in_progress cannot be null');
        }
        $this->container['in_progress'] = $in_progress;

        return $this;
    }

    /**
     * Gets pending_approval
     *
     * @return float|null
     */
    public function getPendingApproval()
    {
        return $this->container['pending_approval'];
    }

    /**
     * Sets pending_approval
     *
     * @param float|null $pending_approval Payouts with PendingApproval or PendingInput status.
     *
     * @return self
     */
    public function setPendingApproval($pending_approval)
    {
        if (is_null($pending_approval)) {
            throw new \InvalidArgumentException('non-nullable pending_approval cannot be null');
        }
        $this->container['pending_approval'] = $pending_approval;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return float|null
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param float|null $failed Payouts with Failed, Rejected or Unknown status.
     *
     * @return self
     */
    public function setFailed($failed)
    {
        if (is_null($failed)) {
            throw new \InvalidArgumentException('non-nullable failed cannot be null');
        }
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return float|null
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param float|null $paid Payouts with Processed status.
     *
     * @return self
     */
    public function setPaid($paid)
    {
        if (is_null($paid)) {
            throw new \InvalidArgumentException('non-nullable paid cannot be null');
        }
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets scheduled
     *
     * @return float|null
     */
    public function getScheduled()
    {
        return $this->container['scheduled'];
    }

    /**
     * Sets scheduled
     *
     * @param float|null $scheduled Payouts with Scheduled status.
     *
     * @return self
     */
    public function setScheduled($scheduled)
    {
        if (is_null($scheduled)) {
            throw new \InvalidArgumentException('non-nullable scheduled cannot be null');
        }
        $this->container['scheduled'] = $scheduled;

        return $this;
    }

    /**
     * Gets total_amounts_by_currency
     *
     * @return array<string,array<string,float>>|null
     */
    public function getTotalAmountsByCurrency()
    {
        return $this->container['total_amounts_by_currency'];
    }

    /**
     * Sets total_amounts_by_currency
     *
     * @param array<string,array<string,float>>|null $total_amounts_by_currency The total amounts by status and currency.
     *
     * @return self
     */
    public function setTotalAmountsByCurrency($total_amounts_by_currency)
    {
        if (is_null($total_amounts_by_currency)) {
            array_push($this->openAPINullablesSetToNull, 'total_amounts_by_currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_amounts_by_currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_amounts_by_currency'] = $total_amounts_by_currency;

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

