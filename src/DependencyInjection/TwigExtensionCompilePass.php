<?php

declare(strict_types=1);

namespace Symfony\StarRatingBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

use Symfony\StarRatingBundle\Twig\AppExtension;


/**
 * @internal
 */
final class TwigExtensionCompilePass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container): void
    {

        foreach ($container->findTaggedServiceIds('twig.extension') as $id => $tags) {
            if (AppExtension::class === $container->getDefinition($id)->getClass()) {
				return;
            }
        }

        $definition = new Definition(AppExtension::class);
        $definition->addTag('twig.extension');
        $container->setDefinition(AppExtension::class, $definition);
		
    }

}
