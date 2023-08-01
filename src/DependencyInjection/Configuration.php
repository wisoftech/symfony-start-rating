<?php

declare(strict_types=1);

namespace Symfony\StarRatingBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('symfony_star_rating');
        $rootNode = $treeBuilder->getRootNode();
		return $treeBuilder;
	}
}