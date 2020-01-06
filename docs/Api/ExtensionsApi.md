# Swagger\Client\ExtensionsApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getById**](ExtensionsApi.md#getbyid) | **GET** /extensions/{extensionId} | Get extension with given ID.
[**getExtensions**](ExtensionsApi.md#getextensions) | **GET** /extensions | Get all extensions.
[**getTypes**](ExtensionsApi.md#gettypes) | **GET** /extensions/types | Get all extension types.
[**installExtension**](ExtensionsApi.md#installextension) | **POST** /extensions/{extensionId}/install | Installs the extension with the given ID.
[**installExtensionByURL**](ExtensionsApi.md#installextensionbyurl) | **POST** /extensions/url/{url}/install | Installs the extension from the given URL.
[**uninstallExtension**](ExtensionsApi.md#uninstallextension) | **POST** /extensions/{extensionId}/uninstall | 

# **getById**
> string getById($extension_id, $accept_language)

Get extension with given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$extension_id = "extension_id_example"; // string | extension ID
$accept_language = "accept_language_example"; // string | language

try {
    $result = $apiInstance->getById($extension_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtensionsApi->getById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extension_id** | **string**| extension ID |
 **accept_language** | **string**| language | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExtensions**
> string getExtensions($accept_language)

Get all extensions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | language

try {
    $result = $apiInstance->getExtensions($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtensionsApi->getExtensions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| language | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTypes**
> string getTypes($accept_language)

Get all extension types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | language

try {
    $result = $apiInstance->getTypes($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtensionsApi->getTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| language | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installExtension**
> installExtension($extension_id)

Installs the extension with the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$extension_id = "extension_id_example"; // string | extension ID

try {
    $apiInstance->installExtension($extension_id);
} catch (Exception $e) {
    echo 'Exception when calling ExtensionsApi->installExtension: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extension_id** | **string**| extension ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installExtensionByURL**
> installExtensionByURL($url)

Installs the extension from the given URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url = "url_example"; // string | extension install URL

try {
    $apiInstance->installExtensionByURL($url);
} catch (Exception $e) {
    echo 'Exception when calling ExtensionsApi->installExtensionByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| extension install URL |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uninstallExtension**
> uninstallExtension($extension_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$extension_id = "extension_id_example"; // string | extension ID

try {
    $apiInstance->uninstallExtension($extension_id);
} catch (Exception $e) {
    echo 'Exception when calling ExtensionsApi->uninstallExtension: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extension_id** | **string**| extension ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

