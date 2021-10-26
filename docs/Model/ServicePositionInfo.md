# ServicePositionInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_price** | [**AllOfServicePositionInfoUnitPrice**](AllOfServicePositionInfoUnitPrice.md) | Price of service per item. | 
**vat_rate** | **float** | VAT rate for the specific service | 
**quantity** | **int** | Number for items which are applicable for service | 
**total** | [**AllOfServicePositionInfoTotal**](AllOfServicePositionInfoTotal.md) | Total price of this service; i.e unitPrice is multiplied by quantity | 
**service_name** | **string** | Service name | 
**service_type** | **string** |  | [optional] 
**product_title** | **string** | Title of the linked product | 
**article_number** | **string** | Article number of the linked product | 
**promotion** | **string** | Promotion code of the linked product | 
**service_position_items** | [**\EzzeSiftuz\ReceiptsV2\Model\ServicePositionItemInfo[]**](ServicePositionItemInfo.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

