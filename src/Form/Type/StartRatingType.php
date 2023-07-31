<?php
	
	namespace Symfony\StarRatingBundle\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\Extension\Core\Type\NumberType;

	final class StartRatingType extends AbstractType
	{
		public function configureOptions(OptionsResolver $resolver): void
		{
			$resolver->setDefaults([
				
			]);
		}

		public function getParent(): string
		{
			return NumberType::class;
		}
	}
	