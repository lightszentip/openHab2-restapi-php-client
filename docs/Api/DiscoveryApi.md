# Swagger\Client\DiscoveryApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDiscoveryServices**](DiscoveryApi.md#getdiscoveryservices) | **GET** /discovery | Gets all bindings that support discovery.
[**scan**](DiscoveryApi.md#scan) | **POST** /discovery/bindings/{bindingId}/scan | Starts asynchronous discovery process for a binding and returns the timeout in seconds of the discovery operation.

# **getDiscoveryServices**
> string[] getDiscoveryServices()

Gets all bindings that support discovery.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDiscoveryServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoveryServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scan**
> int scan($binding_id)

Starts asynchronous discovery process for a binding and returns the timeout in seconds of the discovery operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$binding_id = "binding_id_example"; // string | bindingId

try {
    $result = $apiInstance->scan($binding_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->scan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binding_id** | **string**| bindingId |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

