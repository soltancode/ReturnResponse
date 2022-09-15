# ReturnResponse

It's a return helper for showing standard json responses.

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
