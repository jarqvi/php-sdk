# OpenAPIClient-php

A fully featured mail delivery platform for incoming & outgoing e-mail

For more information, please visit [https://liara.ir](https://liara.ir).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_server_id = 'mail_server_id_example'; // string
$account_name = 'account_name_example'; // string

try {
    $result = $apiInstance->checkMailAvailable($mail_server_id, $account_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->checkMailAvailable: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://mail-service.iran.liara.ir*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**checkMailAvailable**](docs/Api/AccountsApi.md#checkmailavailable) | **GET** /api/v1/mails/{mailServerID}/accounts/{accountName}/check-availability | check if mail account is available
*AccountsApi* | [**createMailACcount**](docs/Api/AccountsApi.md#createmailaccount) | **POST** /api/v1/mails/{mailServerID}/accounts | add mail account
*AccountsApi* | [**deleteMailAccount**](docs/Api/AccountsApi.md#deletemailaccount) | **DELETE** /api/v1/mails/{mailServerID}/accounts/{accountID} | delete mail account
*AccountsApi* | [**getAllMailAccounts**](docs/Api/AccountsApi.md#getallmailaccounts) | **GET** /api/v1/mails/{mailServerID}/accounts | get all mail accounts
*AttachmentsApi* | [**downloadAttachments**](docs/Api/AttachmentsApi.md#downloadattachments) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID}/attachments/{attachmentID} | download attachment
*AttachmentsApi* | [**getAllAttachments**](docs/Api/AttachmentsApi.md#getallattachments) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID}/attachments | get all attachments for message
*EventApi* | [**getAllEvents**](docs/Api/EventApi.md#getallevents) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID}/events | get all events for message
*ForwardApi* | [**createAddressForwarding**](docs/Api/ForwardApi.md#createaddressforwarding) | **POST** /api/v1/mails/{mailServerID}/accounts/{accountID}/forwards | add address endpoint to forwarding mails
*ForwardApi* | [**deleteExtraEndpoint**](docs/Api/ForwardApi.md#deleteextraendpoint) | **DELETE** /api/v1/mails/{mailServerID}/accounts/{accountID}/forwards/{addressID} | delete extra endpoint address
*ForwardApi* | [**getListAddressForwarding**](docs/Api/ForwardApi.md#getlistaddressforwarding) | **GET** /api/v1/mails/{mailServerID}/accounts/{accountID}/forwards | get all extra address to forwarding mails
*InboundrulesApi* | [**addInboundRule**](docs/Api/InboundrulesApi.md#addinboundrule) | **POST** /api/v1/mails/{mailServerID}/inboundrules | add inbound rule.
*InboundrulesApi* | [**deleteInboundRule**](docs/Api/InboundrulesApi.md#deleteinboundrule) | **DELETE** /api/v1/mail/{mailServerID}/inboundrules/{inboundruleID} | delete inbound rule.
*InboundrulesApi* | [**getAllInboundRules**](docs/Api/InboundrulesApi.md#getallinboundrules) | **GET** /api/v1/mails/{mailServerID}/inboundrules | get all inbound rules.
*MailsApi* | [**changeMailServerPlan**](docs/Api/MailsApi.md#changemailserverplan) | **PUT** /api/v1/mails/{mailServerID}/plans | change mail server plan
*MailsApi* | [**checkDomainAvailable**](docs/Api/MailsApi.md#checkdomainavailable) | **GET** /api/v1/mails/{domain}/check-availability | check if domain name is available
*MailsApi* | [**checkMailServerDnsStatus**](docs/Api/MailsApi.md#checkmailserverdnsstatus) | **GET** /api/v1/mails/{mailServerID}/dns-check | mail server check dns status
*MailsApi* | [**deleteMailServer**](docs/Api/MailsApi.md#deletemailserver) | **DELETE** /api/v1/mails/{mailServerID} | delete mail server
*MailsApi* | [**editMailServer**](docs/Api/MailsApi.md#editmailserver) | **PATCH** /api/v1/mails/{mailServerID} | edit mail server
*MailsApi* | [**getCountFreeMails**](docs/Api/MailsApi.md#getcountfreemails) | **GET** /api/v1/mails/{mailServerID}/remaining-free-emails | count number of free mails every month
*MailsApi* | [**getCountMails**](docs/Api/MailsApi.md#getcountmails) | **GET** /api/v1/mails/{mailServerID}/counts | count number of sent mails every day
*MailsApi* | [**getMails**](docs/Api/MailsApi.md#getmails) | **GET** /api/v1/mails | get all mail servers
*MailsApi* | [**getSingleMailServer**](docs/Api/MailsApi.md#getsinglemailserver) | **GET** /api/v1/mails/{mailServerID} | get single mail server
*MailsApi* | [**postMails**](docs/Api/MailsApi.md#postmails) | **POST** /api/v1/mails | create mail server
*MessagesApi* | [**generateTemporary**](docs/Api/MessagesApi.md#generatetemporary) | **POST** /api/v1/mails/{mailServerID}/messages/{messageID}/temporary-access | generate temporary access to email html
*MessagesApi* | [**getAllMails**](docs/Api/MessagesApi.md#getallmails) | **GET** /api/v1/mails/{mailServerID}/messages | get all mails
*MessagesApi* | [**getSingleMail**](docs/Api/MessagesApi.md#getsinglemail) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID} | get single mail
*MessagesApi* | [**getSingleMailHtml**](docs/Api/MessagesApi.md#getsinglemailhtml) | **GET** /api/v1/mails/{mailServerID}/messages/{messageID}/render | get single mail html
*MessagesApi* | [**sendMail**](docs/Api/MessagesApi.md#sendmail) | **POST** /api/v1/mails/{mailServerID}/messages | send a mail
*SmtpApi* | [**deleteSmtpCredential**](docs/Api/SmtpApi.md#deletesmtpcredential) | **DELETE** /api/v1/mails/{mailServerID}/smtp-credentials/{username} | delete smtp credential
*SmtpApi* | [**generateCredentials**](docs/Api/SmtpApi.md#generatecredentials) | **POST** /api/v1/mails/{mailServerID}/smtp-credentials | generate credentials to connet mail server with SMTP
*SmtpApi* | [**getCredential**](docs/Api/SmtpApi.md#getcredential) | **GET** /api/v1/mails/{mailServerID}/smtp-credentials | get credential to connect to mail server with SMTP
*SmtpApi* | [**revokeCredentials**](docs/Api/SmtpApi.md#revokecredentials) | **PATCH** /api/v1/mails/{mailServerID}/smtp-credentials | revoke credentials to connect mail server with SMTP

## Models

- [CheckDNS](docs/Model/CheckDNS.md)
- [CheckDNSData](docs/Model/CheckDNSData.md)
- [CheckDNSResponse](docs/Model/CheckDNSResponse.md)
- [CheckDNSResponseDnsSetup](docs/Model/CheckDNSResponseDnsSetup.md)
- [CheckDNSResponseDnsSetupDkim](docs/Model/CheckDNSResponseDnsSetupDkim.md)
- [CheckDNSResponseDnsSetupMxRecord](docs/Model/CheckDNSResponseDnsSetupMxRecord.md)
- [CheckDNSResponseDnsSetupReturnPath](docs/Model/CheckDNSResponseDnsSetupReturnPath.md)
- [CheckDNSResponseDnsSetupSpf](docs/Model/CheckDNSResponseDnsSetupSpf.md)
- [CountMailPerDay](docs/Model/CountMailPerDay.md)
- [CountMailPerDayData](docs/Model/CountMailPerDayData.md)
- [CountMailPerDayDataEmailPerDayInner](docs/Model/CountMailPerDayDataEmailPerDayInner.md)
- [CreateSMTP](docs/Model/CreateSMTP.md)
- [CreateSMTPData](docs/Model/CreateSMTPData.md)
- [DownloadAttachments200Response](docs/Model/DownloadAttachments200Response.md)
- [DownloadAttachments200ResponseData](docs/Model/DownloadAttachments200ResponseData.md)
- [GetSingleMail200Response](docs/Model/GetSingleMail200Response.md)
- [GetSingleMail200ResponseData](docs/Model/GetSingleMail200ResponseData.md)
- [MailAccounts](docs/Model/MailAccounts.md)
- [MailAccountsData](docs/Model/MailAccountsData.md)
- [MailAccountsDataAccountsInner](docs/Model/MailAccountsDataAccountsInner.md)
- [MailAttachment](docs/Model/MailAttachment.md)
- [MailAttachments](docs/Model/MailAttachments.md)
- [MailAttachmentsData](docs/Model/MailAttachmentsData.md)
- [MailEvents](docs/Model/MailEvents.md)
- [MailEventsData](docs/Model/MailEventsData.md)
- [MailForwards](docs/Model/MailForwards.md)
- [MailForwardsData](docs/Model/MailForwardsData.md)
- [MailForwardsDataForwardersInner](docs/Model/MailForwardsDataForwardersInner.md)
- [MailInboundRules](docs/Model/MailInboundRules.md)
- [MailInboundRulesData](docs/Model/MailInboundRulesData.md)
- [MailInboundRulesDataMailInboundrulesInner](docs/Model/MailInboundRulesDataMailInboundrulesInner.md)
- [MailMessage](docs/Model/MailMessage.md)
- [MailMessageStatus](docs/Model/MailMessageStatus.md)
- [MailMessages](docs/Model/MailMessages.md)
- [MailMessagesData](docs/Model/MailMessagesData.md)
- [MailServer](docs/Model/MailServer.md)
- [MailServerData](docs/Model/MailServerData.md)
- [MailServerResponse](docs/Model/MailServerResponse.md)
- [MailServerResponseRateLimitTier](docs/Model/MailServerResponseRateLimitTier.md)
- [MailServers](docs/Model/MailServers.md)
- [MailServersData](docs/Model/MailServersData.md)
- [Mode](docs/Model/Mode.md)
- [Model1](docs/Model/Model1.md)
- [Model10](docs/Model/Model10.md)
- [Model11](docs/Model/Model11.md)
- [Model2](docs/Model/Model2.md)
- [Model3](docs/Model/Model3.md)
- [Model4](docs/Model/Model4.md)
- [Model5](docs/Model/Model5.md)
- [Model6](docs/Model/Model6.md)
- [Model8](docs/Model/Model8.md)
- [Model9](docs/Model/Model9.md)
- [PostMails201Response](docs/Model/PostMails201Response.md)
- [RemainingFreeMails](docs/Model/RemainingFreeMails.md)
- [RemainingFreeMailsData](docs/Model/RemainingFreeMailsData.md)
- [SMTP](docs/Model/SMTP.md)
- [SMTPData](docs/Model/SMTPData.md)
- [SMTPDataCredentialsInner](docs/Model/SMTPDataCredentialsInner.md)
- [TmpAccess](docs/Model/TmpAccess.md)
- [TmpAccessData](docs/Model/TmpAccessData.md)

## Authorization

Authentication schemes defined for the API:
### jwt

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@liara.ir

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
