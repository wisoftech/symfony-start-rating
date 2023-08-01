<?php

declare(strict_types=1);

namespace Symfony\StarRatingBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\Config\FileLocator;

use Symfony\StarRatingBundle\Twig\AppExtension;

final class SymfonyStarRatingExtension extends Extension
{
	public function load(array $configs, ContainerBuilder $container): void
    {
        
        $bundles = $container->getParameter('kernel.bundles');
        \assert(\is_array($bundles));

		$loader = new PhpFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.php');

    }
}