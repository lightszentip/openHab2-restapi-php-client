# Swagger\Client\ServicesApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteConfiguration**](ServicesApi.md#deleteconfiguration) | **DELETE** /services/{serviceId}/config | Deletes a service configuration for given service ID and returns the old configuration.
[**getAll**](ServicesApi.md#getall) | **GET** /services | Get all configurable services.
[**getById**](ServicesApi.md#getbyid) | **GET** /services/{serviceId} | Get configurable service for given service ID.
[**getConfiguration**](ServicesApi.md#getconfiguration) | **GET** /services/{serviceId}/config | Get service configuration for given service ID.
[**getMultiConfigServicesByFactoryPid**](ServicesApi.md#getmulticonfigservicesbyfactorypid) | **GET** /services/{serviceId}/contexts | Get existing multiple context service configurations for the given factory PID.
[**updateConfiguration**](ServicesApi.md#updateconfiguration) | **PUT** /services/{serviceId}/config | Updates a service configuration for given service ID and returns the old configuration.

# **deleteConfiguration**
> string deleteConfiguration($service_id)

Deletes a service configuration for given service ID and returns the old configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_id = "service_id_example"; // string | service ID

try {
    $result = $apiInstance->deleteConfiguration($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->deleteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| service ID |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Swagger\Client\Model\ConfigurableServiceDTO[] getAll()

Get all configurable services.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ConfigurableServiceDTO[]**](../Model/ConfigurableServiceDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getById**
> \Swagger\Client\Model\ConfigurableServiceDTO getById($service_id)

Get configurable service for given service ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_id = "service_id_example"; // string | service ID

try {
    $result = $apiInstance->getById($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| service ID |

### Return type

[**\Swagger\Client\Model\ConfigurableServiceDTO**](../Model/ConfigurableServiceDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfiguration**
> string getConfiguration($service_id)

Get service configuration for given service ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_id = "service_id_example"; // string | service ID

try {
    $result = $apiInstance->getConfiguration($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| service ID |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMultiConfigServicesByFactoryPid**
> \Swagger\Client\Model\ConfigurableServiceDTO[] getMultiConfigServicesByFactoryPid($service_id)

Get existing multiple context service configurations for the given factory PID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_id = "service_id_example"; // string | service ID

try {
    $result = $apiInstance->getMultiConfigServicesByFactoryPid($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getMultiConfigServicesByFactoryPid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| service ID |

### Return type

[**\Swagger\Client\Model\ConfigurableServiceDTO[]**](../Model/ConfigurableServiceDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConfiguration**
> string updateConfiguration($service_id, $body)

Updates a service configuration for given service ID and returns the old configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_id = "service_id_example"; // string | service ID
$body = new \Swagger\Client\Model\map(); // map[string,object] | 

try {
    $result = $apiInstance->updateConfiguration($service_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->updateConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| service ID |
 **body** | [**map[string,object]**](../Model/map.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

