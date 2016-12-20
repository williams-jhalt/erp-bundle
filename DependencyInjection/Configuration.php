<?php

namespace Williams\ErpBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {

    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('williams_erp');

        $rootNode->children()
                ->scalarNode('role')->end()
                ->arrayNode('erp_server')
                ->children()
                ->scalarNode('host')->end()
                ->scalarNode('username')->end()
                ->scalarNode('password')->end()
                ->scalarNode('company')->end()
                ->scalarNode('appname')->end()
                ->end()
                ->end()
                ->end();

        return $treeBuilder;
    }

}
