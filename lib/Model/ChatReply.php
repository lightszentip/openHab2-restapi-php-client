<?php
/**
 * ChatReply
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * openHAB REST API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.15
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ChatReply Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChatReply implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChatReply';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'language' => 'string',
'query' => 'string',
'answer' => 'string',
'hint' => 'string',
'intent' => '\Swagger\Client\Model\Intent',
'matched_item_names' => 'string[]',
'card' => '\Swagger\Client\Model\Card'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'language' => null,
'query' => null,
'answer' => null,
'hint' => null,
'intent' => null,
'matched_item_names' => null,
'card' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'language' => 'language',
'query' => 'query',
'answer' => 'answer',
'hint' => 'hint',
'intent' => 'intent',
'matched_item_names' => 'matchedItemNames',
'card' => 'card'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language' => 'setLanguage',
'query' => 'setQuery',
'answer' => 'setAnswer',
'hint' => 'setHint',
'intent' => 'setIntent',
'matched_item_names' => 'setMatchedItemNames',
'card' => 'setCard'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language' => 'getLanguage',
'query' => 'getQuery',
'answer' => 'getAnswer',
'hint' => 'getHint',
'intent' => 'getIntent',
'matched_item_names' => 'getMatchedItemNames',
'card' => 'getCard'    ];

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
        return self::$swaggerModelName;
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['answer'] = isset($data['answer']) ? $data['answer'] : null;
        $this->container['hint'] = isset($data['hint']) ? $data['hint'] : null;
        $this->container['intent'] = isset($data['intent']) ? $data['intent'] : null;
        $this->container['matched_item_names'] = isset($data['matched_item_names']) ? $data['matched_item_names'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
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
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->container['answer'];
    }

    /**
     * Sets answer
     *
     * @param string $answer answer
     *
     * @return $this
     */
    public function setAnswer($answer)
    {
        $this->container['answer'] = $answer;

        return $this;
    }

    /**
     * Gets hint
     *
     * @return string
     */
    public function getHint()
    {
        return $this->container['hint'];
    }

    /**
     * Sets hint
     *
     * @param string $hint hint
     *
     * @return $this
     */
    public function setHint($hint)
    {
        $this->container['hint'] = $hint;

        return $this;
    }

    /**
     * Gets intent
     *
     * @return \Swagger\Client\Model\Intent
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     *
     * @param \Swagger\Client\Model\Intent $intent intent
     *
     * @return $this
     */
    public function setIntent($intent)
    {
        $this->container['intent'] = $intent;

        return $this;
    }

    /**
     * Gets matched_item_names
     *
     * @return string[]
     */
    public function getMatchedItemNames()
    {
        return $this->container['matched_item_names'];
    }

    /**
     * Sets matched_item_names
     *
     * @param string[] $matched_item_names matched_item_names
     *
     * @return $this
     */
    public function setMatchedItemNames($matched_item_names)
    {
        $this->container['matched_item_names'] = $matched_item_names;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \Swagger\Client\Model\Card
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \Swagger\Client\Model\Card $card card
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}