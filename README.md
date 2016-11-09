# Simple SNMP

This repository holds an interface that describes a SNMP client, and some
classes to be used or extended in implementations.


## Install

Via Composer

``` bash
$ composer require surrealcristian/simple-snmp
```


## Requirements

- PHP 5.4+


## API

```
namespace SurrealCristian\SimpleSnmp


interface SnmpV2cInterface

public array get ( string $host, string $community, string $oid, int $timeout, int $retries )

public array getNext ( string $host, string $community, string $oid, int $timeout, int $retries )

public array walk ( string $host, string $community, string $oid, int $timeout, int $retries )

public array bulkWalk ( string $host, string $community, string $oid, int $timeout, int $retries )

public set ( string $host, string $community, string $oid, string $type, string $value, int $timeout, int $retries )



namespace SurrealCristian\SimpleSnmp\Exception


class SimpleSnmpException extends Exception


class TimeoutException extends SimpleSnmpException
```


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
