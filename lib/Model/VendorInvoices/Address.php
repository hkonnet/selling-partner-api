<?php
/**
 * Address
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Payments
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorInvoices;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @description A physical address.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'city' => 'string',
        'county' => 'string',
        'district' => 'string',
        'state_or_region' => 'string',
        'postal_or_zip_code' => 'string',
        'country_code' => 'string',
        'phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'city' => null,
        'county' => null,
        'district' => null,
        'state_or_region' => null,
        'postal_or_zip_code' => null,
        'country_code' => null,
        'phone' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'address_line3' => 'addressLine3',
        'city' => 'city',
        'county' => 'county',
        'district' => 'district',
        'state_or_region' => 'stateOrRegion',
        'postal_or_zip_code' => 'postalOrZipCode',
        'country_code' => 'countryCode',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'city' => 'setCity',
        'county' => 'setCounty',
        'district' => 'setDistrict',
        'state_or_region' => 'setStateOrRegion',
        'postal_or_zip_code' => 'setPostalOrZipCode',
        'country_code' => 'setCountryCode',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'city' => 'getCity',
        'county' => 'getCounty',
        'district' => 'getDistrict',
        'state_or_region' => 'getStateOrRegion',
        'postal_or_zip_code' => 'getPostalOrZipCode',
        'country_code' => 'getCountryCode',
        'phone' => 'getPhone'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['address_line3'] = $data['address_line3'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['county'] = $data['county'] ?? null;
        $this->container['district'] = $data['district'] ?? null;
        $this->container['state_or_region'] = $data['state_or_region'] ?? null;
        $this->container['postal_or_zip_code'] = $data['postal_or_zip_code'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ((mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the person, business or institution at that address.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 First line of street address.
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 Additional address information, if required.
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3
     *
     * @param string|null $address_line3 Additional address information, if required.
     *
     * @return self
     */
    public function setAddressLine3($address_line3)
    {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city where the person, business or institution is located.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county The county where person, business or institution is located.
     *
     * @return self
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string|null $district The district where person, business or institution is located.
     *
     * @return self
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets state_or_region
     *
     * @return string|null
     */
    public function getStateOrRegion()
    {
        return $this->container['state_or_region'];
    }

    /**
     * Sets state_or_region
     *
     * @param string|null $state_or_region The state or region where person, business or institution is located.
     *
     * @return self
     */
    public function setStateOrRegion($state_or_region)
    {
        $this->container['state_or_region'] = $state_or_region;

        return $this;
    }

    /**
     * Gets postal_or_zip_code
     *
     * @return string|null
     */
    public function getPostalOrZipCode()
    {
        return $this->container['postal_or_zip_code'];
    }

    /**
     * Sets postal_or_zip_code
     *
     * @param string|null $postal_or_zip_code The postal or zip code of that address. It contains a series of letters or digits or both, sometimes including spaces or punctuation.
     *
     * @return self
     */
    public function setPostalOrZipCode($postal_or_zip_code)
    {
        $this->container['postal_or_zip_code'] = $postal_or_zip_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The two digit country code. In ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if ((mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling Address., must be smaller than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The phone number of the person, business or institution located at that address.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


