# # NoFrixionMoneyMoovModelsBeneficiaryEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**beneficiary_id** | **string** |  | [optional]
**event_status** | **string** |  | [optional]
**event_type** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**authoriser_hash** | **string** |  | [optional]
**error_reason** | **string** |  | [optional]
**error_message** | **string** |  | [optional]
**beneficiary_name** | **string** |  | [optional]
**currency** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_name** | **string** |  | [optional]
**iban** | **string** |  | [optional]
**account_number** | **string** |  | [optional]
**sort_code** | **string** |  | [optional]
**bic** | **string** |  | [optional]
**bitcoin_address** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**source_accounts_hash** | **string** | A hash of the source account ID&#39;s that are authorised to use the beneficiary.  An empty value means the beneficairy can be used by all the merchant&#39;s source  accounts. | [optional]
**is_enabled** | **bool** |  | [optional]
**is_archived** | **bool** |  | [optional]
**supplier_payee_verification_result** | **string** |  | [optional]
**payee_verified_account_name** | **string** | If this event is a payee verification complete event and the result is a close match,  this contains the actual verified name returned by the payee verification supplier. | [optional]
**user** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](NoFrixionMoneyMoovModelsUser.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
