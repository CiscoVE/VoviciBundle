<?php

namespace CiscoSystems\VoviciBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root( 'cisco_systems_vovici' );
//
//        $supportedDrivers = array( 'orm', 'mongodb' );
//
//        $rootNode
//            ->children()
//                ->scalarNode( 'url' )
//                    ->isRequired()
//                    ->cannotBeEmpty()
//                ->end()
//            ->end();

        return $treeBuilder;
    }
}
