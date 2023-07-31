<?php

declare(strict_types=1);

namespace Symfony\StarRatingBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

/**
 * @internal
 */
final class TwigThemeCompilePass implements CompilerPassInterface
{
    
    public function process(ContainerBuilder $container): void
    {
        $def = $container->getDefinition('twig');
        $def->addMethodCall('addGlobal', array('form_themes', ['@SymfonyStarRatingBundle/form/type/custom_types.html.twig']));
    }

}
