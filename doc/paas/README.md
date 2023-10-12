# OpenAPIClient-php

Manage your apps using our API

[wss://api.iran.liara.ir?token=<api-token>&cmd=/bin/bash&project_id=<project-id>](
wss://api.iran.liara.ir?token=<api-token>&cmd=/bin/bash&project_id=<project-id>)

Parameters:
- `token`: Your api token in liara
- `cmd`: By default /bin/bash
- `project_id`: The id of your project in liara

This `WebSocket` endpoint allows `real-time`
communication with the projects service hosted
at `Liara` You can use `WebSocket protocols`
to send and receive data, enabling efficient and
low-latency interactions with the projects


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

use OpenAPI\Client\Paas;

try {
    $instance = new Paas('');
    $result = $instance->AppsApi->getApps();
    print_r("$result \n");
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.iran.liara.ir*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppsApi* | [**changePlan**](docs/Api/AppsApi.md#changeplan) | **POST** /v1/projects/{name}/resize | Change plan
*AppsApi* | [**createApp**](docs/Api/AppsApi.md#createapp) | **POST** /v1/projects | Create a app
*AppsApi* | [**deleteAppByName**](docs/Api/AppsApi.md#deleteappbyname) | **DELETE** /v1/projects/{name} | Delete a app
*AppsApi* | [**getAppApplets**](docs/Api/AppsApi.md#getappapplets) | **GET** /v1/projects/{name}/applets | Get applets of app
*AppsApi* | [**getAppByName**](docs/Api/AppsApi.md#getappbyname) | **GET** /v1/projects/{name} | Get details of a project
*AppsApi* | [**getAppLogs**](docs/Api/AppsApi.md#getapplogs) | **GET** /v1/projects/{name}/logs | Get logs of app
*AppsApi* | [**getAppReleases**](docs/Api/AppsApi.md#getappreleases) | **GET** /v1/projects/{name}/releases | Get releases of app
*AppsApi* | [**getApps**](docs/Api/AppsApi.md#getapps) | **GET** /v1/projects | Get details of all projects
*AppsApi* | [**restartApp**](docs/Api/AppsApi.md#restartapp) | **POST** /v1/projects/{name}/actions/restart | To restart a app
*AppsApi* | [**turnApp**](docs/Api/AppsApi.md#turnapp) | **POST** /v1/projects/{name}/actions/scale | Turn on or off a app
*DeployApi* | [**releasesDeploy**](docs/Api/DeployApi.md#releasesdeploy) | **POST** /v2/projects/{name}/releases | Deploy releases
*DeployApi* | [**sourcesDeploy**](docs/Api/DeployApi.md#sourcesdeploy) | **POST** /v2/projects/{name}/sources | Deploy sources code
*DisksApi* | [**createBackup**](docs/Api/DisksApi.md#createbackup) | **POST** /v1/projects/{id}/disks/{name}/backups | Create backup disk
*DisksApi* | [**createDisk**](docs/Api/DisksApi.md#createdisk) | **POST** /v1/projects/{name}/disks | Create a disk
*DisksApi* | [**createFtp**](docs/Api/DisksApi.md#createftp) | **POST** /v1/projects/{name}/disks/{dname}/ftp | Create ftp
*DisksApi* | [**deleteDisk**](docs/Api/DisksApi.md#deletedisk) | **DELETE** /v1/projects/{id}/disks/{name} | Delete a disk
*DisksApi* | [**deleteFtp**](docs/Api/DisksApi.md#deleteftp) | **DELETE** /v1/ftp/{fname} | Delete a ftp
*DisksApi* | [**downloadBackup**](docs/Api/DisksApi.md#downloadbackup) | **POST** /v1/projects/{id}/disks/{dname}/backups/manual/{bname}/download | Download backup disk
*DisksApi* | [**getBackups**](docs/Api/DisksApi.md#getbackups) | **GET** /v1/projects/{id}/disks/{name}/backups | Get backups disk
*DisksApi* | [**getDisks**](docs/Api/DisksApi.md#getdisks) | **GET** /v1/projects/{id}/disks | Get disks
*DisksApi* | [**getFtps**](docs/Api/DisksApi.md#getftps) | **GET** /v1/projects/{name}/disks/{dname}/ftp | Get ftps
*DisksApi* | [**resizeDisk**](docs/Api/DisksApi.md#resizedisk) | **POST** /v1/projects/{name}/disks/{dname}/resize | Resize disk
*DomainsApi* | [**checkDomain**](docs/Api/DomainsApi.md#checkdomain) | **GET** /v1/domains/{id}/check | Check a domain
*DomainsApi* | [**createAppDomain**](docs/Api/DomainsApi.md#createappdomain) | **POST** /v1/domains | Create a domain
*DomainsApi* | [**deleteDomain**](docs/Api/DomainsApi.md#deletedomain) | **DELETE** /v1/domains/{id} | Delete a domain
*DomainsApi* | [**disableSsl**](docs/Api/DomainsApi.md#disablessl) | **POST** /v1/domains/{id}/ssl/disable | Disable ssl
*DomainsApi* | [**enableSsl**](docs/Api/DomainsApi.md#enablessl) | **POST** /v1/domains/provision-ssl-certs | Enable ssl
*DomainsApi* | [**getAppDomains**](docs/Api/DomainsApi.md#getappdomains) | **GET** /v1/domains | Get all domains
*DomainsApi* | [**redirectDomain**](docs/Api/DomainsApi.md#redirectdomain) | **POST** /v1/domains/{id}/set-redirect | Redirect a domain
*DomainsApi* | [**setAppDomain**](docs/Api/DomainsApi.md#setappdomain) | **POST** /v1/domains/set-project | Set a domain for project
*ReportsApi* | [**getAppCpuReports**](docs/Api/ReportsApi.md#getappcpureports) | **GET** /v1/projects/{name}/metrics/cpu | Get cpu reports of app
*ReportsApi* | [**getAppMemoryReports**](docs/Api/ReportsApi.md#getappmemoryreports) | **GET** /v1/projects/{name}/metrics/memory | Get memory reports of app
*ReportsApi* | [**getAppNetworkReceiveReports**](docs/Api/ReportsApi.md#getappnetworkreceivereports) | **GET** /v1/projects/{name}/metrics/network-receive | Get network-receive reports of app
*ReportsApi* | [**getAppSummaryReports**](docs/Api/ReportsApi.md#getappsummaryreports) | **GET** /v1/projects/{name}/metrics/summary | Get summary reports of app
*ReportsApi* | [**getNetworkTransmitReports**](docs/Api/ReportsApi.md#getnetworktransmitreports) | **GET** /v1/projects/{name}/metrics/network-transmit | Get network-transmit reports of app
*SettingsApi* | [**defaultSubdomain**](docs/Api/SettingsApi.md#defaultsubdomain) | **POST** /v1/projects/{id}/default-subdomain/{status} | Default subdomain
*SettingsApi* | [**ipStatic**](docs/Api/SettingsApi.md#ipstatic) | **POST** /v1/projects/{id}/fixed-ip/{status} | IP static
*SettingsApi* | [**updateEnvs**](docs/Api/SettingsApi.md#updateenvs) | **POST** /v1/projects/update-envs | Update envs
*SettingsApi* | [**zeroDowntime**](docs/Api/SettingsApi.md#zerodowntime) | **POST** /v1/projects/{id}/zero-downtime/{status} | Zero downtime

## Models

- [Applets](docs/Model/Applets.md)
- [AppletsAppletsInner](docs/Model/AppletsAppletsInner.md)
- [AppletsAppletsInnerRelease](docs/Model/AppletsAppletsInnerRelease.md)
- [ChangePlanRequest](docs/Model/ChangePlanRequest.md)
- [CheckDomain](docs/Model/CheckDomain.md)
- [CheckDomainDomain](docs/Model/CheckDomainDomain.md)
- [CheckDomainDomainProject](docs/Model/CheckDomainDomainProject.md)
- [CreateApp](docs/Model/CreateApp.md)
- [CreateAppDomain201Response](docs/Model/CreateAppDomain201Response.md)
- [CreateAppDomain201ResponseDomain](docs/Model/CreateAppDomain201ResponseDomain.md)
- [CreateAppDomainRequest](docs/Model/CreateAppDomainRequest.md)
- [CreateDiskRequest](docs/Model/CreateDiskRequest.md)
- [CreateFtp200Response](docs/Model/CreateFtp200Response.md)
- [CreateFtpRequest](docs/Model/CreateFtpRequest.md)
- [DeployReleases](docs/Model/DeployReleases.md)
- [Domains](docs/Model/Domains.md)
- [DomainsDomainsInner](docs/Model/DomainsDomainsInner.md)
- [DomainsDomainsInnerProject](docs/Model/DomainsDomainsInnerProject.md)
- [DownloadBackup200Response](docs/Model/DownloadBackup200Response.md)
- [EnableSsl200Response](docs/Model/EnableSsl200Response.md)
- [EnableSslRequest](docs/Model/EnableSslRequest.md)
- [GetAppSummaryReports200Response](docs/Model/GetAppSummaryReports200Response.md)
- [GetAppSummaryReports200ResponseCpuUsageInner](docs/Model/GetAppSummaryReports200ResponseCpuUsageInner.md)
- [GetAppSummaryReports200ResponseCpuUsageInnerValueInner](docs/Model/GetAppSummaryReports200ResponseCpuUsageInnerValueInner.md)
- [GetAppSummaryReports200ResponseDisksUsageInner](docs/Model/GetAppSummaryReports200ResponseDisksUsageInner.md)
- [GetDiskBackup](docs/Model/GetDiskBackup.md)
- [GetDiskBackupBackupsInner](docs/Model/GetDiskBackupBackupsInner.md)
- [GetDisks](docs/Model/GetDisks.md)
- [GetDisksDisksInner](docs/Model/GetDisksDisksInner.md)
- [GetDisksMountsInner](docs/Model/GetDisksMountsInner.md)
- [GetFtps200Response](docs/Model/GetFtps200Response.md)
- [GetFtps200ResponseAccessesInner](docs/Model/GetFtps200ResponseAccessesInner.md)
- [IpStatic200Response](docs/Model/IpStatic200Response.md)
- [LogsInner](docs/Model/LogsInner.md)
- [ProjectAllDetails](docs/Model/ProjectAllDetails.md)
- [ProjectAllDetailsProject](docs/Model/ProjectAllDetailsProject.md)
- [ProjectAllDetailsProjectEnvsInner](docs/Model/ProjectAllDetailsProjectEnvsInner.md)
- [ProjectAllDetailsProjectNode](docs/Model/ProjectAllDetailsProjectNode.md)
- [Projects](docs/Model/Projects.md)
- [ProjectsProjectsInner](docs/Model/ProjectsProjectsInner.md)
- [RedirectDomainRequest](docs/Model/RedirectDomainRequest.md)
- [Releases](docs/Model/Releases.md)
- [ReleasesDeploy200Response](docs/Model/ReleasesDeploy200Response.md)
- [ReleasesReleasesInner](docs/Model/ReleasesReleasesInner.md)
- [ReleasesReleasesInnerGitInfo](docs/Model/ReleasesReleasesInnerGitInfo.md)
- [ReleasesReleasesInnerGitInfoAuthor](docs/Model/ReleasesReleasesInnerGitInfoAuthor.md)
- [Reports](docs/Model/Reports.md)
- [ReportsResultInner](docs/Model/ReportsResultInner.md)
- [ResizeDiskRequest](docs/Model/ResizeDiskRequest.md)
- [SetAppDomainRequest](docs/Model/SetAppDomainRequest.md)
- [SourcesDeploy200Response](docs/Model/SourcesDeploy200Response.md)
- [TurnAppRequest](docs/Model/TurnAppRequest.md)
- [UpdateEnvs](docs/Model/UpdateEnvs.md)
- [UpdateEnvs200Response](docs/Model/UpdateEnvs200Response.md)
- [UpdateEnvsVariablesInner](docs/Model/UpdateEnvsVariablesInner.md)

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

info@liara.ir

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
