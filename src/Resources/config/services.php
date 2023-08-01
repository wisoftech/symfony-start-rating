<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\StarRatingBundle\Twig\AppExtension;

return function(ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set(AppExtension::class)
        ->tag('twig.extension');
};