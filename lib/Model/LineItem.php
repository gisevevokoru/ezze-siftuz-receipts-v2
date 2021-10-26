<?php
/**
 * LineItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  EzzeSiftuz\ReceiptsV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Receipts API
 *
 * Interface for the partner to get receipts information
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EzzeSiftuz\ReceiptsV2\Model;

use \ArrayAccess;
use \EzzeSiftuz\ReceiptsV2\ObjectSerializer;

/**
 * LineItem Class Doc Comment
 *
 * @category Class
 * @description List of specific position item ids of the order billed or reimbursed.In case of &#x27;refund receipt for shipping costs only&#x27; the list can be empty.
 * @package  EzzeSiftuz\ReceiptsV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unit_price' => 'AllOfLineItemUnitPrice',
'price_to_pay' => 'AllOfLineItemPriceToPay',
'total_discount' => 'AllOfLineItemTotalDiscount',
'discount_details' => '\EzzeSiftuz\ReceiptsV2\Model\DiscountDetails',
'vat_rate' => 'float',
'quantity' => 'int',
'total' => 'AllOfLineItemTotal',
'position_item_ids' => 'string[]',
'promotion' => 'string',
'dimensions' => 'string',
'product_title' => 'string',
'article_number' => 'string',
'partial_refund_history' => '\EzzeSiftuz\ReceiptsV2\Model\PartialRefund[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unit_price' => null,
'price_to_pay' => null,
'total_discount' => null,
'discount_details' => null,
'vat_rate' => null,
'quantity' => 'int32',
'total' => null,
'position_item_ids' => null,
'promotion' => null,
'dimensions' => null,
'product_title' => null,
'article_number' => null,
'partial_refund_history' => null    ];

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
        'unit_price' => 'unitPrice',
'price_to_pay' => 'priceToPay',
'total_discount' => 'totalDiscount',
'discount_details' => 'discountDetails',
'vat_rate' => 'vatRate',
'quantity' => 'quantity',
'total' => 'total',
'position_item_ids' => 'positionItemIds',
'promotion' => 'promotion',
'dimensions' => 'dimensions',
'product_title' => 'productTitle',
'article_number' => 'articleNumber',
'partial_refund_history' => 'partialRefundHistory'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unit_price' => 'setUnitPrice',
'price_to_pay' => 'setPriceToPay',
'total_discount' => 'setTotalDiscount',
'discount_details' => 'setDiscountDetails',
'vat_rate' => 'setVatRate',
'quantity' => 'setQuantity',
'total' => 'setTotal',
'position_item_ids' => 'setPositionItemIds',
'promotion' => 'setPromotion',
'dimensions' => 'setDimensions',
'product_title' => 'setProductTitle',
'article_number' => 'setArticleNumber',
'partial_refund_history' => 'setPartialRefundHistory'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unit_price' => 'getUnitPrice',
'price_to_pay' => 'getPriceToPay',
'total_discount' => 'getTotalDiscount',
'discount_details' => 'getDiscountDetails',
'vat_rate' => 'getVatRate',
'quantity' => 'getQuantity',
'total' => 'getTotal',
'position_item_ids' => 'getPositionItemIds',
'promotion' => 'getPromotion',
'dimensions' => 'getDimensions',
'product_title' => 'getProductTitle',
'article_number' => 'getArticleNumber',
'partial_refund_history' => 'getPartialRefundHistory'    ];

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
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['price_to_pay'] = isset($data['price_to_pay']) ? $data['price_to_pay'] : null;
        $this->container['total_discount'] = isset($data['total_discount']) ? $data['total_discount'] : null;
        $this->container['discount_details'] = isset($data['discount_details']) ? $data['discount_details'] : null;
        $this->container['vat_rate'] = isset($data['vat_rate']) ? $data['vat_rate'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['position_item_ids'] = isset($data['position_item_ids']) ? $data['position_item_ids'] : null;
        $this->container['promotion'] = isset($data['promotion']) ? $data['promotion'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['product_title'] = isset($data['product_title']) ? $data['product_title'] : null;
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['partial_refund_history'] = isset($data['partial_refund_history']) ? $data['partial_refund_history'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['price_to_pay'] === null) {
            $invalidProperties[] = "'price_to_pay' can't be null";
        }
        if ($this->container['vat_rate'] === null) {
            $invalidProperties[] = "'vat_rate' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['position_item_ids'] === null) {
            $invalidProperties[] = "'position_item_ids' can't be null";
        }
        if ($this->container['promotion'] === null) {
            $invalidProperties[] = "'promotion' can't be null";
        }
        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['product_title'] === null) {
            $invalidProperties[] = "'product_title' can't be null";
        }
        if ($this->container['article_number'] === null) {
            $invalidProperties[] = "'article_number' can't be null";
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
     * Gets unit_price
     *
     * @return AllOfLineItemUnitPrice
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param AllOfLineItemUnitPrice $unit_price The original unit gross price for a single item of this position before discount. Always displayed positively.
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets price_to_pay
     *
     * @return AllOfLineItemPriceToPay
     */
    public function getPriceToPay()
    {
        return $this->container['price_to_pay'];
    }

    /**
     * Sets price_to_pay
     *
     * @param AllOfLineItemPriceToPay $price_to_pay The billed unit gross price for a single position item of this position after discount (if there is any). Always displayed positively.
     *
     * @return $this
     */
    public function setPriceToPay($price_to_pay)
    {
        $this->container['price_to_pay'] = $price_to_pay;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return AllOfLineItemTotalDiscount
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param AllOfLineItemTotalDiscount $total_discount The total amount of discount of this lineItem (= discount per item * qantity). Values are always positive.
     *
     * @return $this
     */
    public function setTotalDiscount($total_discount)
    {
        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets discount_details
     *
     * @return \EzzeSiftuz\ReceiptsV2\Model\DiscountDetails
     */
    public function getDiscountDetails()
    {
        return $this->container['discount_details'];
    }

    /**
     * Sets discount_details
     *
     * @param \EzzeSiftuz\ReceiptsV2\Model\DiscountDetails $discount_details discount_details
     *
     * @return $this
     */
    public function setDiscountDetails($discount_details)
    {
        $this->container['discount_details'] = $discount_details;

        return $this;
    }

    /**
     * Gets vat_rate
     *
     * @return float
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     *
     * @param float $vat_rate The vat rate applicable for this position
     *
     * @return $this
     */
    public function setVatRate($vat_rate)
    {
        $this->container['vat_rate'] = $vat_rate;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Number of position items of this product billed or refunded with this receipt
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets total
     *
     * @return AllOfLineItemTotal
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param AllOfLineItemTotal $total Total gross price of this position.In case of purchase receipts it's calculated out of unit price and quantity.In case of refund or partial refund receipts, it's the granted price.Always displayed positively.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets position_item_ids
     *
     * @return string[]
     */
    public function getPositionItemIds()
    {
        return $this->container['position_item_ids'];
    }

    /**
     * Sets position_item_ids
     *
     * @param string[] $position_item_ids List of all position item ids of the order billed or reimbursed. In case of refund receipts the list can be empty.
     *
     * @return $this
     */
    public function setPositionItemIds($position_item_ids)
    {
        $this->container['position_item_ids'] = $position_item_ids;

        return $this;
    }

    /**
     * Gets promotion
     *
     * @return string
     */
    public function getPromotion()
    {
        return $this->container['promotion'];
    }

    /**
     * Sets promotion
     *
     * @param string $promotion Promotion code, that together with the articleNumber it is shown as \"article number\" on the product detail page at the time of ordering. It's part of the unique description of an ordered product on a receipt.
     *
     * @return $this
     */
    public function setPromotion($promotion)
    {
        $this->container['promotion'] = $promotion;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return string
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param string $dimensions Characteristics of a product like color, size or extension separated by commas.Shown on the product detail page when choosing the product. It's part of the unique description of an ordered product on a receipt.
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets product_title
     *
     * @return string
     */
    public function getProductTitle()
    {
        return $this->container['product_title'];
    }

    /**
     * Sets product_title
     *
     * @param string $product_title Short description of the ordered product shown on the product detail page at the time of ordering. It's part of the unique description of an ordered product on a receipt.
     *
     * @return $this
     */
    public function setProductTitle($product_title)
    {
        $this->container['product_title'] = $product_title;

        return $this;
    }

    /**
     * Gets article_number
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     *
     * @param string $article_number External identifier of the product, together with the promotion it is shown as \"article number\" on the product detail page at the time of ordering. It's part of the unique description of an ordered product on a receipt.
     *
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets partial_refund_history
     *
     * @return \EzzeSiftuz\ReceiptsV2\Model\PartialRefund[]
     */
    public function getPartialRefundHistory()
    {
        return $this->container['partial_refund_history'];
    }

    /**
     * Sets partial_refund_history
     *
     * @param \EzzeSiftuz\ReceiptsV2\Model\PartialRefund[] $partial_refund_history List of all partial refunds that were processed for different position items. In case there were no prior partial reimbursements, then this section will not be available.
     *
     * @return $this
     */
    public function setPartialRefundHistory($partial_refund_history)
    {
        $this->container['partial_refund_history'] = $partial_refund_history;

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
