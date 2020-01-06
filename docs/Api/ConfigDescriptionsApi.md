# Swagger\Client\ConfigDescriptionsApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAll**](ConfigDescriptionsApi.md#getall) | **GET** /config-descriptions | Gets all available config descriptions.
[**getByURI**](ConfigDescriptionsApi.md#getbyuri) | **GET** /config-descriptions/{uri} | Gets a config description by URI.

# **getAll**
> \Swagger\Client\Model\ConfigDescriptionDTO[] getAll($accept_language, $scheme)

Gets all available config descriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | Accept-Language
$scheme = "scheme_example"; // string | scheme filter

try {
    $result = $apiInstance->getAll($accept_language, $scheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigDescriptionsApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Accept-Language | [optional]
 **scheme** | **string**| scheme filter | [optional]

### Return type

[**\Swagger\Client\Model\ConfigDescriptionDTO[]**](../Model/ConfigDescriptionDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getByURI**
> \Swagger\Client\Model\ConfigDescriptionDTO getByURI($uri, $accept_language)

Gets a config description by URI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uri = "uri_example"; // string | uri
$accept_language = "accept_language_example"; // string | Accept-Language

try {
    $result = $apiInstance->getByURI($uri, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigDescriptionsApi->getByURI: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uri** | **string**| uri |
 **accept_language** | **string**| Accept-Language | [optional]

### Return type

[**\Swagger\Client\Model\ConfigDescriptionDTO**](../Model/ConfigDescriptionDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

