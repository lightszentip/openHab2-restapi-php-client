# Swagger\Client\VoiceApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInterpreter**](VoiceApi.md#getinterpreter) | **GET** /voice/interpreters/{id} | Gets a single interpreters.
[**getInterpreters**](VoiceApi.md#getinterpreters) | **GET** /voice/interpreters | Get the list of all interpreters.
[**interpret**](VoiceApi.md#interpret) | **POST** /voice/interpreters | Sends a text to the default human language interpreter.
[**interpret_0**](VoiceApi.md#interpret_0) | **POST** /voice/interpreters/{id} | Sends a text to a given human language interpreter.

# **getInterpreter**
> getInterpreter($id, $accept_language)

Gets a single interpreters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | interpreter id
$accept_language = "accept_language_example"; // string | language

try {
    $apiInstance->getInterpreter($id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->getInterpreter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| interpreter id |
 **accept_language** | **string**| language | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterpreters**
> getInterpreters($accept_language)

Get the list of all interpreters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | language

try {
    $apiInstance->getInterpreters($accept_language);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->getInterpreters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| language | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **interpret**
> interpret($body, $accept_language)

Sends a text to the default human language interpreter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | text to interpret
$accept_language = "accept_language_example"; // string | language

try {
    $apiInstance->interpret($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->interpret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| text to interpret |
 **accept_language** | **string**| language | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **interpret_0**
> interpret_0($body, $id, $accept_language)

Sends a text to a given human language interpreter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | text to interpret
$id = "id_example"; // string | interpreter id
$accept_language = "accept_language_example"; // string | language

try {
    $apiInstance->interpret_0($body, $id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->interpret_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| text to interpret |
 **id** | **string**| interpreter id |
 **accept_language** | **string**| language | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

