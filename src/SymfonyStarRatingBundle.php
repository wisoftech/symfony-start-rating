<?php

	namespace Symfony\StarRatingBundle;

	use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

	class SymfonyStarRatingBundle extends AbstractBundle
	{
		public function getPath(): string
		{
			return __DIR__;
		}
	}

	