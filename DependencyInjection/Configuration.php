<?php

/*
 * (c) Philipp Wahala <philipp.wahala@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace hacfi\RequestDumperBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


class Configuration implements ConfigurationInterface
{
    private $alias;

    /**
     * Constructor.
     *
     * @param string $alias
     */
    public function __construct($alias)
    {
        $this->alias = $alias;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $treeBuilder
            ->root($this->alias)
            ->children()
                ->scalarNode('date_format')
                    ->defaultValue('Y-m-d_H-i-s')
                ->end()
                ->scalarNode('file_extension')
                    ->defaultValue('request_')
                ->end()
                ->scalarNode('file_prefix')
                    ->defaultValue('request_')
                ->end()
                ->scalarNode('path')
                    ->defaultValue('%kernel.root_dir%/logs')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
