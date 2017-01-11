<?php
/**
 * SenderEmailNotifications
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
 * SenderEmailNotifications Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SenderEmailNotifications implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'envelope_complete' => 'string',
        'changed_signer' => 'string',
        'sender_envelope_declined' => 'string',
        'withdrawn_consent' => 'string',
        'recipient_viewed' => 'string',
        'delivery_failed' => 'string',
        'offline_signing_failed' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'envelope_complete' => 'envelopeComplete',
        'changed_signer' => 'changedSigner',
        'sender_envelope_declined' => 'senderEnvelopeDeclined',
        'withdrawn_consent' => 'withdrawnConsent',
        'recipient_viewed' => 'recipientViewed',
        'delivery_failed' => 'deliveryFailed',
        'offline_signing_failed' => 'offlineSigningFailed'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'envelope_complete' => 'setEnvelopeComplete',
        'changed_signer' => 'setChangedSigner',
        'sender_envelope_declined' => 'setSenderEnvelopeDeclined',
        'withdrawn_consent' => 'setWithdrawnConsent',
        'recipient_viewed' => 'setRecipientViewed',
        'delivery_failed' => 'setDeliveryFailed',
        'offline_signing_failed' => 'setOfflineSigningFailed'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'envelope_complete' => 'getEnvelopeComplete',
        'changed_signer' => 'getChangedSigner',
        'sender_envelope_declined' => 'getSenderEnvelopeDeclined',
        'withdrawn_consent' => 'getWithdrawnConsent',
        'recipient_viewed' => 'getRecipientViewed',
        'delivery_failed' => 'getDeliveryFailed',
        'offline_signing_failed' => 'getOfflineSigningFailed'
    );
  
    
    /**
      * $envelope_complete When set to **true**, the user receives notification that the envelope has been completed.
      * @var string
      */
    protected $envelope_complete;
    
    /**
      * $changed_signer When set to **true**, the sender receives notification if the signer changes.
      * @var string
      */
    protected $changed_signer;
    
    /**
      * $sender_envelope_declined 
      * @var string
      */
    protected $sender_envelope_declined;
    
    /**
      * $withdrawn_consent When set to **true**, the user receives notification if consent is withdrawn.
      * @var string
      */
    protected $withdrawn_consent;
    
    /**
      * $recipient_viewed When set to **true**, the sender receives notification that the recipient viewed the enveloper.
      * @var string
      */
    protected $recipient_viewed;
    
    /**
      * $delivery_failed When set to **true**, the sender receives notification if the delivery of the envelope fails.
      * @var string
      */
    protected $delivery_failed;
    
    /**
      * $offline_signing_failed When set to **true**, the user receives notification if the offline signing failed.
      * @var string
      */
    protected $offline_signing_failed;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->envelope_complete = $data["envelope_complete"];
            $this->changed_signer = $data["changed_signer"];
            $this->sender_envelope_declined = $data["sender_envelope_declined"];
            $this->withdrawn_consent = $data["withdrawn_consent"];
            $this->recipient_viewed = $data["recipient_viewed"];
            $this->delivery_failed = $data["delivery_failed"];
            $this->offline_signing_failed = $data["offline_signing_failed"];
        }
    }
    
    /**
     * Gets envelope_complete
     * @return string
     */
    public function getEnvelopeComplete()
    {
        return $this->envelope_complete;
    }
  
    /**
     * Sets envelope_complete
     * @param string $envelope_complete When set to **true**, the user receives notification that the envelope has been completed.
     * @return $this
     */
    public function setEnvelopeComplete($envelope_complete)
    {
        
        $this->envelope_complete = $envelope_complete;
        return $this;
    }
    
    /**
     * Gets changed_signer
     * @return string
     */
    public function getChangedSigner()
    {
        return $this->changed_signer;
    }
  
    /**
     * Sets changed_signer
     * @param string $changed_signer When set to **true**, the sender receives notification if the signer changes.
     * @return $this
     */
    public function setChangedSigner($changed_signer)
    {
        
        $this->changed_signer = $changed_signer;
        return $this;
    }
    
    /**
     * Gets sender_envelope_declined
     * @return string
     */
    public function getSenderEnvelopeDeclined()
    {
        return $this->sender_envelope_declined;
    }
  
    /**
     * Sets sender_envelope_declined
     * @param string $sender_envelope_declined 
     * @return $this
     */
    public function setSenderEnvelopeDeclined($sender_envelope_declined)
    {
        
        $this->sender_envelope_declined = $sender_envelope_declined;
        return $this;
    }
    
    /**
     * Gets withdrawn_consent
     * @return string
     */
    public function getWithdrawnConsent()
    {
        return $this->withdrawn_consent;
    }
  
    /**
     * Sets withdrawn_consent
     * @param string $withdrawn_consent When set to **true**, the user receives notification if consent is withdrawn.
     * @return $this
     */
    public function setWithdrawnConsent($withdrawn_consent)
    {
        
        $this->withdrawn_consent = $withdrawn_consent;
        return $this;
    }
    
    /**
     * Gets recipient_viewed
     * @return string
     */
    public function getRecipientViewed()
    {
        return $this->recipient_viewed;
    }
  
    /**
     * Sets recipient_viewed
     * @param string $recipient_viewed When set to **true**, the sender receives notification that the recipient viewed the enveloper.
     * @return $this
     */
    public function setRecipientViewed($recipient_viewed)
    {
        
        $this->recipient_viewed = $recipient_viewed;
        return $this;
    }
    
    /**
     * Gets delivery_failed
     * @return string
     */
    public function getDeliveryFailed()
    {
        return $this->delivery_failed;
    }
  
    /**
     * Sets delivery_failed
     * @param string $delivery_failed When set to **true**, the sender receives notification if the delivery of the envelope fails.
     * @return $this
     */
    public function setDeliveryFailed($delivery_failed)
    {
        
        $this->delivery_failed = $delivery_failed;
        return $this;
    }
    
    /**
     * Gets offline_signing_failed
     * @return string
     */
    public function getOfflineSigningFailed()
    {
        return $this->offline_signing_failed;
    }
  
    /**
     * Sets offline_signing_failed
     * @param string $offline_signing_failed When set to **true**, the user receives notification if the offline signing failed.
     * @return $this
     */
    public function setOfflineSigningFailed($offline_signing_failed)
    {
        
        $this->offline_signing_failed = $offline_signing_failed;
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
