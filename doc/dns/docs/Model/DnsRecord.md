# # DnsRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of dns record, \&quot;@\&quot; for zone name(root level), \&quot;*\&quot; for wild card and any valid value with RFC 1123 | [optional]
**type** | **string** | The type of dns record, valid values: [A, AAAA, TXT, CNAME, ALIAS, MX, SRV, SPF, PTR] | [optional]
**ttl** | **float** | The ttl of dns record, is not required, valid values: [120, 180, 300, 600, 900, 1800, 3600, 7200, 18000, 43200, 86400, 172800, 432000] | [optional]
**contents** | **object[]** | Array of content of dns record, change base on type of dns record | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
