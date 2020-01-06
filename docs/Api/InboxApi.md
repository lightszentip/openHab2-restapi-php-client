# Swagger\Client\InboxApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approve**](InboxApi.md#approve) | **POST** /inbox/{thingUID}/approve | Approves the discovery result by adding the thing to the registry.
[**delete**](InboxApi.md#delete) | **DELETE** /inbox/{thingUID} | Removes the discovery result from the inbox.
[**getAll**](InboxApi.md#getall) | **GET** /inbox | Get all discovered things.
[**ignore**](InboxApi.md#ignore) | **POST** /inbox/{thingUID}/ignore | Flags a discovery result as ignored for further processing.
[**unignore**](InboxApi.md#unignore) | **POST** /inbox/{thingUID}/unignore | Removes ignore flag from a discovery result.

# **approve**
> approve($thing_uid, $body, $accept_language)

Approves the discovery result by adding the thing to the registry.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thingUID
$body = "body_example"; // string | thing label
$accept_language = "accept_language_example"; // string | language

try {
    $apiInstance->approve($thing_uid, $body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->approve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thingUID |
 **body** | [**string**](../Model/string.md)| thing label | [optional]
 **accept_language** | **string**| language | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($thing_uid)

Removes the discovery result from the inbox.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thingUID

try {
    $apiInstance->delete($thing_uid);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thingUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Swagger\Client\Model\DiscoveryResultDTO getAll()

Get all discovered things.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DiscoveryResultDTO**](../Model/DiscoveryResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ignore**
> ignore($thing_uid)

Flags a discovery result as ignored for further processing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thingUID

try {
    $apiInstance->ignore($thing_uid);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->ignore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thingUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unignore**
> unignore($thing_uid)

Removes ignore flag from a discovery result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thingUID

try {
    $apiInstance->unignore($thing_uid);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->unignore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thingUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

