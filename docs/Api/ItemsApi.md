# Swagger\Client\ItemsApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMember**](ItemsApi.md#addmember) | **PUT** /items/{itemName}/members/{memberItemName} | Adds a new member to a group item.
[**addMetadata**](ItemsApi.md#addmetadata) | **PUT** /items/{itemname}/metadata/{namespace} | Adds metadata to an item.
[**addTag**](ItemsApi.md#addtag) | **PUT** /items/{itemname}/tags/{tag} | Adds a tag to an item.
[**createOrUpdateItem**](ItemsApi.md#createorupdateitem) | **PUT** /items/{itemname} | Adds a new item to the registry or updates the existing item.
[**createOrUpdateItems**](ItemsApi.md#createorupdateitems) | **PUT** /items | Adds a list of items to the registry or updates the existing items.
[**getItemData**](ItemsApi.md#getitemdata) | **GET** /items/{itemname} | Gets a single item.
[**getItems**](ItemsApi.md#getitems) | **GET** /items | Get all available items.
[**getPlainItemState**](ItemsApi.md#getplainitemstate) | **GET** /items/{itemname}/state | Gets the state of an item.
[**postItemCommand**](ItemsApi.md#postitemcommand) | **POST** /items/{itemname} | Sends a command to an item.
[**putItemState**](ItemsApi.md#putitemstate) | **PUT** /items/{itemname}/state | Updates the state of an item.
[**removeItem**](ItemsApi.md#removeitem) | **DELETE** /items/{itemname} | Removes an item from the registry.
[**removeMember**](ItemsApi.md#removemember) | **DELETE** /items/{itemName}/members/{memberItemName} | Removes an existing member from a group item.
[**removeMetadata**](ItemsApi.md#removemetadata) | **DELETE** /items/{itemname}/metadata/{namespace} | Removes metadata from an item.
[**removeTag**](ItemsApi.md#removetag) | **DELETE** /items/{itemname}/tags/{tag} | Removes a tag from an item.

# **addMember**
> addMember($item_name, $member_item_name)

Adds a new member to a group item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_name = "item_name_example"; // string | item name
$member_item_name = "member_item_name_example"; // string | member item name

try {
    $apiInstance->addMember($item_name, $member_item_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->addMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_name** | **string**| item name |
 **member_item_name** | **string**| member item name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMetadata**
> addMetadata($body, $itemname, $namespace)

Adds metadata to an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetadataDTO(); // \Swagger\Client\Model\MetadataDTO | metadata
$itemname = "itemname_example"; // string | item name
$namespace = "namespace_example"; // string | namespace

try {
    $apiInstance->addMetadata($body, $itemname, $namespace);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->addMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetadataDTO**](../Model/MetadataDTO.md)| metadata |
 **itemname** | **string**| item name |
 **namespace** | **string**| namespace |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTag**
> addTag($itemname, $tag)

Adds a tag to an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemname = "itemname_example"; // string | item name
$tag = "tag_example"; // string | tag

try {
    $apiInstance->addTag($itemname, $tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemname** | **string**| item name |
 **tag** | **string**| tag |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateItem**
> string createOrUpdateItem($body, $itemname, $accept_language)

Adds a new item to the registry or updates the existing item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GroupItemDTO(); // \Swagger\Client\Model\GroupItemDTO | item data
$itemname = "itemname_example"; // string | item name
$accept_language = "accept_language_example"; // string | language

try {
    $result = $apiInstance->createOrUpdateItem($body, $itemname, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->createOrUpdateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GroupItemDTO**](../Model/GroupItemDTO.md)| item data |
 **itemname** | **string**| item name |
 **accept_language** | **string**| language | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateItems**
> string createOrUpdateItems($body)

Adds a list of items to the registry or updates the existing items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\GroupItemDTO()); // \Swagger\Client\Model\GroupItemDTO[] | array of item data

try {
    $result = $apiInstance->createOrUpdateItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->createOrUpdateItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GroupItemDTO[]**](../Model/GroupItemDTO.md)| array of item data |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemData**
> \Swagger\Client\Model\EnrichedItemDTO getItemData($itemname, $accept_language, $metadata)

Gets a single item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemname = "itemname_example"; // string | item name
$accept_language = "accept_language_example"; // string | language
$metadata = "metadata_example"; // string | metadata selector

try {
    $result = $apiInstance->getItemData($itemname, $accept_language, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemname** | **string**| item name |
 **accept_language** | **string**| language | [optional]
 **metadata** | **string**| metadata selector | [optional]

### Return type

[**\Swagger\Client\Model\EnrichedItemDTO**](../Model/EnrichedItemDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItems**
> \Swagger\Client\Model\EnrichedItemDTO[] getItems($accept_language, $type, $tags, $metadata, $recursive, $fields)

Get all available items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | language
$type = "type_example"; // string | item type filter
$tags = "tags_example"; // string | item tag filter
$metadata = "metadata_example"; // string | metadata selector
$recursive = true; // bool | get member items recursively
$fields = "fields_example"; // string | limit output to the given fields (comma separated)

try {
    $result = $apiInstance->getItems($accept_language, $type, $tags, $metadata, $recursive, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| language | [optional]
 **type** | **string**| item type filter | [optional]
 **tags** | **string**| item tag filter | [optional]
 **metadata** | **string**| metadata selector | [optional]
 **recursive** | **bool**| get member items recursively | [optional]
 **fields** | **string**| limit output to the given fields (comma separated) | [optional]

### Return type

[**\Swagger\Client\Model\EnrichedItemDTO[]**](../Model/EnrichedItemDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlainItemState**
> string getPlainItemState($itemname)

Gets the state of an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemname = "itemname_example"; // string | item name

try {
    $result = $apiInstance->getPlainItemState($itemname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getPlainItemState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemname** | **string**| item name |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postItemCommand**
> postItemCommand($body, $itemname)

Sends a command to an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | valid item command (e.g. ON, OFF, UP, DOWN, REFRESH)
$itemname = "itemname_example"; // string | item name

try {
    $apiInstance->postItemCommand($body, $itemname);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->postItemCommand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| valid item command (e.g. ON, OFF, UP, DOWN, REFRESH) |
 **itemname** | **string**| item name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putItemState**
> putItemState($body, $itemname, $accept_language)

Updates the state of an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | valid item state (e.g. ON, OFF)
$itemname = "itemname_example"; // string | item name
$accept_language = "accept_language_example"; // string | language

try {
    $apiInstance->putItemState($body, $itemname, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->putItemState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| valid item state (e.g. ON, OFF) |
 **itemname** | **string**| item name |
 **accept_language** | **string**| language | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeItem**
> removeItem($itemname)

Removes an item from the registry.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemname = "itemname_example"; // string | item name

try {
    $apiInstance->removeItem($itemname);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->removeItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemname** | **string**| item name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeMember**
> removeMember($item_name, $member_item_name)

Removes an existing member from a group item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_name = "item_name_example"; // string | item name
$member_item_name = "member_item_name_example"; // string | member item name

try {
    $apiInstance->removeMember($item_name, $member_item_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->removeMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_name** | **string**| item name |
 **member_item_name** | **string**| member item name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeMetadata**
> removeMetadata($itemname, $namespace)

Removes metadata from an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemname = "itemname_example"; // string | item name
$namespace = "namespace_example"; // string | namespace

try {
    $apiInstance->removeMetadata($itemname, $namespace);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->removeMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemname** | **string**| item name |
 **namespace** | **string**| namespace |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTag**
> removeTag($itemname, $tag)

Removes a tag from an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemname = "itemname_example"; // string | item name
$tag = "tag_example"; // string | tag

try {
    $apiInstance->removeTag($itemname, $tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->removeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemname** | **string**| item name |
 **tag** | **string**| tag |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

