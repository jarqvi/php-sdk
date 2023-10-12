# # Zone

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** | The name of the zone, “liara.ir”, max length: 253, pattern: ^([a-zA-Z0-9][\\-a-zA-Z0-9]*\\.)+[\\-a-zA-Z0-9]{2,20}$ | [optional]
**status** | **string** | The status of the zone, valid values: [CREATING, PENDING, ACTIVE, DELETING] | [optional]
**current_name_servers** | **string[]** |  | [optional]
**name_servers** | **string[]** |  | [optional]
**last_check_at** | **string** | Last time when zones nameservers was checked | [optional]
**created_at** | **string** | Time when zone was created | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
