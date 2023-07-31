<?php

	namespace Symfony\StarRatingBundle;

	use Symfony\Component\HttpKernel\Bundle\Bundle;
	use Symfony\Component\DependencyInjection\ContainerBuilder;
	use Symfony\Component\DependencyInjection\Compiler\PassConfig;

	use Symfony\StarRatingBundle\DependencyInjection\TwigExtensionCompilePass;
	use Symfony\StarRatingBundle\DependencyInjection\TwigThemeCompilePass;

	class SymfonyStarRatingBundle extends Bundle
	{

		public function build(ContainerBuilder $container): void
    	{
			parent::build($container);

			$container->addCompilerPass(new TwigExtensionCompilePass());
			$container->addCompilerPass(new TwigThemeCompilePass());

		}

		public function getPath(): string
		{
			return __DIR__;
		}
	}

	