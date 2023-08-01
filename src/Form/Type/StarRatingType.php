<?php
	
	namespace Symfony\StarRatingBundle\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\Extension\Core\Type\NumberType;
	use Symfony\Component\OptionsResolver\OptionsResolver;
	use Symfony\Component\Form\FormInterface;
	use Symfony\Component\Form\FormView;

	final class StarRatingType extends AbstractType
	{

		public function buildView(FormView $view, FormInterface $form, array $options)
		{
			
		}
		
		public function configureOptions(OptionsResolver $resolver): void
		{
			$resolver->setDefaults([
				'scale' => 2,
				'attr' => ['class'=>'star_rating_type']
			]);
		}

		public function getParent(): string
		{
			return NumberType::class;
		}
	}
	