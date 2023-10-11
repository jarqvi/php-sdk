<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
        $this->paasConfig = OpenAPI\Client\Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://api.iran.liara.ir");

        $this->AppsApi = new OpenAPI\Client\Api\AppsApi(null, $this->paasConfig);
        $this->DeployApi = new OpenAPI\Client\Api\DeployApi(null, $this->paasConfig);
        $this->SettingsApi = new OpenAPI\Client\Api\SettingsApi(null, $this->paasConfig);
        $this->DisksApi = new OpenAPI\Client\Api\DisksApi(null, $this->paasConfig);
        $this->DomainsApi = new OpenAPI\Client\Api\DomainsApi(null, $this->paasConfig);
        $this->ReportsApi = new OpenAPI\Client\Api\ReportsApi(null, $this->paasConfig);
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
        $this->dbaasConfig = OpenAPI\Client\Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://api.iran.liara.ir");

        $this->DatabasesApi = new OpenAPI\Client\Api\DatabasesApi(null, $this->dbaasConfig);
        $this->BackupsApi = new OpenAPI\Client\Api\BackupsApi(null, $this->dbaasConfig);
        $this->ReportsApi = new OpenAPI\Client\Api\ReportsApi(null, $this->dbaasConfig);
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
        $this->dnsConfig = OpenAPI\Client\Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://dns-service.iran.liara.ir");

        $this->ZoneApi = new OpenAPI\Client\Api\ZoneApi(null, $this->dnsConfig);
        $this->CheckNameServersApi = new OpenAPI\Client\Api\CheckNameServersApi(null, $this->dnsConfig);
        $this->DnsRecordApi = new OpenAPI\Client\Api\DnsRecordApi(null, $this->dnsConfig);
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
        $this->mailConfig = OpenAPI\Client\Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://mail-service.iran.liara.ir");

        $this->MailsApi = new OpenAPI\Client\Api\MailsApi(null, $this->mailConfig);
        $this->InboundrulesApi = new OpenAPI\Client\Api\InboundrulesApi(null, $this->mailConfig);
        $this->SmtpApi = new OpenAPI\Client\Api\SmtpApi(null, $this->mailConfig);
        $this->AccountsApi = new OpenAPI\Client\Api\AccountsApi(null, $this->mailConfig);
        $this->MessagesApi = new OpenAPI\Client\Api\MessagesApi(null, $this->mailConfig);
        $this->ForwardApi = new OpenAPI\Client\Api\ForwardApi(null, $this->mailConfig);
        $this->AttachmentsApi = new OpenAPI\Client\Api\AttachmentsApi(null, $this->mailConfig);
        $this->EventApi = new OpenAPI\Client\Api\EventApi(null, $this->mailConfig);
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
        $this->objectStorage = OpenAPI\Client\Configuration::getDefaultConfiguration()
            ->setApiKey("Authorization", "Bearer $token")
            ->setHost("https://storage-service.iran.liara.ir");

        $this->BucketApi = new OpenAPI\Client\Api\BucketApi(null, $this->objectStorage);
        $this->KeyApi = new OpenAPI\Client\Api\KeyApi(null, $this->objectStorage);
        $this->FolderApi = new OpenAPI\Client\Api\FolderApi(null, $this->objectStorage);
        $this->ObjectApi = new OpenAPI\Client\Api\ObjectApi(null, $this->objectStorage);
        $this->MetricsApi = new OpenAPI\Client\Api\MetricsApi(null, $this->objectStorage);
    }
}