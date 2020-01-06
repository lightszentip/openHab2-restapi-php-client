# Swagger\Client\SitemapsApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEventSubscription**](SitemapsApi.md#createeventsubscription) | **POST** /sitemaps/events/subscribe | Creates a sitemap event subscription.
[**getPageData**](SitemapsApi.md#getpagedata) | **GET** /sitemaps/{sitemapname}/{pageid} | Polls the data for a sitemap.
[**getSitemapData**](SitemapsApi.md#getsitemapdata) | **GET** /sitemaps/{sitemapname} | Get sitemap by name.
[**getSitemapEvents**](SitemapsApi.md#getsitemapevents) | **GET** /sitemaps/events/{subscriptionid} | Get sitemap events.
[**getSitemaps**](SitemapsApi.md#getsitemaps) | **GET** /sitemaps | Get all available sitemaps.

# **createEventSubscription**
> object createEventSubscription()

Creates a sitemap event subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SitemapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->createEventSubscription();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitemapsApi->createEventSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageData**
> getPageData($sitemapname, $pageid, $accept_language, $subscriptionid)

Polls the data for a sitemap.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SitemapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sitemapname = "sitemapname_example"; // string | sitemap name
$pageid = "pageid_example"; // string | page id
$accept_language = "accept_language_example"; // string | language
$subscriptionid = "subscriptionid_example"; // string | subscriptionid

try {
    $apiInstance->getPageData($sitemapname, $pageid, $accept_language, $subscriptionid);
} catch (Exception $e) {
    echo 'Exception when calling SitemapsApi->getPageData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sitemapname** | **string**| sitemap name |
 **pageid** | **string**| page id |
 **accept_language** | **string**| language | [optional]
 **subscriptionid** | **string**| subscriptionid | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSitemapData**
> getSitemapData($sitemapname, $accept_language, $type, $jsoncallback)

Get sitemap by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SitemapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sitemapname = "sitemapname_example"; // string | sitemap name
$accept_language = "accept_language_example"; // string | language
$type = "type_example"; // string | 
$jsoncallback = "jsoncallback_example"; // string | 

try {
    $apiInstance->getSitemapData($sitemapname, $accept_language, $type, $jsoncallback);
} catch (Exception $e) {
    echo 'Exception when calling SitemapsApi->getSitemapData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sitemapname** | **string**| sitemap name |
 **accept_language** | **string**| language | [optional]
 **type** | **string**|  | [optional]
 **jsoncallback** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSitemapEvents**
> getSitemapEvents($subscriptionid, $sitemap, $pageid)

Get sitemap events.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SitemapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscriptionid = "subscriptionid_example"; // string | subscription id
$sitemap = "sitemap_example"; // string | sitemap name
$pageid = "pageid_example"; // string | page id

try {
    $apiInstance->getSitemapEvents($subscriptionid, $sitemap, $pageid);
} catch (Exception $e) {
    echo 'Exception when calling SitemapsApi->getSitemapEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionid** | **string**| subscription id |
 **sitemap** | **string**| sitemap name | [optional]
 **pageid** | **string**| page id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSitemaps**
> getSitemaps()

Get all available sitemaps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SitemapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getSitemaps();
} catch (Exception $e) {
    echo 'Exception when calling SitemapsApi->getSitemaps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

