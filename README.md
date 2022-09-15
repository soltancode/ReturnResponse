# ReturnResponse

It's a return helper for showing standard json responses.

[![Latest Stable Version](http://poser.pugx.org/soltancode/return-response/v)](https://packagist.org/packages/soltancode/return-response) [![Total Downloads](http://poser.pugx.org/soltancode/return-response/downloads)](https://packagist.org/packages/soltancode/return-response) [![Latest Unstable Version](http://poser.pugx.org/soltancode/return-response/v/unstable)](https://packagist.org/packages/soltancode/return-response) [![License](http://poser.pugx.org/soltancode/return-response/license)](https://github.com/soltancode/ReturnResponse/blob/main/LICENSE) [![PHP Version Require](http://poser.pugx.org/soltancode/return-response/require/php)](https://packagist.org/packages/soltancode/return-response)

## Installation



```
composer require soltancode/return-response
```

## Usage

Code example:
```php
// $httpResponse = 200;
// $data         = ['success' => true];
// $message      = "Operation done successfully.";
            
return returnResponse()->response($httpResponse, $data, $message);
```

Response example:
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

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://github.com/soltancode/ReturnResponse/blob/main/LICENSE)
