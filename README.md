# ReturnResponse

Simple package for returning standard json responses for Laravel Framework.

[![Packagist Version](https://img.shields.io/packagist/v/soltancode/return-response?label=stable)](https://packagist.org/packages/soltancode/return-response)
[![Packagist Stars](https://img.shields.io/packagist/stars/soltancode/return-response)](https://packagist.org/packages/soltancode/return-response)
[![Packagist Downloads](https://img.shields.io/packagist/dt/soltancode/return-response)](https://packagist.org/packages/soltancode/return-response)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/soltancode/return-response)](https://packagist.org/packages/soltancode/return-response)
[![Packagist License](https://img.shields.io/packagist/l/soltancode/return-response)](https://github.com/soltancode/ReturnResponse/blob/main/LICENSE)

## Installation



```
composer require soltancode/return-response
```

## Usage

#### Code example:
```php
# If you don't use this as helper, import this.
use Soltancode\ReturnResponse\Facades\ReturnResponse;

// $httpResponse = 200;
// $data         = ['success' => true];
// $message      = "Operation done successfully.";

# Using as facade:
return ReturnResponse::response($httpResponse, $data, $message);

# Using as helper:
return returnResponse()->response($httpResponse, $data, $message);
```

#### Response example:
```json
{
    "status_code": 200,
    "message": "Operation done successfully.",
    "count": 1,
    "data": {
        "success": true
    }
}
```

## Other Packages
[SendRequest](https://github.com/soltancode/SendRequest) - PHP cURL class that makes it easy to send HTTP requests and integrate with web APIs.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://github.com/soltancode/ReturnResponse/blob/main/LICENSE)
