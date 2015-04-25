# Request Dumper Bundle for Symfony


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
