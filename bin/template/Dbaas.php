<?php
/**
 * Dbaas
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DBaaS
 *
 * Manage your databases using our API
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@liara.ir
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client;

use \Exception;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Api\BackupsApi;
use OpenAPI\Client\Api\DatabasesApi;
use OpenAPI\Client\Api\ReportsApi;

/**
 * Dbaas Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Dbaas extends Exception
{
    public Configuration $dbaasConfig;
    public DatabasesApi $DatabasesApi;
    public BackupsApi $BackupsApi;
    public ReportsApi $ReportsApi;

    public function __construct(string $token)
    {
        $this->dbaasConfig = Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://api.iran.liara.ir");

        $this->DatabasesApi = new DatabasesApi(null, $this->dbaasConfig);
        $this->BackupsApi = new BackupsApi(null, $this->dbaasConfig);
        $this->ReportsApi = new ReportsApi(null, $this->dbaasConfig);
    }
}