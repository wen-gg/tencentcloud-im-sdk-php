<?php
/**
 * ImportGroupMsgRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentCloud\IM

 */

/**
 * TIM SERVER REST API SDK
 *
 * TIM REST API
 *
 * 
 */

/**
 *
 * Do not edit the class manually.
 */

namespace TencentCloud\IM\Model;

use \ArrayAccess;
use \TencentCloud\IM\ObjectSerializer;

/**
 * ImportGroupMsgRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class ImportGroupMsgRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportGroupMsgRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupId' => 'string',
        'recentContactFlag' => 'int',
        'msgList' => 'string',
        'fromAccount' => 'string',
        'sendTime' => 'int',
        'random' => 'int',
        'msgBody' => '\TencentCloud\IM\Model\TIMMsgElement[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupId' => null,
        'recentContactFlag' => 'int32',
        'msgList' => null,
        'fromAccount' => null,
        'sendTime' => 'int32',
        'random' => 'int32',
        'msgBody' => null
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
        'groupId' => 'GroupId',
        'recentContactFlag' => 'RecentContactFlag',
        'msgList' => 'MsgList',
        'fromAccount' => 'From_Account',
        'sendTime' => 'SendTime',
        'random' => 'Random',
        'msgBody' => 'MsgBody'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupId' => 'setGroupId',
        'recentContactFlag' => 'setRecentContactFlag',
        'msgList' => 'setMsgList',
        'fromAccount' => 'setFromAccount',
        'sendTime' => 'setSendTime',
        'random' => 'setRandom',
        'msgBody' => 'setMsgBody'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupId' => 'getGroupId',
        'recentContactFlag' => 'getRecentContactFlag',
        'msgList' => 'getMsgList',
        'fromAccount' => 'getFromAccount',
        'sendTime' => 'getSendTime',
        'random' => 'getRandom',
        'msgBody' => 'getMsgBody'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['recentContactFlag'] = isset($data['recentContactFlag']) ? $data['recentContactFlag'] : null;
        $this->container['msgList'] = isset($data['msgList']) ? $data['msgList'] : null;
        $this->container['fromAccount'] = isset($data['fromAccount']) ? $data['fromAccount'] : null;
        $this->container['sendTime'] = isset($data['sendTime']) ? $data['sendTime'] : null;
        $this->container['random'] = isset($data['random']) ? $data['random'] : null;
        $this->container['msgBody'] = isset($data['msgBody']) ? $data['msgBody'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['msgList'] === null) {
            $invalidProperties[] = "'msgList' can't be null";
        }
        if ($this->container['fromAccount'] === null) {
            $invalidProperties[] = "'fromAccount' can't be null";
        }
        if ($this->container['sendTime'] === null) {
            $invalidProperties[] = "'sendTime' can't be null";
        }
        if ($this->container['msgBody'] === null) {
            $invalidProperties[] = "'msgBody' can't be null";
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
     * Gets groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string $groupId 要导入消息的群 ID
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets recentContactFlag
     *
     * @return int|null
     */
    public function getRecentContactFlag()
    {
        return $this->container['recentContactFlag'];
    }

    /**
     * Sets recentContactFlag
     *
     * @param int|null $recentContactFlag 会话更新识别，为1的时候标识触发会话更新，默认不触发（avchatroom 群不支持）。
     *
     * @return $this
     */
    public function setRecentContactFlag($recentContactFlag)
    {
        $this->container['recentContactFlag'] = $recentContactFlag;

        return $this;
    }

    /**
     * Gets msgList
     *
     * @return string
     */
    public function getMsgList()
    {
        return $this->container['msgList'];
    }

    /**
     * Sets msgList
     *
     * @param string $msgList 导入的消息列表
     *
     * @return $this
     */
    public function setMsgList($msgList)
    {
        $this->container['msgList'] = $msgList;

        return $this;
    }

    /**
     * Gets fromAccount
     *
     * @return string
     */
    public function getFromAccount()
    {
        return $this->container['fromAccount'];
    }

    /**
     * Sets fromAccount
     *
     * @param string $fromAccount 指定消息发送者
     *
     * @return $this
     */
    public function setFromAccount($fromAccount)
    {
        $this->container['fromAccount'] = $fromAccount;

        return $this;
    }

    /**
     * Gets sendTime
     *
     * @return int
     */
    public function getSendTime()
    {
        return $this->container['sendTime'];
    }

    /**
     * Sets sendTime
     *
     * @param int $sendTime 消息发送时间
     *
     * @return $this
     */
    public function setSendTime($sendTime)
    {
        $this->container['sendTime'] = $sendTime;

        return $this;
    }

    /**
     * Gets random
     *
     * @return int|null
     */
    public function getRandom()
    {
        return $this->container['random'];
    }

    /**
     * Sets random
     *
     * @param int|null $random 32位无符号整数；如果5分钟内两条消息的随机值相同，后一条消息将被当做重复消息而丢弃
     *
     * @return $this
     */
    public function setRandom($random)
    {
        $this->container['random'] = $random;

        return $this;
    }

    /**
     * Gets msgBody
     *
     * @return \TencentCloud\IM\Model\TIMMsgElement[]
     */
    public function getMsgBody()
    {
        return $this->container['msgBody'];
    }

    /**
     * Sets msgBody
     *
     * @param \TencentCloud\IM\Model\TIMMsgElement[] $msgBody msgBody
     *
     * @return $this
     */
    public function setMsgBody($msgBody)
    {
        $this->container['msgBody'] = $msgBody;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


