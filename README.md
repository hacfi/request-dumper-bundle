# Request Dumper Bundle for Symfony

Dumps HTTP requests into a log file.

You might not need but I do.

## Example output

app/logs/request_2015-04-25_20-07-03.log

```
GET /dump HTTP/1.1
Accept:          text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
Accept-Encoding: gzip, deflate, sdch
Accept-Language: en-US,en;q=0.8,es;q=0.6
Connection:      keep-alive
Content-Length:
Content-Type:
Cookie:          s=mo8t0llrlkg95tnrg3vurp46f2; XDEBUG_SESSION=17457
Dnt:             1
Host:            domain.tld
User-Agent:      Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36
X-Php-Ob-Level:  1


```


## Install


``` sh
composer require "hacfi/request-dumper-bundle":"dev-master"
```

## Configuration


``` yml
# app/config/config.yml

hacfi_request_dumper:
    date_format: 'Y-m-d_H-i-s'
    file_extension: 'log'
    file_prefix: 'request_'
    path: '%kernel.root_dir%/../var/logs'
```

``` yml
# app/config/routing.yml

dump:
    path:     /dump
    defaults: { _controller: hacfi_request_dumper.controller.dump:indexAction }
```
