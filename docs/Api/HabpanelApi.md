# Swagger\Client\HabpanelApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGalleryWidgetList**](HabpanelApi.md#getgallerywidgetlist) | **GET** /habpanel/gallery/{galleryName}/widgets | Gets the list of widget gallery items.
[**getGalleryWidgetsItem**](HabpanelApi.md#getgallerywidgetsitem) | **GET** /habpanel/gallery/{galleryName}/widgets/{id} | Gets the details about a widget gallery item.

# **getGalleryWidgetList**
> string getGalleryWidgetList($gallery_name)

Gets the list of widget gallery items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabpanelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gallery_name = "gallery_name_example"; // string | gallery name e.g. 'community'

try {
    $result = $apiInstance->getGalleryWidgetList($gallery_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HabpanelApi->getGalleryWidgetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gallery_name** | **string**| gallery name e.g. &#x27;community&#x27; |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGalleryWidgetsItem**
> string getGalleryWidgetsItem($gallery_name, $id)

Gets the details about a widget gallery item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabpanelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gallery_name = "gallery_name_example"; // string | gallery name e.g. 'community'
$id = "id_example"; // string | id within the gallery

try {
    $result = $apiInstance->getGalleryWidgetsItem($gallery_name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HabpanelApi->getGalleryWidgetsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gallery_name** | **string**| gallery name e.g. &#x27;community&#x27; |
 **id** | **string**| id within the gallery |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

