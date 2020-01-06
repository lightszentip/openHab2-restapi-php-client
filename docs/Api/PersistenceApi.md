# Swagger\Client\PersistenceApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**httpDeletePersistenceServiceItem**](PersistenceApi.md#httpdeletepersistenceserviceitem) | **DELETE** /persistence/items/{itemname} | Delete item data from a specific persistence service.
[**httpGetPersistenceItemData**](PersistenceApi.md#httpgetpersistenceitemdata) | **GET** /persistence/items/{itemname} | Gets item persistence data from the persistence service.
[**httpGetPersistenceServiceItems**](PersistenceApi.md#httpgetpersistenceserviceitems) | **GET** /persistence/items | Gets a list of items available via a specific persistence service.
[**httpGetPersistenceServices**](PersistenceApi.md#httpgetpersistenceservices) | **GET** /persistence | Gets a list of persistence services.
[**httpPutPersistenceItemData**](PersistenceApi.md#httpputpersistenceitemdata) | **PUT** /persistence/items/{itemname} | Stores item persistence data into the persistence service.

# **httpDeletePersistenceServiceItem**
> string[] httpDeletePersistenceServiceItem($service_id, $itemname, $starttime, $endtime)

Delete item data from a specific persistence service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersistenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_id = "service_id_example"; // string | Id of the persistence service.
$itemname = "itemname_example"; // string | The item name.
$starttime = "starttime_example"; // string | Start time of the data to return. [yyyy-MM-dd'T'HH:mm:ss.SSSZ]
$endtime = "endtime_example"; // string | End time of the data to return. [yyyy-MM-dd'T'HH:mm:ss.SSSZ]

try {
    $result = $apiInstance->httpDeletePersistenceServiceItem($service_id, $itemname, $starttime, $endtime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersistenceApi->httpDeletePersistenceServiceItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| Id of the persistence service. |
 **itemname** | **string**| The item name. |
 **starttime** | **string**| Start time of the data to return. [yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ] |
 **endtime** | **string**| End time of the data to return. [yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ] |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **httpGetPersistenceItemData**
> \Swagger\Client\Model\ItemHistoryDTO httpGetPersistenceItemData($itemname, $service_id, $starttime, $endtime, $page, $pagelength, $boundary)

Gets item persistence data from the persistence service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersistenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemname = "itemname_example"; // string | The item name
$service_id = "service_id_example"; // string | Id of the persistence service. If not provided the default service will be used
$starttime = "starttime_example"; // string | Start time of the data to return. Will default to 1 day before endtime. [yyyy-MM-dd'T'HH:mm:ss.SSSZ]
$endtime = "endtime_example"; // string | End time of the data to return. Will default to current time. [yyyy-MM-dd'T'HH:mm:ss.SSSZ]
$page = 56; // int | Page number of data to return. This parameter will enable paging.
$pagelength = 56; // int | The length of each page.
$boundary = true; // bool | Gets one value before and after the requested period.

try {
    $result = $apiInstance->httpGetPersistenceItemData($itemname, $service_id, $starttime, $endtime, $page, $pagelength, $boundary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersistenceApi->httpGetPersistenceItemData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemname** | **string**| The item name |
 **service_id** | **string**| Id of the persistence service. If not provided the default service will be used | [optional]
 **starttime** | **string**| Start time of the data to return. Will default to 1 day before endtime. [yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ] | [optional]
 **endtime** | **string**| End time of the data to return. Will default to current time. [yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ] | [optional]
 **page** | **int**| Page number of data to return. This parameter will enable paging. | [optional]
 **pagelength** | **int**| The length of each page. | [optional]
 **boundary** | **bool**| Gets one value before and after the requested period. | [optional]

### Return type

[**\Swagger\Client\Model\ItemHistoryDTO**](../Model/ItemHistoryDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **httpGetPersistenceServiceItems**
> string[] httpGetPersistenceServiceItems($service_id)

Gets a list of items available via a specific persistence service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersistenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_id = "service_id_example"; // string | Id of the persistence service. If not provided the default service will be used

try {
    $result = $apiInstance->httpGetPersistenceServiceItems($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersistenceApi->httpGetPersistenceServiceItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| Id of the persistence service. If not provided the default service will be used | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **httpGetPersistenceServices**
> string[] httpGetPersistenceServices($accept_language)

Gets a list of persistence services.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersistenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | Accept-Language

try {
    $result = $apiInstance->httpGetPersistenceServices($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersistenceApi->httpGetPersistenceServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Accept-Language | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **httpPutPersistenceItemData**
> \Swagger\Client\Model\ItemHistoryDTO httpPutPersistenceItemData($itemname, $time, $state, $service_id)

Stores item persistence data into the persistence service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersistenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemname = "itemname_example"; // string | The item name.
$time = "time_example"; // string | Time of the data to be stored. Will default to current time. [yyyy-MM-dd'T'HH:mm:ss.SSSZ]
$state = "state_example"; // string | The state to store.
$service_id = "service_id_example"; // string | Id of the persistence service. If not provided the default service will be used

try {
    $result = $apiInstance->httpPutPersistenceItemData($itemname, $time, $state, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersistenceApi->httpPutPersistenceItemData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemname** | **string**| The item name. |
 **time** | **string**| Time of the data to be stored. Will default to current time. [yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ] |
 **state** | **string**| The state to store. |
 **service_id** | **string**| Id of the persistence service. If not provided the default service will be used | [optional]

### Return type

[**\Swagger\Client\Model\ItemHistoryDTO**](../Model/ItemHistoryDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

