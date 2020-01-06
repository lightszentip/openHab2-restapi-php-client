# Swagger\Client\ThingsApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](ThingsApi.md#create) | **POST** /things | Creates a new thing and adds it to the registry.
[**getAll**](ThingsApi.md#getall) | **GET** /things | Get all available things.
[**getByUID**](ThingsApi.md#getbyuid) | **GET** /things/{thingUID} | Gets thing by UID.
[**getConfigStatus**](ThingsApi.md#getconfigstatus) | **GET** /things/{thingUID}/config/status | Gets thing&#x27;s config status.
[**getFirmwareStatus**](ThingsApi.md#getfirmwarestatus) | **GET** /things/{thingUID}/firmware/status | Gets thing&#x27;s firmware status.
[**getFirmwares**](ThingsApi.md#getfirmwares) | **GET** /things/{thingUID}/firmwares | Get all available firmwares for provided thing UID
[**getStatus**](ThingsApi.md#getstatus) | **GET** /things/{thingUID}/status | Gets thing&#x27;s status.
[**remove**](ThingsApi.md#remove) | **DELETE** /things/{thingUID} | Removes a thing from the registry. Set &#x27;force&#x27; to __true__ if you want the thing te be removed immediately.
[**setEnabled**](ThingsApi.md#setenabled) | **PUT** /things/{thingUID}/enable | Sets the thing enabled status.
[**update**](ThingsApi.md#update) | **PUT** /things/{thingUID} | Updates a thing.
[**updateConfiguration**](ThingsApi.md#updateconfiguration) | **PUT** /things/{thingUID}/config | Updates thing&#x27;s configuration.
[**updateFirmware**](ThingsApi.md#updatefirmware) | **PUT** /things/{thingUID}/firmware/{firmwareVersion} | Update thing firmware.

# **create**
> string create($body, $accept_language)

Creates a new thing and adds it to the registry.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ThingDTO(); // \Swagger\Client\Model\ThingDTO | thing data
$accept_language = "accept_language_example"; // string | language

try {
    $result = $apiInstance->create($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ThingDTO**](../Model/ThingDTO.md)| thing data |
 **accept_language** | **string**| language | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \Swagger\Client\Model\EnrichedThingDTO[] getAll($accept_language)

Get all available things.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | language

try {
    $result = $apiInstance->getAll($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| language | [optional]

### Return type

[**\Swagger\Client\Model\EnrichedThingDTO[]**](../Model/EnrichedThingDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getByUID**
> \Swagger\Client\Model\ThingDTO getByUID($thing_uid, $accept_language)

Gets thing by UID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thingUID
$accept_language = "accept_language_example"; // string | language

try {
    $result = $apiInstance->getByUID($thing_uid, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->getByUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thingUID |
 **accept_language** | **string**| language | [optional]

### Return type

[**\Swagger\Client\Model\ThingDTO**](../Model/ThingDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfigStatus**
> string getConfigStatus($thing_uid, $accept_language)

Gets thing's config status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thing
$accept_language = "accept_language_example"; // string | 

try {
    $result = $apiInstance->getConfigStatus($thing_uid, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->getConfigStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thing |
 **accept_language** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFirmwareStatus**
> getFirmwareStatus($thing_uid, $accept_language)

Gets thing's firmware status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thing
$accept_language = "accept_language_example"; // string | 

try {
    $apiInstance->getFirmwareStatus($thing_uid, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->getFirmwareStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thing |
 **accept_language** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFirmwares**
> getFirmwares($thing_uid, $accept_language)

Get all available firmwares for provided thing UID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thingUID
$accept_language = "accept_language_example"; // string | Accept-Language

try {
    $apiInstance->getFirmwares($thing_uid, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->getFirmwares: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thingUID |
 **accept_language** | **string**| Accept-Language | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> string getStatus($thing_uid, $accept_language)

Gets thing's status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thing
$accept_language = "accept_language_example"; // string | 

try {
    $result = $apiInstance->getStatus($thing_uid, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thing |
 **accept_language** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **remove**
> remove($thing_uid, $accept_language, $force)

Removes a thing from the registry. Set 'force' to __true__ if you want the thing te be removed immediately.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thingUID
$accept_language = "accept_language_example"; // string | language
$force = true; // bool | force

try {
    $apiInstance->remove($thing_uid, $accept_language, $force);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->remove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thingUID |
 **accept_language** | **string**| language | [optional]
 **force** | **bool**| force | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setEnabled**
> string setEnabled($thing_uid, $body, $accept_language)

Sets the thing enabled status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thing
$body = "body_example"; // string | enabled
$accept_language = "accept_language_example"; // string | 

try {
    $result = $apiInstance->setEnabled($thing_uid, $body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->setEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thing |
 **body** | [**string**](../Model/string.md)| enabled | [optional]
 **accept_language** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \Swagger\Client\Model\ThingDTO update($body, $thing_uid, $accept_language)

Updates a thing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ThingDTO(); // \Swagger\Client\Model\ThingDTO | thing
$thing_uid = "thing_uid_example"; // string | thingUID
$accept_language = "accept_language_example"; // string | language

try {
    $result = $apiInstance->update($body, $thing_uid, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ThingDTO**](../Model/ThingDTO.md)| thing |
 **thing_uid** | **string**| thingUID |
 **accept_language** | **string**| language | [optional]

### Return type

[**\Swagger\Client\Model\ThingDTO**](../Model/ThingDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConfiguration**
> \Swagger\Client\Model\Thing updateConfiguration($thing_uid, $body, $accept_language)

Updates thing's configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thing
$body = new \Swagger\Client\Model\map(); // map[string,object] | configuration parameters
$accept_language = "accept_language_example"; // string | 

try {
    $result = $apiInstance->updateConfiguration($thing_uid, $body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->updateConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thing |
 **body** | [**map[string,object]**](../Model/map.md)| configuration parameters | [optional]
 **accept_language** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Thing**](../Model/Thing.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFirmware**
> updateFirmware($thing_uid, $firmware_version, $accept_language)

Update thing firmware.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thing_uid = "thing_uid_example"; // string | thing
$firmware_version = "firmware_version_example"; // string | version
$accept_language = "accept_language_example"; // string | language

try {
    $apiInstance->updateFirmware($thing_uid, $firmware_version, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ThingsApi->updateFirmware: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thing_uid** | **string**| thing |
 **firmware_version** | **string**| version |
 **accept_language** | **string**| language | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

