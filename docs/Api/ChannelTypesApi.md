# Swagger\Client\ChannelTypesApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAll**](ChannelTypesApi.md#getall) | **GET** /channel-types | Gets all available channel types.
[**getByUID**](ChannelTypesApi.md#getbyuid) | **GET** /channel-types/{channelTypeUID} | Gets channel type by UID.
[**getLinkableItemTypes**](ChannelTypesApi.md#getlinkableitemtypes) | **GET** /channel-types/{channelTypeUID}/linkableItemTypes | Gets the item types the given trigger channel type UID can be linked to.

# **getAll**
> \Swagger\Client\Model\ChannelTypeDTO[] getAll($accept_language)

Gets all available channel types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | Accept-Language

try {
    $result = $apiInstance->getAll($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelTypesApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Accept-Language | [optional]

### Return type

[**\Swagger\Client\Model\ChannelTypeDTO[]**](../Model/ChannelTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getByUID**
> \Swagger\Client\Model\ChannelTypeDTO getByUID($channel_type_uid, $accept_language)

Gets channel type by UID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type_uid = "channel_type_uid_example"; // string | channelTypeUID
$accept_language = "accept_language_example"; // string | Accept-Language

try {
    $result = $apiInstance->getByUID($channel_type_uid, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelTypesApi->getByUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type_uid** | **string**| channelTypeUID |
 **accept_language** | **string**| Accept-Language | [optional]

### Return type

[**\Swagger\Client\Model\ChannelTypeDTO**](../Model/ChannelTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkableItemTypes**
> string[] getLinkableItemTypes($channel_type_uid)

Gets the item types the given trigger channel type UID can be linked to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type_uid = "channel_type_uid_example"; // string | channelTypeUID

try {
    $result = $apiInstance->getLinkableItemTypes($channel_type_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelTypesApi->getLinkableItemTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type_uid** | **string**| channelTypeUID |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

