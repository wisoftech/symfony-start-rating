<?php

	namespace Symfony\StarRatingBundle;
	
	use Symfony\Component\HttpKernel\Bundle\Bundle;

	class SymfonyStarRatingBundle extends Bundle
	{

		public function getPath(): string
		{
			return __DIR__;
		}
	}

	