<?php
/**
 * ObjectStorage
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Object Storage API Documentation
 *
 * A scalable, reliable, and cost-effective Object Storage solution to support your application from liara-cloud
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@liara.ir
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto-generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client;

use OpenAPI\Client\Configuration;
use OpenAPI\Client\Api\BucketApi;
use OpenAPI\Client\Api\FolderApi;
use OpenAPI\Client\Api\KeyApi;
use OpenAPI\Client\Api\MetricsApi;
use OpenAPI\Client\Api\ObjectApi;

/**
 * ObjectStorage Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectStorage
{
    public Configuration $objectStorage;
    public BucketApi $BucketApi;
    public KeyApi $KeyApi;
    public FolderApi $FolderApi;
    public ObjectApi $ObjectApi;
    public MetricsApi $MetricsApi;

    public function __construct(string $token)
    {
        $this->objectStorage = Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://storage-service.iran.liara.ir");

        $this->BucketApi = new BucketApi(null, $this->objectStorage);
        $this->KeyApi = new KeyApi(null, $this->objectStorage);
        $this->FolderApi = new FolderApi(null, $this->objectStorage);
        $this->ObjectApi = new ObjectApi(null, $this->objectStorage);
        $this->MetricsApi = new MetricsApi(null, $this->objectStorage);
    }
}