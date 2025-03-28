# # NoFrixionMoneyMoovModelsMerchantToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**merchant_id** | **string** |  | [optional]
**description** | **string** |  | [optional]
**permission_types** | **string[]** | The permissions that the merchant token supports. | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**token** | **string** | The JWT merchant token. It will only be available when the merchant token is  initially created. The token is not stored by NoFrixion. | [optional]
**is_enabled** | **bool** | If set to false the merchant token will not be accepted to authorise a request. | [optional]
**shared_secret_algorithm** | **string** | Optional shared secret algorithm to use for HMAC authentication. | [optional]
**shared_secret_base64** | **string** | The base 64 encoded shared secret that is used for request authentication with an HMAC.  Note this property will ONLY be set when the token is initially created. It is not possible  to retrieve the secret afterwards. If it is lost a new token should be created. | [optional]
**request_signature_version** | **int** | Represent the version of the overall merchant token. This field is to allow the secret and public key mechanisms to  vary over time. For example if the HTTP header fields to include in the algorithms change this version will faciliatate  keeping track of which signature versions a particular merchant token is using. | [optional]
**expires_at** | **\DateTime** | Optional. If set indicates the merchant token is not valid after the specified expiry date. | [optional]
**authorisations** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsApproveAuthorisation[]**](NoFrixionMoneyMoovModelsApproveAuthorisation.md) | A list of users who have successfully authorised the latest version of the beneficiary. | [optional]
**can_authorise** | **bool** | True if the merchant token can be authorised by the user who loaded it. | [optional]
**has_current_user_authorised** | **bool** | True if the beneficiary was loaded for a user and that user has already authorised the latest version of the beneficiary. | [optional]
**authorisers_required_count** | **int** | The number of authorisers required for this merchant token. Is determined by business settings  on the source account and/or merchant. | [optional]
**authorisers_completed_count** | **int** | The number of distinct authorisers that have authorised the merchant token. | [optional]
**authentication_methods** | **string[]** | A list of authentication types allowed to authorise the merchant token. | [optional]
**last_authorised** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
