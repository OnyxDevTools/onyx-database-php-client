<?php
/**
 * SaveRelationshipRequestBody
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
 * SaveRelationshipRequestBody Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Onyx\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SaveRelationshipRequestBody implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'type' => 'string',
        'entity' => 'object',
        'relationship' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'type' => 'type',
        'entity' => 'entity',
        'relationship' => 'relationship'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'type' => 'setType',
        'entity' => 'setEntity',
        'relationship' => 'setRelationship'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'type' => 'getType',
        'entity' => 'getEntity',
        'relationship' => 'getRelationship'
    );
  
    
    /**
      * $type Relationship Class
      * @var string
      */
    protected $type;
    
    /**
      * $entity Managed Entity
      * @var object
      */
    protected $entity;
    
    /**
      * $relationship Relationship Property Name
      * @var string
      */
    protected $relationship;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->type = $data["type"];
            $this->entity = $data["entity"];
            $this->relationship = $data["relationship"];
        }
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type Relationship Class
     * @return $this
     */
    public function setType($type)
    {
        
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets entity
     * @return object
     */
    public function getEntity()
    {
        return $this->entity;
    }
  
    /**
     * Sets entity
     * @param object $entity Managed Entity
     * @return $this
     */
    public function setEntity($entity)
    {
        
        $this->entity = $entity;
        return $this;
    }
    
    /**
     * Gets relationship
     * @return string
     */
    public function getRelationship()
    {
        return $this->relationship;
    }
  
    /**
     * Sets relationship
     * @param string $relationship Relationship Property Name
     * @return $this
     */
    public function setRelationship($relationship)
    {
        
        $this->relationship = $relationship;
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
