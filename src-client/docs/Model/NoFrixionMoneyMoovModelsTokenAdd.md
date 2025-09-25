# # NoFrixionMoneyMoovModelsTokenAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | The merchant id to add to the token |
**description** | **string** | Token description |
**hmac_algorithm** | **string** | Optional shared secret algorithm to use for HMAC authentication. If set a shared secret will be   returned when the token is intially created but not on any subsequent retrievals. | [optional]
**permission_types** | **string[]** | The list of permissions tho grant to the merchant token. | [optional]
**ip_address_whitelist** | **string** | Optional. If set represents a comma separated list of IP addresses that this token is authorised to be used from.  Attempts to use the token from an IP address not in the list will be rejected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
