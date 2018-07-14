# phpmodbus

Implementation of the basic functionality of the Modbus TCP and UDP based protocol using PHP. 

**NOTE: This is a fork to fix & update the library code.**

> **What's new**
> 
> This fork adds a namespace and fixes issues encountered when porting to PHP 7


## Implemented features

 * Modbus master
 * FC1 - Read coils 
 * FC2 - Read input discretes
 * FC3 - Read holding registers 
 * FC4 - Read holding input registers 
 * FC5 - Write single coil 
 * FC6 - Write single register
 * FC15 - Write multiple coils
 * FC16 - Write multiple registers
 * FC23 - Read/Write multiple registers


## Requirements

 * The PHP extension php_sockets.dll should be enabled (server php.ini file)

 
## Example

```php
use PHPModbus\ModbusMaster; 
use PHPModbus\PhpType; 

// Modbus master UDP
$modbus = new ModbusMaster("192.168.1.1", "UDP"); 
// Read multiple registers
try {
    $recData = $modbus->readMultipleRegisters(0, 12288, 5); 
} catch (Exception $e) {
    // Print error information if any
    echo $modbus . "\n";
    echo $e;
    exit;
}
// Print data in string format
echo PhpType::bytes2string($recData); 
```

Use the `setTimeout($seconds)` and `setSocketTimeout($read_timeout_sec, $write_timeout_sec)` methods to adjust wait times.

Most of the code is (to some extent) commented and documented with PhpDoc.


## GoogleCode legacy docs & downloads

This project was originally hosted on Google Code. It is still archived here:

* [GoogleCode Archived Repo](http://code.google.com/p/phpmodbus)

