# JSON API

Send json request, response json

## Request
    {
      "welcome": {
        "hello": {
          "name": "Bob"
        },
        "printBack": {
          "foo": "bar"
        }
      }
    }
    
## Response
    {
      "welcome": {
        "hello": {
          "msg": "Hello Bob"
        },
        "printBack": {
          "foo": "bar"
        }
      }
    }

### Controller class
* Controller\Welcome()->hello(\['name' => 'foo'\])
* Controller\Welcome()->printBack(\['foo' => 'bar'\])

### Request class
* Request\Welcome\Hello
* Request\Welcome\PrintBack

