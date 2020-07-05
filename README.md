# PHP Session - Flash Messages

Store messages in session data until they are retrieved.

## Installation

```json
 "name": "yourProjectName",
    "description": "Your description",
    "type": "your type",
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/lika1995/session"
        }
    ],
    "require": {
        "lika1995/session": "dev-master"
    },
    "minimum-stability": "dev"
}
```
## Add this package to your composer.

composer require lika1995/session


## Basic Usage
```php
//start session
if (!session_id()) @session_start();


require 'vendor/autoload.php';
use Lika\Session\Session;

//Initiate the class

$session = new Session();


//add new item to $_SESSION

$session->put('name', 'value');

//check if item exists in $_SESSION

$session->exists('name');

//delete item from $_SESSION

$session->delete('name');

//get item from $_SESSION

$session->get('name');

//add flash message

$session->addMessage('success', 'registration completed successfully');

//get flash message 

$session->getMessage('success');

// If you need to redirect, include the URL with the last message:
 
 $session->addMessage('success', 'registration completed', 'http://redirect-url.com');
```





