<?php
/**
 * EnvelopeSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
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

namespace DocuSign\eSign\Model;

use \ArrayAccess;
/**
 * EnvelopeSummary Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EnvelopeSummary implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'envelope_id' => 'string',
        'uri' => 'string',
        'status_date_time' => 'string',
        'status' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'envelope_id' => 'envelopeId',
        'uri' => 'uri',
        'status_date_time' => 'statusDateTime',
        'status' => 'status'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'envelope_id' => 'setEnvelopeId',
        'uri' => 'setUri',
        'status_date_time' => 'setStatusDateTime',
        'status' => 'setStatus'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'envelope_id' => 'getEnvelopeId',
        'uri' => 'getUri',
        'status_date_time' => 'getStatusDateTime',
        'status' => 'getStatus'
    );
  
    
    /**
      * $envelope_id The envelope ID of the envelope status that failed to post.
      * @var string
      */
    protected $envelope_id;
    
    /**
      * $uri 
      * @var string
      */
    protected $uri;
    
    /**
      * $status_date_time The DateTime that the envelope changed status (i.e. was created or sent.)
      * @var string
      */
    protected $status_date_time;
    
    /**
      * $status Indicates the envelope status. Valid values are:\n\n* sent - The envelope is sent to the recipients. \n* created - The envelope is saved as a draft and can be modified and sent later.
      * @var string
      */
    protected $status;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->envelope_id = $data["envelope_id"];
            $this->uri = $data["uri"];
            $this->status_date_time = $data["status_date_time"];
            $this->status = $data["status"];
        }
    }
    
    /**
     * Gets envelope_id
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->envelope_id;
    }
  
    /**
     * Sets envelope_id
     * @param string $envelope_id The envelope ID of the envelope status that failed to post.
     * @return $this
     */
    public function setEnvelopeId($envelope_id)
    {
        
        $this->envelope_id = $envelope_id;
        return $this;
    }
    
    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }
  
    /**
     * Sets uri
     * @param string $uri 
     * @return $this
     */
    public function setUri($uri)
    {
        
        $this->uri = $uri;
        return $this;
    }
    
    /**
     * Gets status_date_time
     * @return string
     */
    public function getStatusDateTime()
    {
        return $this->status_date_time;
    }
  
    /**
     * Sets status_date_time
     * @param string $status_date_time The DateTime that the envelope changed status (i.e. was created or sent.)
     * @return $this
     */
    public function setStatusDateTime($status_date_time)
    {
        
        $this->status_date_time = $status_date_time;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status Indicates the envelope status. Valid values are:\n\n* sent - The envelope is sent to the recipients. \n* created - The envelope is saved as a draft and can be modified and sent later.
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
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
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
