# # NoFrixionMoneyMoovModelsAuthorisationStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorisations** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsApproveAuthorisation[]**](NoFrixionMoneyMoovModelsApproveAuthorisation.md) | A list of users who have successfully authorised the latest version of the parent model. | [optional]
**can_authorise** | **bool** | True if the parent model can be authorised by the user who loaded it. | [optional]
**can_update** | **bool** | True if the parent model can be updated by the user who loaded it. | [optional]
**has_current_user_authorised** | **bool** | True if the parent model was loaded for a user and that user has already authorised the latest version. | [optional]
**authorisers_required_count** | **int** | The number of authorisers required for the parent model. Is determined by business settings  on the source account and/or merchant. | [optional]
**authorisers_completed_count** | **int** | The number of distinct authorisers that have authorised the parent model. | [optional]
**authentication_methods** | **string[]** | A list of authentication types allowed to authorise the parent model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
