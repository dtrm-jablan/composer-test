<?php
/**
 * UsersApi
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


namespace DocuSign\eSign\Api\UsersApi;



namespace DocuSign\eSign\Api;

use \DocuSign\eSign\Configuration;
use \DocuSign\eSign\ApiClient;
use \DocuSign\eSign\ApiException;
use \DocuSign\eSign\ObjectSerializer;

/**
 * UsersApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersApi
{

    /**
     * API Client
     * @var \DocuSign\eSign\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \DocuSign\eSign\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://www.docusign.net/restapi');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \DocuSign\eSign\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \DocuSign\eSign\ApiClient $apiClient set the API client
     * @return UsersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    
    /**
     * getSettings
     *
     * Gets the user account settings for a specified user.
     *
     *
     @param string $account_id The external account number (int) or account ID Guid. (required) *
     @param string $user_id The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing. (required)
     * @return \DocuSign\eSign\Model\UserSettingsInformation
     * @throws \DocuSign\eSign\ApiException on non-2xx response
     */
    public function getSettings($account_id, $user_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getSettingsWithHttpInfo ($account_id, $user_id);
        return $response; 
    }


    /**
     * getSettingsWithHttpInfo
     *
     * Gets the user account settings for a specified user.
     *
     *
     @param string $account_id The external account number (int) or account ID Guid. (required) *
     @param string $user_id The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing. (required)
     * @return Array of \DocuSign\eSign\Model\UserSettingsInformation, HTTP status code, HTTP response headers (array of strings)
     * @throws \DocuSign\eSign\ApiException on non-2xx response
     */
    public function getSettingsWithHttpInfo($account_id, $user_id)
    {
        
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getSettings');
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getSettings');
        }
  
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/users/{userId}/settings";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "accountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }// path params
        
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "userId" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\DocuSign\eSign\Model\UserSettingsInformation'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\DocuSign\eSign\ObjectSerializer::deserialize($response, '\DocuSign\eSign\Model\UserSettingsInformation', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \DocuSign\eSign\ObjectSerializer::deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\UserSettingsInformation', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = \DocuSign\eSign\ObjectSerializer::deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}