# Swagger\Client\UuidApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInstanceUUID**](UuidApi.md#getinstanceuuid) | **GET** /uuid | A unified unique id.

# **getInstanceUUID**
> string getInstanceUUID()

A unified unique id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UuidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInstanceUUID();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UuidApi->getInstanceUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

