<?php
/**
 * EntityInitializeBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  Onyx\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Onyx\Client\Model;

use \ArrayAccess;
/**
 * EntityInitializeBody Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Onyx\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EntityInitializeBody implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'entity_id' => 'object',
        'attribute' => 'string',
        'entity_type' => 'string',
        'partition_id' => 'object'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'entity_id' => 'entityId',
        'attribute' => 'attribute',
        'entity_type' => 'entityType',
        'partition_id' => 'partitionId'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'entity_id' => 'setEntityId',
        'attribute' => 'setAttribute',
        'entity_type' => 'setEntityType',
        'partition_id' => 'setPartitionId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'entity_id' => 'getEntityId',
        'attribute' => 'getAttribute',
        'entity_type' => 'getEntityType',
        'partition_id' => 'getPartitionId'
    );
  
    
    /**
      * $entity_id Entity Primary Key
      * @var object
      */
    protected $entity_id;
    
    /**
      * $attribute Relationship property name
      * @var string
      */
    protected $attribute;
    
    /**
      * $entity_type Relationship entity class type in package.format e.x com.onyx.entity.MyEntity
      * @var string
      */
    protected $entity_type;
    
    /**
      * $partition_id Partition Value(optional)
      * @var object
      */
    protected $partition_id;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->entity_id = $data["entity_id"];
            $this->attribute = $data["attribute"];
            $this->entity_type = $data["entity_type"];
            $this->partition_id = $data["partition_id"];
        }
    }
    
    /**
     * Gets entity_id
     * @return object
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }
  
    /**
     * Sets entity_id
     * @param object $entity_id Entity Primary Key
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        
        $this->entity_id = $entity_id;
        return $this;
    }
    
    /**
     * Gets attribute
     * @return string
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
  
    /**
     * Sets attribute
     * @param string $attribute Relationship property name
     * @return $this
     */
    public function setAttribute($attribute)
    {
        
        $this->attribute = $attribute;
        return $this;
    }
    
    /**
     * Gets entity_type
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }
  
    /**
     * Sets entity_type
     * @param string $entity_type Relationship entity class type in package.format e.x com.onyx.entity.MyEntity
     * @return $this
     */
    public function setEntityType($entity_type)
    {
        
        $this->entity_type = $entity_type;
        return $this;
    }
    
    /**
     * Gets partition_id
     * @return object
     */
    public function getPartitionId()
    {
        return $this->partition_id;
    }
  
    /**
     * Sets partition_id
     * @param object $partition_id Partition Value(optional)
     * @return $this
     */
    public function setPartitionId($partition_id)
    {
        
        $this->partition_id = $partition_id;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
