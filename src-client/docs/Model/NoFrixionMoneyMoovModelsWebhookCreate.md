# # NoFrixionMoneyMoovModelsWebhookCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**merchant_id** | **string** |  |
**resource_types** | **string[]** | The resource types that the webhook should be generated for. | [optional]
**destination_url** | **string** | The destination URL for the webhook.  Required for webhook notifications. | [optional]
**retry** | **bool** |  | [optional]
**secret** | **string** | The secret key required to authenticate webhook notifications.  Required for webhook notifications. | [optional]
**is_active** | **bool** |  | [optional]
**email_address** | **string** | The recipient email address(es) for notifications. Multiple addresses can be separated by a comma, semicolon, or space.  Reruired for email notifications. | [optional]
**failed_notification_email_address** | **string** | The email address to which notifications about failed webhook deliveries will be sent. | [optional]
**notification_method** | **string** | Determines the delivery method for the notification. The default is Webhook. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
