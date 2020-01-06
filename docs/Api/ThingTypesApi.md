# Swagger\Client\ThingTypesApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAll**](ThingTypesApi.md#getall) | **GET** /thing-types | Gets all available thing types without config description, channels and properties.
[**getByUID**](ThingTypesApi.md#getbyuid) | **GET** /thing-types/{thingTypeUID} | Gets thing type by UID.

# **getAll**
> \Swagger\Client\Model\StrippedThingTypeDTO[] getAll($accept_language)

Gets all available thing types without config description, channels and properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | Accept-Language

try {
    $result = $apiInstance->getAll($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThingTypesApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Accept-Language | [optional]

### Return type

[**\Swagger\Client\Model\StrippedThingTypeDTO[]**](../Model/StrippedThingTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getByUID**
> \Swagger\Client\Model\ThingTypeDTO getByUID($thing_type_uid, $accept_language)

Gets thing type by UID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_type_uid = "thing_type_uid_example"; // string | thingTypeUID
$accept_language = "accept_language_example"; // string | Accept-Language

try {
    $result = $apiInstance->getByUID($thing_type_uid, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThingTypesApi->getByUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_type_uid** | **string**| thingTypeUID |
 **accept_language** | **string**| Accept-Language | [optional]

### Return type

[**\Swagger\Client\Model\ThingTypeDTO**](../Model/ThingTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

