<?php
/**
 * RecipientViewRequest
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
 * RecipientViewRequest Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecipientViewRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'client_user_id' => 'string',
        'user_id' => 'string',
        'user_name' => 'string',
        'email' => 'string',
        'recipient_id' => 'string',
        'return_url' => 'string',
        'ping_url' => 'string',
        'ping_frequency' => 'string',
        'authentication_method' => 'string',
        'assertion_id' => 'string',
        'authentication_instant' => 'string',
        'security_domain' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'client_user_id' => 'clientUserId',
        'user_id' => 'userId',
        'user_name' => 'userName',
        'email' => 'email',
        'recipient_id' => 'recipientId',
        'return_url' => 'returnUrl',
        'ping_url' => 'pingUrl',
        'ping_frequency' => 'pingFrequency',
        'authentication_method' => 'authenticationMethod',
        'assertion_id' => 'assertionId',
        'authentication_instant' => 'authenticationInstant',
        'security_domain' => 'securityDomain'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'client_user_id' => 'setClientUserId',
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'email' => 'setEmail',
        'recipient_id' => 'setRecipientId',
        'return_url' => 'setReturnUrl',
        'ping_url' => 'setPingUrl',
        'ping_frequency' => 'setPingFrequency',
        'authentication_method' => 'setAuthenticationMethod',
        'assertion_id' => 'setAssertionId',
        'authentication_instant' => 'setAuthenticationInstant',
        'security_domain' => 'setSecurityDomain'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'client_user_id' => 'getClientUserId',
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'email' => 'getEmail',
        'recipient_id' => 'getRecipientId',
        'return_url' => 'getReturnUrl',
        'ping_url' => 'getPingUrl',
        'ping_frequency' => 'getPingFrequency',
        'authentication_method' => 'getAuthenticationMethod',
        'assertion_id' => 'getAssertionId',
        'authentication_instant' => 'getAuthenticationInstant',
        'security_domain' => 'getSecurityDomain'
    );
  
    
    /**
      * $client_user_id A sender created value that shows the recipient is embedded (captive). \n\nMaximum length: 100 characters.
      * @var string
      */
    protected $client_user_id;
    
    /**
      * $user_id Specifies the user ID of the recipient. You can use with user ID or email and user name to identify the recipient. If user ID is used and a client user ID is provided, the value in the `userId` property must match a recipient ID (which can be retrieved with a GET recipients call) for the envelope. If a user ID is used and a clientUser ID is not provided, the user ID match the user ID of the authenticating user.
      * @var string
      */
    protected $user_id;
    
    /**
      * $user_name Specifies the username of the recipient. You can use either email and userName or userId to identify the recipient.
      * @var string
      */
    protected $user_name;
    
    /**
      * $email Specifies the email of the recipient. You can use either email and userName or userId to identify the recipient.
      * @var string
      */
    protected $email;
    
    /**
      * $recipient_id Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
      * @var string
      */
    protected $recipient_id;
    
    /**
      * $return_url The URL the recipient is directed to on certain events. DocuSign sends returns to the URL and includes an event parameter that can be used to redirect the recipient to another location. The possible event parameters returned are: \n\n* cancel (recipient cancels signing)\n* decline (recipient declines signing)\n* exception (exception occurs)\n* fax_pending (recipient has fax pending)\n* check); session_timeout (session times out)\n* completes signing)\n* expires)\n* viewing_complete (recipient completes viewing the envelope)\n\n## Important: You must include HTTPS:// in the URL or the redirect might be blocked by some browsers.
      * @var string
      */
    protected $return_url;
    
    /**
      * $ping_url A client Url to be pinged by the DocuSign Signing experience to indicate to the client that Signing is active. An HTTP Get is executed against the client. The response from the client is ignored. The intent is for the client to reset it's session timer when the request is received.
      * @var string
      */
    protected $ping_url;
    
    /**
      * $ping_frequency Only used if pingUrl is specified. This is the interval, in seconds, between pings on the pingUrl.  The default is 300 seconds. Valid values are 60-1200 seconds.
      * @var string
      */
    protected $ping_frequency;
    
    /**
      * $authentication_method A sender created value that indicates the convention used to authenticate the signer. This information is included in the Certificate of Completion.
      * @var string
      */
    protected $authentication_method;
    
    /**
      * $assertion_id A unique identifier of the authentication event executed by the client application.
      * @var string
      */
    protected $assertion_id;
    
    /**
      * $authentication_instant A sender generated value that indicates the date/time that the signer was authenticated.
      * @var string
      */
    protected $authentication_instant;
    
    /**
      * $security_domain The domain in which the user authenticated.
      * @var string
      */
    protected $security_domain;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->client_user_id = $data["client_user_id"];
            $this->user_id = $data["user_id"];
            $this->user_name = $data["user_name"];
            $this->email = $data["email"];
            $this->recipient_id = $data["recipient_id"];
            $this->return_url = $data["return_url"];
            $this->ping_url = $data["ping_url"];
            $this->ping_frequency = $data["ping_frequency"];
            $this->authentication_method = $data["authentication_method"];
            $this->assertion_id = $data["assertion_id"];
            $this->authentication_instant = $data["authentication_instant"];
            $this->security_domain = $data["security_domain"];
        }
    }
    
    /**
     * Gets client_user_id
     * @return string
     */
    public function getClientUserId()
    {
        return $this->client_user_id;
    }
  
    /**
     * Sets client_user_id
     * @param string $client_user_id A sender created value that shows the recipient is embedded (captive). \n\nMaximum length: 100 characters.
     * @return $this
     */
    public function setClientUserId($client_user_id)
    {
        
        $this->client_user_id = $client_user_id;
        return $this;
    }
    
    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }
  
    /**
     * Sets user_id
     * @param string $user_id Specifies the user ID of the recipient. You can use with user ID or email and user name to identify the recipient. If user ID is used and a client user ID is provided, the value in the `userId` property must match a recipient ID (which can be retrieved with a GET recipients call) for the envelope. If a user ID is used and a clientUser ID is not provided, the user ID match the user ID of the authenticating user.
     * @return $this
     */
    public function setUserId($user_id)
    {
        
        $this->user_id = $user_id;
        return $this;
    }
    
    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }
  
    /**
     * Sets user_name
     * @param string $user_name Specifies the username of the recipient. You can use either email and userName or userId to identify the recipient.
     * @return $this
     */
    public function setUserName($user_name)
    {
        
        $this->user_name = $user_name;
        return $this;
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email Specifies the email of the recipient. You can use either email and userName or userId to identify the recipient.
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
        return $this;
    }
    
    /**
     * Gets recipient_id
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipient_id;
    }
  
    /**
     * Sets recipient_id
     * @param string $recipient_id Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        
        $this->recipient_id = $recipient_id;
        return $this;
    }
    
    /**
     * Gets return_url
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->return_url;
    }
  
    /**
     * Sets return_url
     * @param string $return_url The URL the recipient is directed to on certain events. DocuSign sends returns to the URL and includes an event parameter that can be used to redirect the recipient to another location. The possible event parameters returned are: \n\n* cancel (recipient cancels signing)\n* decline (recipient declines signing)\n* exception (exception occurs)\n* fax_pending (recipient has fax pending)\n* check); session_timeout (session times out)\n* completes signing)\n* expires)\n* viewing_complete (recipient completes viewing the envelope)\n\n## Important: You must include HTTPS:// in the URL or the redirect might be blocked by some browsers.
     * @return $this
     */
    public function setReturnUrl($return_url)
    {
        
        $this->return_url = $return_url;
        return $this;
    }
    
    /**
     * Gets ping_url
     * @return string
     */
    public function getPingUrl()
    {
        return $this->ping_url;
    }
  
    /**
     * Sets ping_url
     * @param string $ping_url A client Url to be pinged by the DocuSign Signing experience to indicate to the client that Signing is active. An HTTP Get is executed against the client. The response from the client is ignored. The intent is for the client to reset it's session timer when the request is received.
     * @return $this
     */
    public function setPingUrl($ping_url)
    {
        
        $this->ping_url = $ping_url;
        return $this;
    }
    
    /**
     * Gets ping_frequency
     * @return string
     */
    public function getPingFrequency()
    {
        return $this->ping_frequency;
    }
  
    /**
     * Sets ping_frequency
     * @param string $ping_frequency Only used if pingUrl is specified. This is the interval, in seconds, between pings on the pingUrl.  The default is 300 seconds. Valid values are 60-1200 seconds.
     * @return $this
     */
    public function setPingFrequency($ping_frequency)
    {
        
        $this->ping_frequency = $ping_frequency;
        return $this;
    }
    
    /**
     * Gets authentication_method
     * @return string
     */
    public function getAuthenticationMethod()
    {
        return $this->authentication_method;
    }
  
    /**
     * Sets authentication_method
     * @param string $authentication_method A sender created value that indicates the convention used to authenticate the signer. This information is included in the Certificate of Completion.
     * @return $this
     */
    public function setAuthenticationMethod($authentication_method)
    {
        
        $this->authentication_method = $authentication_method;
        return $this;
    }
    
    /**
     * Gets assertion_id
     * @return string
     */
    public function getAssertionId()
    {
        return $this->assertion_id;
    }
  
    /**
     * Sets assertion_id
     * @param string $assertion_id A unique identifier of the authentication event executed by the client application.
     * @return $this
     */
    public function setAssertionId($assertion_id)
    {
        
        $this->assertion_id = $assertion_id;
        return $this;
    }
    
    /**
     * Gets authentication_instant
     * @return string
     */
    public function getAuthenticationInstant()
    {
        return $this->authentication_instant;
    }
  
    /**
     * Sets authentication_instant
     * @param string $authentication_instant A sender generated value that indicates the date/time that the signer was authenticated.
     * @return $this
     */
    public function setAuthenticationInstant($authentication_instant)
    {
        
        $this->authentication_instant = $authentication_instant;
        return $this;
    }
    
    /**
     * Gets security_domain
     * @return string
     */
    public function getSecurityDomain()
    {
        return $this->security_domain;
    }
  
    /**
     * Sets security_domain
     * @param string $security_domain The domain in which the user authenticated.
     * @return $this
     */
    public function setSecurityDomain($security_domain)
    {
        
        $this->security_domain = $security_domain;
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
