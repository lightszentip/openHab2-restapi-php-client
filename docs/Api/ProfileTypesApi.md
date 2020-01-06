# Swagger\Client\ProfileTypesApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAll**](ProfileTypesApi.md#getall) | **GET** /profile-types | Gets all available profile types.

# **getAll**
> \Swagger\Client\Model\ProfileTypeDTO[] getAll($accept_language, $channel_type_uid, $item_type)

Gets all available profile types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | Accept-Language
$channel_type_uid = "channel_type_uid_example"; // string | channel type filter
$item_type = "item_type_example"; // string | item type filter

try {
    $result = $apiInstance->getAll($accept_language, $channel_type_uid, $item_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileTypesApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Accept-Language | [optional]
 **channel_type_uid** | **string**| channel type filter | [optional]
 **item_type** | **string**| item type filter | [optional]

### Return type

[**\Swagger\Client\Model\ProfileTypeDTO[]**](../Model/ProfileTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

