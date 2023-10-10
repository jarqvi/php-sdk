<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client;

use OpenAPI\Client\Configuration;

use OpenAPI\Client\Api\AccountsApi;
use OpenAPI\Client\Api\AppsApi;
use OpenAPI\Client\Api\AttachmentsApi;
use OpenAPI\Client\Api\BackupsApi;
use OpenAPI\Client\Api\BucketApi;
use OpenAPI\Client\Api\CheckNameServersApi;
use OpenAPI\Client\Api\DatabasesApi;
use OpenAPI\Client\Api\DeployApi;
use OpenAPI\Client\Api\DisksApi;
use OpenAPI\Client\Api\DnsRecordApi;
use OpenAPI\Client\Api\DomainsApi;
use OpenAPI\Client\Api\EventApi;
use OpenAPI\Client\Api\FolderApi;
use OpenAPI\Client\Api\ForwardApi;
use OpenAPI\Client\Api\InboundrulesApi;
use OpenAPI\Client\Api\KeyApi;
use OpenAPI\Client\Api\MailsApi;
use OpenAPI\Client\Api\MessagesApi;
use OpenAPI\Client\Api\MetricsApi;
use OpenAPI\Client\Api\ObjectApi;
use OpenAPI\Client\Api\ReportsApi;
use OpenAPI\Client\Api\SettingsApi;
use OpenAPI\Client\Api\SmtpApi;
use OpenAPI\Client\Api\ZoneApi;

class Paas
{
    public $paasConfig;

    public $AppsApi;
    public $DeployApi;
    public $SettingsApi;
    public $DisksApi;
    public $DomainsApi;
    public $ReportsApi;

    public function __construct($token)
    {
        $this->paasConfig = Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://api.iran.liara.ir");

        $this->AppsApi = new AppsApi(null, $this->paasConfig);
        $this->DeployApi = new DeployApi(null, $this->paasConfig);
        $this->SettingsApi = new SettingsApi(null, $this->paasConfig);
        $this->DisksApi = new DisksApi(null, $this->paasConfig);
        $this->DomainsApi = new DomainsApi(null, $this->paasConfig);
        $this->ReportsApi = new ReportsApi(null, $this->paasConfig);
    }
}

class DBaas
{
    public $dbaasConfig;

    public $DatabasesApi;
    public $BackupsApi;
    public $ReportsApi;

    public function __construct($token)
    {
        $this->dbaasConfig = Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://api.iran.liara.ir");

        $this->DatabasesApi = new DatabasesApi(null, $this->dbaasConfig);
        $this->BackupsApi = new BackupsApi(null, $this->dbaasConfig);
        $this->ReportsApi = new ReportsApi(null, $this->dbaasConfig);
    }
}

class Dns
{
    public $dnsConfig;

    public $ZoneApi;
    public $CheckNameServersApi;
    public $DnsRecordApi;

    public function __construct($token)
    {
        $this->dnsConfig = Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://dns-service.iran.liara.ir");

        $this->ZoneApi = new ZoneApi(null, $this->dnsConfig);
        $this->CheckNameServersApi = new CheckNameServersApi(null, $this->dnsConfig);
        $this->DnsRecordApi = new DnsRecordApi(null, $this->dnsConfig);
    }
}

class Mail
{
    public $mailConfig;

    public $MailsApi;
    public $InboundrulesApi;
    public $SmtpApi;
    public $AccountsApi;
    public $MessagesApi;
    public $ForwardApi;
    public $AttachmentsApi;
    public $EventApi;

    public function __construct($token)
    {
        $this->mailConfig = Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://mail-service.iran.liara.ir");

        $this->MailsApi = new MailsApi(null, $this->mailConfig);
        $this->InboundrulesApi = new InboundrulesApi(null, $this->mailConfig);
        $this->SmtpApi = new SmtpApi(null, $this->mailConfig);
        $this->AccountsApi = new AccountsApi(null, $this->mailConfig);
        $this->MessagesApi = new MessagesApi(null, $this->mailConfig);
        $this->ForwardApi = new ForwardApi(null, $this->mailConfig);
        $this->AttachmentsApi = new AttachmentsApi(null, $this->mailConfig);
        $this->EventApi = new EventApi(null, $this->mailConfig);
    }
}

class ObjectStorage
{
    public $objectStorage;

    public $BucketApi;
    public $KeyApi;
    public $FolderApi;
    public $ObjectApi;
    public $MetricsApi;

    public function __construct($token)
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