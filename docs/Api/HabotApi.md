# Swagger\Client\HabotApi

All URIs are relative to */rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chat**](HabotApi.md#chat) | **POST** /habot/chat | Send a query to HABot to interpret.
[**createCard**](HabotApi.md#createcard) | **POST** /habot/cards | Creates a new card in the card deck.
[**createCard_0**](HabotApi.md#createcard_0) | **GET** /habot/cards/recent | Creates a new card in the card deck.
[**createCard_1**](HabotApi.md#createcard_1) | **POST** /habot/compat/cards | Creates a new card in the card deck (compatibility endpoint).
[**deleteCard**](HabotApi.md#deletecard) | **DELETE** /habot/cards/{cardUID} | Deletes a card from the card deck.
[**deleteCardPost**](HabotApi.md#deletecardpost) | **POST** /habot/compat/cards/{cardUID}/delete | Deletes a card from the card deck (compatibility endpoint).
[**getAllCards**](HabotApi.md#getallcards) | **GET** /habot/cards | Gets all cards of the card deck.
[**getAttributes**](HabotApi.md#getattributes) | **GET** /habot/attributes | Gets all item named attributes.
[**getCardByUid**](HabotApi.md#getcardbyuid) | **GET** /habot/cards/{cardUID} | Gets a card from the card deck by its UID.
[**greet**](HabotApi.md#greet) | **GET** /habot/greet | Retrieves a first greeting message from the bot in the specified or configured language.
[**setCardBookmark**](HabotApi.md#setcardbookmark) | **PUT** /habot/cards/{cardUID}/bookmark | Sets a bookmark on a card.
[**unsetCardBookmark**](HabotApi.md#unsetcardbookmark) | **DELETE** /habot/cards/{cardUID}/bookmark | Removes the bookmark on a card.
[**unsetCardBookmarkCompat**](HabotApi.md#unsetcardbookmarkcompat) | **POST** /habot/compat/cards/{cardUID}/unbookmark | Removes the bookmark on a card (compatibility endpoint).
[**updateCard**](HabotApi.md#updatecard) | **PUT** /habot/cards/{cardUID} | Updates a card in the card deck.
[**updateCardTimestamp**](HabotApi.md#updatecardtimestamp) | **PUT** /habot/cards/{cardUID}/timestamp | Updates the timestamp on a card to the current time
[**updateCard_0**](HabotApi.md#updatecard_0) | **POST** /habot/compat/cards/{cardUID} | Updates a card in the card deck (compatibility endpoint).
[**webPushConfig**](HabotApi.md#webpushconfig) | **GET** /habot/notifications/vapid | Gets or generates the public VAPID key used for push notifications.
[**webPushSubscribe**](HabotApi.md#webpushsubscribe) | **POST** /habot/notifications/subscribe | Subscribes a new client for push notifications.

# **chat**
> \Swagger\Client\Model\ChatReply chat($body, $accept_language)

Send a query to HABot to interpret.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | human language query
$accept_language = "accept_language_example"; // string | language

try {
    $result = $apiInstance->chat($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->chat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| human language query |
 **accept_language** | **string**| language | [optional]

### Return type

[**\Swagger\Client\Model\ChatReply**](../Model/ChatReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCard**
> createCard($body)

Creates a new card in the card deck.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Card(); // \Swagger\Client\Model\Card | card

try {
    $apiInstance->createCard($body);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->createCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Card**](../Model/Card.md)| card |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCard_0**
> createCard_0($skip, $count)

Creates a new card in the card deck.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$skip = 56; // int | 
$count = 56; // int | 

try {
    $apiInstance->createCard_0($skip, $count);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->createCard_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**|  | [optional]
 **count** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCard_1**
> createCard_1($body)

Creates a new card in the card deck (compatibility endpoint).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | card

try {
    $apiInstance->createCard_1($body);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->createCard_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| card |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCard**
> deleteCard($card_uid)

Deletes a card from the card deck.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_uid = "card_uid_example"; // string | cardUID

try {
    $apiInstance->deleteCard($card_uid);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->deleteCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_uid** | **string**| cardUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCardPost**
> deleteCardPost($card_uid)

Deletes a card from the card deck (compatibility endpoint).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_uid = "card_uid_example"; // string | cardUID

try {
    $apiInstance->deleteCardPost($card_uid);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->deleteCardPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_uid** | **string**| cardUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCards**
> getAllCards()

Gets all cards of the card deck.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getAllCards();
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->getAllCards: ', $e->getMessage(), PHP_EOL;
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

# **getAttributes**
> \Swagger\Client\Model\ChatReply getAttributes($accept_language)

Gets all item named attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | language

try {
    $result = $apiInstance->getAttributes($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| language | [optional]

### Return type

[**\Swagger\Client\Model\ChatReply**](../Model/ChatReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCardByUid**
> getCardByUid($card_uid)

Gets a card from the card deck by its UID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_uid = "card_uid_example"; // string | cardUID

try {
    $apiInstance->getCardByUid($card_uid);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->getCardByUid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_uid** | **string**| cardUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **greet**
> \Swagger\Client\Model\ChatReply greet($accept_language)

Retrieves a first greeting message from the bot in the specified or configured language.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | language (will use the default if omitted)

try {
    $result = $apiInstance->greet($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->greet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| language (will use the default if omitted) | [optional]

### Return type

[**\Swagger\Client\Model\ChatReply**](../Model/ChatReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCardBookmark**
> setCardBookmark($card_uid)

Sets a bookmark on a card.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_uid = "card_uid_example"; // string | cardUID

try {
    $apiInstance->setCardBookmark($card_uid);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->setCardBookmark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_uid** | **string**| cardUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsetCardBookmark**
> unsetCardBookmark($card_uid)

Removes the bookmark on a card.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_uid = "card_uid_example"; // string | cardUID

try {
    $apiInstance->unsetCardBookmark($card_uid);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->unsetCardBookmark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_uid** | **string**| cardUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsetCardBookmarkCompat**
> unsetCardBookmarkCompat($card_uid)

Removes the bookmark on a card (compatibility endpoint).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_uid = "card_uid_example"; // string | cardUID

try {
    $apiInstance->unsetCardBookmarkCompat($card_uid);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->unsetCardBookmarkCompat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_uid** | **string**| cardUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCard**
> updateCard($body, $card_uid)

Updates a card in the card deck.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Card(); // \Swagger\Client\Model\Card | card
$card_uid = "card_uid_example"; // string | cardUID

try {
    $apiInstance->updateCard($body, $card_uid);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->updateCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Card**](../Model/Card.md)| card |
 **card_uid** | **string**| cardUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCardTimestamp**
> updateCardTimestamp($card_uid)

Updates the timestamp on a card to the current time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_uid = "card_uid_example"; // string | cardUID

try {
    $apiInstance->updateCardTimestamp($card_uid);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->updateCardTimestamp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_uid** | **string**| cardUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCard_0**
> updateCard_0($body, $card_uid)

Updates a card in the card deck (compatibility endpoint).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | card
$card_uid = "card_uid_example"; // string | cardUID

try {
    $apiInstance->updateCard_0($body, $card_uid);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->updateCard_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| card |
 **card_uid** | **string**| cardUID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webPushConfig**
> webPushConfig()

Gets or generates the public VAPID key used for push notifications.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->webPushConfig();
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->webPushConfig: ', $e->getMessage(), PHP_EOL;
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

# **webPushSubscribe**
> webPushSubscribe($body)

Subscribes a new client for push notifications.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HabotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | 

try {
    $apiInstance->webPushSubscribe($body);
} catch (Exception $e) {
    echo 'Exception when calling HabotApi->webPushSubscribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

