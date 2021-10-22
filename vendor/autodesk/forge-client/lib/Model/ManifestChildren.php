<?php
/**
 * ManifestChildren
 *
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Forge\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Forge\Client\Model;

use \ArrayAccess;

/**
 * ManifestChildren Class Doc Comment
 *
 * @category    Class
 * @description Children Manifest
 * @package     Autodesk\Forge\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManifestChildren implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'manifest-children';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'type' => 'string',
        'role' => 'string',
        'name' => 'string',
        'has_thumbnail' => 'bool',
        'mime' => 'string',
        'urn' => 'string',
        'progress' => 'string',
        'status' => 'string',
        'resolution' => 'string[]',
        'model_guid' => 'string',
        'object_ids' => 'int[]',
        'children' => '\Autodesk\Forge\Client\Model\ManifestChildren[]',
        'messages' => '\Autodesk\Forge\Client\Model\Messages',
    ];

    /**
     * @return \string[]
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'role' => 'role',
        'name' => 'name',
        'has_thumbnail' => 'hasThumbnail',
        'mime' => 'mime',
        'urn' => 'urn',
        'progress' => 'progress',
        'status' => 'status',
        'resolution' => 'resolution',
        'model_guid' => 'modelGUID',
        'object_ids' => 'objectIds',
        'children' => 'children',
        'messages' => 'messages',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'role' => 'setRole',
        'name' => 'setName',
        'has_thumbnail' => 'setHasThumbnail',
        'mime' => 'setMime',
        'urn' => 'setUrn',
        'progress' => 'setProgress',
        'status' => 'setStatus',
        'resolution' => 'setResolution',
        'model_guid' => 'setModelGuid',
        'object_ids' => 'setObjectIds',
        'children' => 'setChildren',
        'messages' => 'setMessages',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'role' => 'getRole',
        'name' => 'getName',
        'has_thumbnail' => 'getHasThumbnail',
        'mime' => 'getMime',
        'urn' => 'getUrn',
        'progress' => 'getProgress',
        'status' => 'getStatus',
        'resolution' => 'getResolution',
        'model_guid' => 'getModelGuid',
        'object_ids' => 'getObjectIds',
        'children' => 'getChildren',
        'messages' => 'getMessages',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_RESOURCE = 'resource';
    const TYPE_MANIFEST = 'manifest';
    const TYPE_GEOMETRY = 'geometry';
    const TYPE_VIEW = 'view';
    const ROLE__2D = '2d';
    const ROLE__3D = '3d';
    const ROLE__IFC = 'ifc';
    const ROLE_GRAPHICS = 'graphics';
    const ROLE_MANIFEST = 'manifest';
    const ROLE_THUMBNAIL = 'thumbnail';
    const STATUS_PENDING = 'pending';
    const STATUS_INPROGRESS = 'inprogress';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    const STATUS_TIMEOUT = 'timeout';
    const STATUS_PARTIALSUCCESS = 'partialsuccess';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_RESOURCE,
            self::TYPE_MANIFEST,
            self::TYPE_GEOMETRY,
            self::TYPE_VIEW,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE__2D,
            self::ROLE__3D,
            self::ROLE__IFC,
            self::ROLE_GRAPHICS,
            self::ROLE_MANIFEST,
            self::ROLE_THUMBNAIL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_INPROGRESS,
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
            self::STATUS_TIMEOUT,
            self::STATUS_PARTIALSUCCESS,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['has_thumbnail'] = isset($data['has_thumbnail']) ? $data['has_thumbnail'] : null;
        $this->container['mime'] = isset($data['mime']) ? $data['mime'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['model_guid'] = isset($data['model_guid']) ? $data['model_guid'] : null;
        $this->container['object_ids'] = isset($data['object_ids']) ? $data['object_ids'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ["resource", "manifest", "geometry", "view"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'resource', 'manifest', 'geometry', 'view'.";
        }

        if ($this->container['role'] === null) {
            $invalid_properties[] = "'role' can't be null";
        }
        $allowed_values = ["2d", "3d", "graphics", "manifest", "thumbnail", "ifc"];
        if (!in_array($this->container['role'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'role', must be one of '2d', '3d', 'graphics', 'manifest', 'thumbnail', 'ifc'.";
        }

        if ($this->container['mime'] === null) {
            $invalid_properties[] = "'mime' can't be null";
        }

        $allowed_values = ["pending", "inprogress", "success", "failed", "timeout", "partialsuccess"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'pending', 'inprogress', 'success', 'failed', 'timeout', 'partialsuccess'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ["resource", "manifest", "geometry", "view"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['role'] === null) {
            return false;
        }
        $allowed_values = ["2d", "3d", "graphics", "manifest", "thumbnail"];
        if (!in_array($this->container['role'], $allowed_values)) {
            return false;
        }
        if ($this->container['mime'] === null) {
            return false;
        }
        $allowed_values = ["pending", "inprogress", "success", "failed", "timeout", "partialsuccess"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of this JSON object
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('resource', 'manifest', 'geometry', 'view', 'folder');
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'resource', 'manifest', 'geometry', 'view', 'folder'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets role
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param string $role Output file type
     * @return $this
     */
    public function setRole($role)
    {
        $allowed_values = array('2d', '3d', 'graphics', 'manifest', 'thumbnail','Autodesk.CloudPlatform.PropertyDatabase','viewable', 'ifc');
        if ((!in_array($role, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'role', must be one of '2d', '3d', 'graphics', 'manifest', 'thumbnail','Autodesk.CloudPlatform.PropertyDatabase','viewable', 'ifc'");
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Output file type
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets has_thumbnail
     * @return bool
     */
    public function getHasThumbnail()
    {
        return $this->container['has_thumbnail'];
    }

    /**
     * Sets has_thumbnail
     * @param bool $has_thumbnail Indicates if a thumbnail has been generated
     * @return $this
     */
    public function setHasThumbnail($has_thumbnail)
    {
        $this->container['has_thumbnail'] = $has_thumbnail;

        return $this;
    }

    /**
     * Gets mime
     * @return string
     */
    public function getMime()
    {
        return $this->container['mime'];
    }

    /**
     * Sets mime
     * @param string $mime MIME type of the generated file
     * @return $this
     */
    public function setMime($mime)
    {
        $this->container['mime'] = $mime;

        return $this;
    }

    /**
     * Gets urn
     * @return string
     */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
     * Sets urn
     * @param string $urn Output file URN; used as a file identifier
     * @return $this
     */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;

        return $this;
    }

    /**
     * Gets progress
     * @return string
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     * @param string $progress Translation progress for requested entity
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the requested entity; possible values are: `pending`, `success`, `inprogress`, `failed`, `timeout` and `partialsuccess`
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('pending', 'inprogress', 'success', 'failed', 'timeout', 'partialsuccess');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'pending', 'inprogress', 'success', 'failed', 'timeout', 'partialsuccess'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets resolution
     * @return string[]
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     * @param string[] $resolution Available thumbnail resolution
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets model_guid
     * @return string
     */
    public function getModelGuid()
    {
        return $this->container['model_guid'];
    }

    /**
     * Sets model_guid
     * @param string $model_guid
     * @return $this
     */
    public function setModelGuid($model_guid)
    {
        $this->container['model_guid'] = $model_guid;

        return $this;
    }

    /**
     * Gets object_ids
     * @return int[]
     */
    public function getObjectIds()
    {
        return $this->container['object_ids'];
    }

    /**
     * Sets object_ids
     * @param int[] $object_ids
     * @return $this
     */
    public function setObjectIds($object_ids)
    {
        $this->container['object_ids'] = $object_ids;

        return $this;
    }

    /**
     * Gets messages
     * @return \Autodesk\Forge\Client\Model\Messages
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     * @param \Autodesk\Forge\Client\Model\Messages $messages
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets children
     * @return \Autodesk\Forge\Client\Model\ManifestChildren[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     * @param \Autodesk\Forge\Client\Model\ManifestChildren[] $children
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }
    
    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Autodesk\Forge\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Autodesk\Forge\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

