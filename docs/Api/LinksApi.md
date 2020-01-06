# Swagger\Client\LinksApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAll**](LinksApi.md#getall) | **GET** /links | Gets all available links.
[**getLink**](LinksApi.md#getlink) | **GET** /links/{itemName}/{channelUID} | Retrieves links.
[**isAutomatic**](LinksApi.md#isautomatic) | **GET** /links/auto | Tells whether automatic link mode is active or not
[**link**](LinksApi.md#link) | **PUT** /links/{itemName}/{channelUID} | Links item to a channel.
[**unlink**](LinksApi.md#unlink) | **DELETE** /links/{itemName}/{channelUID} | Unlinks item from a channel.

# **getAll**
> \Swagger\Client\Model\ItemChannelLinkDTO getAll()

Gets all available links.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ItemChannelLinkDTO**](../Model/ItemChannelLinkDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLink**
> getLink($item_name, $channel_uid)

Retrieves links.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_name = "item_name_example"; // string | itemName
$channel_uid = "channel_uid_example"; // string | channelUID

try {
    $apiInstance->getLink($item_name, $channel_uid);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->getLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_name** | **string**| itemName |
 **channel_uid** | **string**| channelUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **isAutomatic**
> bool isAutomatic()

Tells whether automatic link mode is active or not

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->isAutomatic();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->isAutomatic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **link**
> link($item_name, $channel_uid, $body)

Links item to a channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_name = "item_name_example"; // string | itemName
$channel_uid = "channel_uid_example"; // string | channelUID
$body = new \Swagger\Client\Model\ItemChannelLinkDTO(); // \Swagger\Client\Model\ItemChannelLinkDTO | link data

try {
    $apiInstance->link($item_name, $channel_uid, $body);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->link: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_name** | **string**| itemName |
 **channel_uid** | **string**| channelUID |
 **body** | [**\Swagger\Client\Model\ItemChannelLinkDTO**](../Model/ItemChannelLinkDTO.md)| link data | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlink**
> unlink($item_name, $channel_uid)

Unlinks item from a channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_name = "item_name_example"; // string | itemName
$channel_uid = "channel_uid_example"; // string | channelUID

try {
    $apiInstance->unlink($item_name, $channel_uid);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->unlink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_name** | **string**| itemName |
 **channel_uid** | **string**| channelUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

