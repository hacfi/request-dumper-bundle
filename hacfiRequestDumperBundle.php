<?php

/*
 * (c) Philipp Wahala <philipp.wahala@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace hacfi\RequestDumperBundle;

use Symfony\Component\Console\Application;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use hacfi\RequestDumperBundle\DependencyInjection\hacfiRequestDumperExtension;


class hacfiRequestDumperBundle extends Bundle
{
    private $configurationAlias;

    public function __construct($alias = 'hacfi_request_dumper')
    {
        $this->configurationAlias = $alias;
    }

    public function getContainerExtension()
    {
        return new hacfiRequestDumperExtension($this->configurationAlias);
    }

    public function registerCommands(Application $application)
    {
        return;
    }
}
